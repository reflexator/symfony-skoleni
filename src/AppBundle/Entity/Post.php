<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	/**
	 * @ORM\Column(type="datetime")
	 */
    private $date;

	/**
	 * @ORM\Column(type="string")
	 */
	private $title;

	/**
	 * @ORM\Column(type="text")
	 */
	private $content;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $active;

	public function __construct()
	{
		$this->active = FALSE;
	}

	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function create(\DateTime $date, string $title, string $content)
	{
		$this->date = $date;
		$this->title = $title;
		$this->content = $content;
	}

	/**
	 * @return mixed
	 */
	public function getDate()
	{
		return $this->date->format('d.m.Y H:i');
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @return mixed
	 */
	public function getContent()
	{
		return $this->content;
	}
}

