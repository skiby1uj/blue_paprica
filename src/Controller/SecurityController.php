<?php

namespace App\Controller;


use http\Exception\RuntimeException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
	/**
	 * @Route("/login", name="login")
	 */
	public function loginAction()
	{
		return $this->render('security/login.html.twig');

	}

	/**
	 * @Route("/logout", name="logout")
	 */
	public function logoutAction()
	{
		throw new RuntimeException("This should never be called directly");
	}
}