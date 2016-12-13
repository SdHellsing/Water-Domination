<?php

namespace AppBundle\Controller;

use AppBundle\DTO\UserRegisterBindingModel;
use AppBundle\Form\UserType;
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
     * @Route("/users/register", name="user_login")
     * @Method("GET")
     */
    public function register()
    {
        $model = new UserRegisterBindingModel();
        $model->setUsername("Devil");
        $model->setPassword("666");

        $form = $this->createForm(UserType::class, $model);

        return $this->render('default/registration.html.twig', [
            'form' => $form ->createView()
        ]);
    }

    /**
     * @Route("/users/register", name="user_check_register")
     * @Method("POST")
     */

    public function userRegisterProcess( Request $request)
    {

        $form = $this ->createForm(UserType::class);
        $form->handleRequest($request);

        if($form->isValid()){
            $model = $form->getData();
            var_dump($model);
            echo 'Congratz! The form is valid!';

        }else{
            echo 'Error! The form you have submitted is invalid!';
        }
    }

    /**
     * @Route("/users/{id}/{name}", name="get_one_user")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function userView($id, $name)
    {
        return $this->redirectToRoute("homepage");
    }

}
