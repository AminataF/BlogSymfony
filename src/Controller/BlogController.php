<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\ArticlesRepository;
use App\Entity\Articles;
use App\Entity\Comment;
use App\Form\ArticlesType;
use App\Form\CommentType;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response{
        return $this->render('blog/index.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function allArticles(ArticlesRepository $repo): Response{
        $articles = $repo->findAll();
        return $this->render('blog/allArticles.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/blog/create", name="create_article")
     * @Route("/blog/{id}/edit", name="edit_article")
     */
    public function form(Articles $article = null, Request $request, EntityManagerInterface $manager): Response{
        if(!$article){
            $article = new Articles();
        }
        /*$form =$this->createFormBuilder($article)
            ->add('title')
            ->add("content")
            ->add('image')
            ->getForm();*/
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$article->getId()) {
                $article->setCreatedAt(new \DateTime());
            }
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('show_article', ['id' => $article->getId()]);
        }
        return $this->render('blog/createArticle.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null,
            'article', $article->getId()
        ]);
    }

    /**
     * @Route("/blog/{id}", name="show_article")
     */
    public function showArticles(Articles $article, Request $request, EntityManagerInterface $manager): Response{

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new \DateTime())
                    ->setArticles($article);
            $manager->persist($comment);
            $manager->flush();
            return $this->redirectToRoute('show_article', ['id' => $article->getId()]);
        }
        return $this->render('blog/showArticle.html.twig',[
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }

}
