<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\TranslationRouter;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class TranslationController extends AbstractController
{
    /**
     * Translate text between languages using dynamic engine routing.
     *
     * @Route("/translate", name="api_translate", methods={"POST"})
     *
     * @OA\Post(
     *     path="/api/translate",
     *     summary="Translate text between languages",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"text", "source", "target"},
     *             @OA\Property(property="text", type="string", example="Hello"),
     *             @OA\Property(property="source", type="string", example="en"),
     *             @OA\Property(property="target", type="string", example="fr"),
     *             @OA\Property(property="engine", type="string", example="deepl", nullable=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful translation",
     *         @OA\JsonContent(
     *             @OA\Property(property="result", type="string", example="Bonjour")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid input"
     *     )
     * )
     */
    public function translate(Request $request, TranslationRouter $router): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (empty($data['text']) || empty($data['source']) || empty($data['target'])) {
            return $this->json(['error' => 'Missing required fields'], 400);
        }

        $options = [];
        if (!empty($data['engine'])) {
            $options['engine'] = $data['engine'];
        }

        $result = $router->translate(
            $data['text'],
            $data['source'],
            $data['target'],
            $options
        );

        return $this->json(['result' => $result]);
    }
}
