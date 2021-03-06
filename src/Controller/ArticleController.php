<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('articles/homepage.html.twig');
    }

    /**
     * @Route("/articles/{slug}", name="app_article_show")
     */
    public function show($slug)
    {

        $comments = [
            'Не обращайте внимание на троллей.',
            'Это глубоко несчастные люди. Они считают, что обижая других, могут хоть как-то сами возвыситься',
            'Банить хамов надо, Вы полностью правы',
            'Меня все устраивает. Не было желания после прочтения оставлять плохой комментарий. Удачи!'
        ];
        return $this->render('articles/show.html.twig', [
            'article' => ucwords(str_ireplace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}