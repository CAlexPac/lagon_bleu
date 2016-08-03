<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FishMonitoringReports
 *
 * @ORM\Table(name="fish_monitoring_reports")
 * @ORM\Entity
 */
class FishMonitoringReports
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
     * @ORM\Column(name="fish_id", type="integer", nullable=false)
     */
    private $fishId;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

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
     * @return FishMonitoringReports
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
     * Set count
     *
     * @param integer $count
     *
     * @return FishMonitoringReports
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return FishMonitoringReports
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
