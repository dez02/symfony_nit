<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

	/**
	 * @Route("/home", name="home", methods={"GET"})
	 *
	 * @return Response
	 */
	public function home():Response
	{
		return new Response("toto");
	}
}
