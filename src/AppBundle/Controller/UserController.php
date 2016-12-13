<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/users/register", name="users_register")
     * @Method("GET")
     */

    public function register()
    {
        $form = $this->createForm(UserType::class);
        return $this->render("users/register.html.twig",
            [
                'form' => $form->createView()
            ]);

    }

    /**
     * @param Request $request
     * @Route("/users/register", name="user_register_post")
     * @Method("POST")
     */
    public function registerPost(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute("users_all");
        } else {
            $form->addError(new FormError("Neshto se obyrka dramatichno"));

            return $this->render('users/register.html.twig',
                [
                    'form' => $form->createView()
                ]
            );
        }
    }

    /**
     * @Route("/users/all", name="users_all")
     */

    public function all()
    {
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        return $this->render("users/all.html.twig",
            [
                'users' => $users
            ]
        );

    }

    /**
     * @param User $user
     * @Route("/users/{id}", name="users_edit")
     * @Method("GET")
     */

    public function edit(User $user)
    {
        $form = $this->createForm(UserType::class, $user);

        return $this->render("users/edit.html.twig",
            [
                'form' => $form->createView()
            ]);

    }

    /**
     * @param User $user
     * @param Request $request
     * @Route("/users/{id}", name="users_edit_post")
     * @Method("POST")
     */

    public function editPost(User $user, Request $request)
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute("users_all");
        } else {
            return $this->redirectToRoute("users_edit", [$user->getId()]);
        }

    }

}
