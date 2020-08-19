<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Это наша первая страница на Symfomy');
    }

    /**
     * @Route("/articles/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Будущая страница статьи: %s',
            ucwords(str_ireplace('-', ' ', $slug))
        ));
    }
}