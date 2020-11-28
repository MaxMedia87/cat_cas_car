<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArticleLikeController extends AbstractController
{
    /**
     * @param string $id
     * @param string $type
     *
     * @Route("/articles/{id<\d+>}/like/{type<like|dislike>}", methods={"POST"}, name="app_article_like")
     *
     * @return JsonResponse
     */
    public function like(string $id, string $type): JsonResponse
    {
        if ($type === 'like') {
            $likes = rand(121, 200);
        } else {
            $likes = rand(0, 119);
        }

        return $this->json(['likes' => $likes]);
    }
}