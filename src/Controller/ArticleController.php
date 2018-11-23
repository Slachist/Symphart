<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController extends Controller {
    /**
     * @Route("/",name="article_list")
     * @Method({"GET"})
     */
    public function index(){
        // return new Response('<html><body>With annotationsc</body></html>');
        $articles=$this->getDoctrine()->getRepository
        (Article::class)->findAll();

        return $this->render('article/index.html.twig', array
        ('articles' => $articles));
    }

    /**
     * @Route("/article/{id}",name="article_show")
     */
    public function show($id){
        $article = $this->getDoctrine()->getRepository
        (Article::class)->find($id);

        return $this->render('article/show.html.twig', array
        ('article' => $article));
    }

    // /**
    //  * @Route("/article/save")
    //  */
    // public function save(){
    //     $entityManager = $this->getDoctrine()->getManager();
    //     $article = new Article();
    //     $article->setTitle('Article 1');
    //     $article->setBody("This is the body for the article one");

    //     $entityManager->persist($article);
    //     $entityManager->flush();

    //     return new Response('Saves an article with ID of '.$article->getId());
    // }
}


