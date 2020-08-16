<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Services\SkoleniService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SkoleniController extends Controller
{
	/**
	 * @Route("/skoleni", name="skoleni")
	 */
	public function indexAction(Request $request)
	{
		// replace this example code with whatever you need
		return $this->render('skoleni/index.html.twig', [
			'title' => 'Symfony rox',
		]);
	}

	/**
	 * @Route("/skoleni/di", name="skoleni_di")
	 */
	public function diAction(Request $request, EntityManagerInterface $entityManager)
	{
		$post = $entityManager->getRepository(Post::class)->find(1);

		// replace this example code with whatever you need
		return $this->render('skoleni/index.html.twig', [
			'title' => $post->getTitle(),
		]);
	}

	/**
	 * @Route("/skoleni/service", name="skoleni_service")
	 */
	public function serviceAction(SkoleniService $skoleniService)
	{
		/** @var Post $post */
		$post = $skoleniService->getPostById(1);

		/*$jsonEncoder = new JsonEncoder();
		$normalizer = new ObjectNormalizer();
		$serializer = new Serializer([$normalizer], [$jsonEncoder]);

		$data = [
			'post' => $post
		];

		$jsonData = $serializer->serialize($data, 'json');

		return new JsonResponse($jsonData, 200, [], TRUE);*/


		return $this->json(['post' => $post]);
	}

	public function anotherAction(Request $request)
	{
		// replace this example code with whatever you need
		return $this->render('skoleni/index.html.twig', [
			'title' => 'Symfony Another page',
		]);
	}

	public function divide($numerator, $denominator)
	{
		return $numerator / $denominator;
	}

	/**
	 * @Route("/skoleni/error", name="skoleni_error")
	 */
	public function errorAction(Request $request)
	{

		//$result = $this->divide(10, 0);
		$result = 10 / 0;

		// replace this example code with whatever you need
		return $this->render('skoleni/index.html.twig', [
			'title' => 'Symfony rox',
		]);
	}
}
