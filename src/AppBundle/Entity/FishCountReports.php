<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Fish;
use AppBundle\Entity\FishReports;

/**
 * FishCountReports
 *
 * @ORM\Table(name="fish_count_reports")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class FishCountReports
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
     * @ORM\ManyToOne(targetEntity="FishReports", inversedBy="fish_count_reports")
     * @ORM\JoinColumn(name="report_id", referencedColumnName="id")
     */
    private $report;

    /**
     * @ORM\ManyToOne(targetEntity="Fish")
     * @ORM\JoinColumn(name="fish_id", referencedColumnName="id")
     */
    private $fish;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;


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
     * Set count
     *
     * @param integer $count
     *
     * @return FishCountReports
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
     * @return FishCountReports
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

    /**
     * Set report
     *
     * @param \AppBundle\Entity\FishReports $report
     *
     * @return FishCountReports
     */
    public function setReport(FishReports $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return \AppBundle\Entity\FishReports
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set fish
     *
     * @param \AppBundle\Entity\Fish $fish
     *
     * @return FishCountReports
     */
    public function setFish(Fish $fish = null)
    {
        $this->fish = $fish;

        return $this;
    }

    /**
     * Get fish
     *
     * @return \AppBundle\Entity\Fish
     */
    public function getFish()
    {
        return $this->fish;
    }
}
