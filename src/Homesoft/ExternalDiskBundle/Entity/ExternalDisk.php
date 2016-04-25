<?php

namespace Homesoft\ExternalDiskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExternalDisk
 *
 * @ORM\Table(name="externals_disks")
 * @ORM\Entity(repositoryClass="Homesoft\ExternalDiskBundle\Repository\ExternalDiskRepository")
 */
class ExternalDisk
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="path", type="string", length=300)
     */
    private $path;

    /**
     * @var string
     * @ORM\Column(name="series_path", type="string", length=300)
     */
    private $seriesPath;

    /**
     * @var string
     * @ORM\Column(name="movies_path", type="string", length=300)
     */
    private $moviesPath;

    /**
     * ExternalDisk constructor.
     * @param string $name
     * @param string $path
     * @param string $seriesPath
     * @param string $moviesPath
     */
    public function __construct($name="", $path="", $seriesPath = "", $moviesPath = "")
    {
        
        $this->setName($name);
        $this->setPath($path);
        $this->setSeriesPath($seriesPath);
        $this->setMoviesPath($moviesPath);
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
     * Set name
     *
     * @param string $name
     * @return ExternalDisk
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getSeriesPath()
    {
        return $this->seriesPath;
    }

    /**
     * @param string $seriesPath
     */
    public function setSeriesPath($seriesPath)
    {
        if(!is_string($seriesPath)) {
            trigger_error("seriePath must be a string !");
            return;
        }
        $this->seriesPath = $seriesPath;

    }

    /**
     * @return string
     */
    public function getMoviesPath()
    {
        return $this->moviesPath;
    }

    /**
     * @param string $moviesPath
     */
    public function setMoviesPath($moviesPath)
    {
        if(!is_string($moviesPath)) {
            trigger_error("moviesPath must be a string !");
            return;
        }
        $this->moviesPath = $moviesPath;
    }
}
