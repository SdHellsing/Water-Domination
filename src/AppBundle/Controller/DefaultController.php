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
     * @Route("/", name="homepage")
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
     * @Route("user/register", name="user_login")
     */
    public function userRegister()
    {
        return $this->render('default/registration.html.twig', [
            "username" => "Simon",
            "age" => "21",
            "email" => "chris@fastcomet.com",
            "password" => "pass123"
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


}
