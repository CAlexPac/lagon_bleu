<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FishNames
 *
 * @ORM\Table(name="fish_names")
 * @ORM\Entity
 */
class FishNames
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
     * @var integer
     *
     * @ORM\Column(name="fish_id", type="integer", nullable=true)
     */
    private $fishId;

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
     * Set fishId
     *
     * @param integer $fishId
     *
     * @return FishNames
     */
    public function setFishId($fishId)
    {
        $this->fishId = $fishId;

        return $this;
    }

    /**
     * Get fishId
     *
     * @return integer
     */
    public function getFishId()
    {
        return $this->fishId;
    }

    /**
     * Set scientificName
     *
     * @param string $scientificName
     *
     * @return FishNames
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
     * @return FishNames
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
     * @return FishNames
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
     * @return FishNames
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
     * @return FishNames
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
