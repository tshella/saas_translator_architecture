<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\CredentialsInterface;

class JwtAuthenticator extends AbstractAuthenticator
{
    private UserProviderInterface $userProvider;

    public function __construct(UserProviderInterface $userProvider)
    {
        $this->userProvider = $userProvider;
    }

    public function supports(Request $request): ?bool
    {
        // Supports all requests with Authorization Bearer header
        return $request->headers->has('Authorization') &&
            str_starts_with($request->headers->get('Authorization'), 'Bearer ');
    }

    public function authenticate(Request $request): Passport
    {
        $authorizationHeader = $request->headers->get('Authorization');
        $jwt = substr($authorizationHeader, 7); // remove "Bearer "

        if (!$jwt) {
            throw new AuthenticationException('No JWT token found');
        }

        // Here you would verify the JWT and get username or user id
        // For demonstration, we assume the JWT is username (replace with real JWT verification)

        // Fake verification (replace with your JWT decoding logic)
        $username = $jwt; 

        return new SelfValidatingPassport(
            new UserBadge($username, function ($userIdentifier) {
                $user = $this->userProvider->loadUserByUsername($userIdentifier);
                if (!$user) {
                    throw new UserNotFoundException(sprintf('User "%s" not found.', $userIdentifier));
                }
                return $user;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, string $firewallName): ?Response
    {
        // On success, continue the request
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return new Response('Authentication Failed: ' . $exception->getMessage(), Response::HTTP_UNAUTHORIZED);
    }
}
