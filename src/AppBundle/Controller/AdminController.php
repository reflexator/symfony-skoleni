<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{
	/**
	 * @Route("/admin", name="admin_homepage")
	 */
	public function homepageAction()
	{
		return $this->render('admin/index.html.twig');
	}

}
