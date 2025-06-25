<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\TranslationRouter;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiGatewayController extends AbstractController
{
    /**
     * @Route("/api/translate", name="api_translate", methods={"POST"})
     * @OA\Post(
     *     path="/api/translate",
     *     summary="Translate text",
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             required={"text", "source", "target"},
     *             @OA\Property(property="text", type="string"),
     *             @OA\Property(property="source", type="string"),
     *             @OA\Property(property="target", type="string"),
     *             @OA\Property(property="engine", type="string", nullable=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Translated text",
     *         @OA\JsonContent(
     *             @OA\Property(property="result", type="string")
     *         )
     *     )
     * )
     */
    public function translate(Request $request, TranslationRouter $router): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $result = $router->translate(
            $data['text'] ?? '',
            $data['source'] ?? 'en',
            $data['target'] ?? 'fr',
            $data['engine'] ?? null
        );

        return $this->json(['result' => $result]);
    }
}
