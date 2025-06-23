<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;
use App\Message\TranslationRequest;

class TranslationController extends AbstractController
{
    #[Route('/api/translate', name: 'api_translate', methods: ['POST'])]
    public function translate(Request $request, MessageBusInterface $bus): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $bus->dispatch(new TranslationRequest(
            $data['text'],
            $data['from'],
            $data['to'],
            $this->getUser()->getId()
        ));

        return new JsonResponse(['status' => 'queued'], 202);
    }
}
