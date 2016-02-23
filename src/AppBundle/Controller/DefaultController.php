<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:default:home.html.twig');
    }

    /**
     * @Route("/post/{slug}", name="post")
     */
    public function postAction(Article $article)
    {
        return $this->render('AppBundle:default:post.html.twig', array('article' => $article));
    }

    /**
     * @Route("/posts", name="posts")
     */
    public function postsAction()
    {
        $articles = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();

        return $this->render('AppBundle:default:posts.html.twig', array('articles' => $articles));
    }
    
    
    /**
     * @Route("/buy", name="buy tickets")
     */
    public function buyAction()
    {
        
        $concerts = $this->getDoctrine()->getRepository('AppBundle:Concert')->findAll();
       
        return $this->render('AppBundle:Concert:achete.html.twig', array('concerts' => $concerts));
        
        
        
        
        
    }
   
    
    /**
     * @Route("/reserve", name="reserve tickets")
     */
    public function buytiketAction()
    {
         $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('dummycompte2016@gmail.com')
        ->setTo('dummycompte2016@gmail.com')
        ->setBody('conformation du payment');
     $this->get('mailer')->send($message);
        return $this->render('AppBundle:Concert:buytiket.html.twig');
    }
}
