<?php

namespace Homesoft\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seasons
 *
 * @ORM\Table(name="seasons", indexes={@ORM\Index(name="fk_serie1_idx", columns={"media_id"})})
 * @ORM\Entity
 */
class Season
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Media")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     * })
     */
    private $media;


    /**
     * Set title
     *
     * @param string $title
     * @return Season
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set media
     *
     * @param \Homesoft\MediaBundle\Entity\Media $media
     * @return Season
     */
    public function setMedia(\Homesoft\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Homesoft\MediaBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
}
