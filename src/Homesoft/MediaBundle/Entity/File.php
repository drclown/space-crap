<?php

namespace Homesoft\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * File
 *
 * @ORM\Table(name="files")
 * @ORM\Entity(repositoryClass="Homesoft\MediaBundle\Repository\FileRepository")
 */
class File
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
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=30, nullable=true)
     */
    private $extension;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @ORM\OneToOne(targetEntity="Type")
     *
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Homesoft\ExternalDiskBundle\Entity\ExternalDisk")
     * @ORM\JoinColumn(nullable=false)
     */
    private $externalDisk;


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
     * @return File
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
     * Set path
     *
     * @param string $path
     * @return File
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return File
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return File
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set externalDisk
     *
     * @param \Homesoft\ExternalDiskBundle\Entity\ExternalDisk $externalDisk
     * @return File
     */
    public function setExternalDisk(\Homesoft\ExternalDiskBundle\Entity\ExternalDisk $externalDisk)
    {
        $this->externalDisk = $externalDisk;

        return $this;
    }

    /**
     * Get externalDisk
     *
     * @return \Homesoft\ExternalDiskBundle\Entity\ExternalDisk 
     */
    public function getExternalDisk()
    {
        return $this->externalDisk;
    }

    /**
     * Set type
     *
     * @param \Homesoft\MediaBundle\Entity\Type $type
     * @return File
     */
    public function setType(\Homesoft\MediaBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Homesoft\MediaBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }
}
