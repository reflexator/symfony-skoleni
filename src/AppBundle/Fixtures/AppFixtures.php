<?php

namespace AppBundle\Fixtures;

use AppBundle\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{
		$post = new Post();
		$post->create(new \DateTime(), 'Novy post', 'Lorem ipsum blabla');
		$manager->persist($post);
		$manager->flush();
	}
}
