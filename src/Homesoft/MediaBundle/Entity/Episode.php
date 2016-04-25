<?php

namespace Homesoft\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episodes
 *
 * @ORM\Table(name="episodes", indexes={@ORM\Index(name="fk_episodes_seasons1_idx", columns={"season_id"})})
 * @ORM\Entity
 */
class Episode
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=150, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="string", length=350, nullable=true)
     */
    private $synopsis;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Seasons
     *
     * @ORM\ManyToOne(targetEntity="Season")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="season_id", referencedColumnName="id")
     * })
     */
    private $season;



    /**
     * Set title
     *
     * @param string $title
     * @return Episode
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
     * Set url
     *
     * @param string $url
     * @return Episode
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     * @return Episode
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string 
     */
    public function getSynopsis()
    {
        return $this->synopsis;
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
     * Set season
     *
     * @param Season $season
     * @return Episode
     */
    public function setSeason(Season $season = null)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return Seasons
     */
    public function getSeason()
    {
        return $this->season;
    }
}
