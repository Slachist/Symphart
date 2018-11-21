<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController extends Controller {
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index(){
        // return new Response('<html><body>With annotationsc</body></html>');
        $articles=['Article 1','Article 2'];

        return $this->render('article/index.html.twig', array
        ('articles' => $articles));
    }
}


