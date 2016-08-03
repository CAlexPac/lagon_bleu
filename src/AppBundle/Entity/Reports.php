<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reports
 *
 * @ORM\Table(name="reports")
 * @ORM\Entity
 */
class Reports
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="time", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="time", nullable=true)
     */
    private $endTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="cloud_cover", type="integer", nullable=true)
     */
    private $cloudCover;

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=32, nullable=true)
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="max_depth", type="string", length=32, nullable=true)
     */
    private $maxDepth;

    /**
     * @var string
     *
     * @ORM\Column(name="water_temperature", type="string", length=32, nullable=true)
     */
    private $waterTemperature;

    /**
     * @var string
     *
     * @ORM\Column(name="current", type="string", length=32, nullable=true)
     */
    private $current;

    /**
     * @var string
     *
     * @ORM\Column(name="wind", type="string", length=32, nullable=true)
     */
    private $wind;

    /**
     * @var string
     *
     * @ORM\Column(name="tide", type="string", length=32, nullable=true)
     */
    private $tide;

    /**
     * @var string
     *
     * @ORM\Column(name="sea_conditions", type="string", length=32, nullable=true)
     */
    private $seaConditions;

    /**
     * @var integer
     *
     * @ORM\Column(name="site_id", type="integer", nullable=true)
     */
    private $siteId;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reports
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Reports
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Reports
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set cloudCover
     *
     * @param integer $cloudCover
     *
     * @return Reports
     */
    public function setCloudCover($cloudCover)
    {
        $this->cloudCover = $cloudCover;

        return $this;
    }

    /**
     * Get cloudCover
     *
     * @return integer
     */
    public function getCloudCover()
    {
        return $this->cloudCover;
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     *
     * @return Reports
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set maxDepth
     *
     * @param string $maxDepth
     *
     * @return Reports
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    /**
     * Get maxDepth
     *
     * @return string
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * Set waterTemperature
     *
     * @param string $waterTemperature
     *
     * @return Reports
     */
    public function setWaterTemperature($waterTemperature)
    {
        $this->waterTemperature = $waterTemperature;

        return $this;
    }

    /**
     * Get waterTemperature
     *
     * @return string
     */
    public function getWaterTemperature()
    {
        return $this->waterTemperature;
    }

    /**
     * Set current
     *
     * @param string $current
     *
     * @return Reports
     */
    public function setCurrent($current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * Get current
     *
     * @return string
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Set wind
     *
     * @param string $wind
     *
     * @return Reports
     */
    public function setWind($wind)
    {
        $this->wind = $wind;

        return $this;
    }

    /**
     * Get wind
     *
     * @return string
     */
    public function getWind()
    {
        return $this->wind;
    }

    /**
     * Set tide
     *
     * @param string $tide
     *
     * @return Reports
     */
    public function setTide($tide)
    {
        $this->tide = $tide;

        return $this;
    }

    /**
     * Get tide
     *
     * @return string
     */
    public function getTide()
    {
        return $this->tide;
    }

    /**
     * Set seaConditions
     *
     * @param string $seaConditions
     *
     * @return Reports
     */
    public function setSeaConditions($seaConditions)
    {
        $this->seaConditions = $seaConditions;

        return $this;
    }

    /**
     * Get seaConditions
     *
     * @return string
     */
    public function getSeaConditions()
    {
        return $this->seaConditions;
    }

    /**
     * Set siteId
     *
     * @param integer $siteId
     *
     * @return Reports
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get siteId
     *
     * @return integer
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Reports
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
