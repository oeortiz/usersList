<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
	public function loginAction(AuthenticationUtils $authenticationUtils)
	{
	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    dump($error);
	    // joder();
	    return $this->render(
            'security/login.html.twig', array(
                'last_username' => $lastUsername,
                'error' => $error,
            ));

	}

	public function logoutAction(){

	}
}