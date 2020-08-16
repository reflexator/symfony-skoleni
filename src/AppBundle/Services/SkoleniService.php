<?php

namespace AppBundle\Services;

use AppBundle\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;

class SkoleniService
{

	/** @var EntityManagerInterface */
	private $entityManager;

	public function __construct(EntityManagerInterface $entityManager)
	{
		$this->entityManager = $entityManager;
	}

	public function getPostById(int $id)
	{
		return $this->entityManager->getRepository(Post::class)->find($id);
	}

}
