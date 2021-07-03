<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\View\View;

class UserController extends AbstractFOSRestController
{
//    trait ControllerTrait
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }

    /**
     * @Route("/user/some_route", name="user add")
     */
    public function add(): Response
    {
        return $this->json([
            'message' => 'user add',
        ]);
    }

    /**
     * @Route("/user/get", name="get user")
     */
    public function getUsersAction()
    {
        $data = [1,2,3]; // get data, in this case list of users.
        $view = $this->view($data, 200);
        var_dump($view->getContext());die;
        return $this->handleView($view);
    }

    public function redirectAction()
    {
        $view = $this->redirectView($this->generateUrl('some_route'), 301);
        // or
        $view = $this->routeRedirectView('some_route', array(), 301);

        return $this->handleView($view);
    }

    /**
     * @Route("/view/listener", name="View Response listener")
     */
    public function getViewAction()
    {
        return $data = [1,2,3];
    }
}
