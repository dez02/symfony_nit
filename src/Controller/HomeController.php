<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

	/**
	 * @Route("/home", name="homepage", methods={"GET"})
	 *
	 * @return Response
	 */
	public function home():Response
	{

		$prenoms = ['Lior' => 12, 'Dez' => 27];

		return $this->render(
			"home.html.twig",
			[
				'title' => 'Welcome everybody!',
				'age' => 12,
				'prenoms' => $prenoms
			]
		);
	}


	/**
	 * @Route("/hello/{prenom}/{age}", name="hello", methods={"GET"})
	 * @Route("/hello", name="hello_base", methods={"GET"})
	 * @Route("/hello/{prenom}", name="hello_prenom", methods={"GET"})
	 *
	 * @return Response
	 */
	public function hello($prenom = "default", $age = 0):Response
	{
			return $this->render(
				"hello.html.twig",
				[
					"prenom" => $prenom,
					"age" => $age
				]);
	}
}
