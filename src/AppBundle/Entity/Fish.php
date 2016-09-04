<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fish
 *
 * @ORM\Table(name="fish")
 * @ORM\Entity
 */
class Fish
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="scientific_name", type="string", length=255, nullable=true)
     */
    private $scientificName;

    /**
     * @var string
     *
     * @ORM\Column(name="english_name", type="string", length=255, nullable=true)
     */
    private $englishName;

    /**
     * @var string
     *
     * @ORM\Column(name="french_name", type="string", length=255, nullable=true)
     */
    private $frenchName;

    /**
     * @var string
     *
     * @ORM\Column(name="kreol_name", type="string", length=255, nullable=true)
     */
    private $kreolName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';


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
     * Set scientificName
     *
     * @param string $scientificName
     *
     * @return Fish
     */
    public function setScientificName($scientificName)
    {
        $this->scientificName = $scientificName;

        return $this;
    }

    /**
     * Get scientificName
     *
     * @return string
     */
    public function getScientificName()
    {
        return $this->scientificName;
    }

    /**
     * Set englishName
     *
     * @param string $englishName
     *
     * @return Fish
     */
    public function setEnglishName($englishName)
    {
        $this->englishName = $englishName;

        return $this;
    }

    /**
     * Get englishName
     *
     * @return string
     */
    public function getEnglishName()
    {
        return $this->englishName;
    }

    /**
     * Set frenchName
     *
     * @param string $frenchName
     *
     * @return Fish
     */
    public function setFrenchName($frenchName)
    {
        $this->frenchName = $frenchName;

        return $this;
    }

    /**
     * Get frenchName
     *
     * @return string
     */
    public function getFrenchName()
    {
        return $this->frenchName;
    }

    /**
     * Set kreolName
     *
     * @param string $kreolName
     *
     * @return Fish
     */
    public function setKreolName($kreolName)
    {
        $this->kreolName = $kreolName;

        return $this;
    }

    /**
     * Get kreolName
     *
     * @return string
     */
    public function getKreolName()
    {
        return $this->kreolName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Fish
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
