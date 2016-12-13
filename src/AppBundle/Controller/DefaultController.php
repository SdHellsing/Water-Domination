<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/index/home", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'name' => 'Simon',
            'age' => '21'
        ]);
    }

    /**
     * @Route("/users/register", name="user_login")
     */
    public function userRegister()
    {
        return $this->render('default/registration.html.twig', [
            "username" => "Simon",
            "password" => "pass123",
            "ids" => [1,4,6,7,55,44]
        ]);
    }

    /**
     * @Route("/user/checkregister", name="user_check_register")
     * @Method("POST")
     */

    public function userRegisterProcess( Request $request)
    {
        var_dump($request -> get('username'));
        exit;
    }

    /**
     * @Route("/users/{id}/{name}", name="get_one_user")
     * @param $id
     */
    public function userView($id, $name)
    {
        return $this->redirectToRoute("homepage");
    }

}
