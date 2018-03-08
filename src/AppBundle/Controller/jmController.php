<?php
// src/AppBundle/Controller/jmController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class jmController extends Controller
{
	/**
	* @Route("/jm")
	*/
	public function numberAction()
	{
		$number = mt_rand(0, 1000);

		return $this->render('jm/numero.html.twig', array(
			'number' => $number,
		));
	}
}