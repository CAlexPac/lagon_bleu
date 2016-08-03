<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoralMonitoringReports
 *
 * @ORM\Table(name="coral_monitoring_reports")
 * @ORM\Entity
 */
class CoralMonitoringReports
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
     * @ORM\Column(name="coral_id", type="integer", nullable=false)
     */
    private $coralId;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=32, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="lenght", type="string", length=32, nullable=true)
     */
    private $lenght;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="text", length=65535, nullable=true)
     */
    private $remarks;

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
     * Set coralId
     *
     * @param integer $coralId
     *
     * @return CoralMonitoringReports
     */
    public function setCoralId($coralId)
    {
        $this->coralId = $coralId;

        return $this;
    }

    /**
     * Get coralId
     *
     * @return integer
     */
    public function getCoralId()
    {
        return $this->coralId;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return CoralMonitoringReports
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set lenght
     *
     * @param string $lenght
     *
     * @return CoralMonitoringReports
     */
    public function setLenght($lenght)
    {
        $this->lenght = $lenght;

        return $this;
    }

    /**
     * Get lenght
     *
     * @return string
     */
    public function getLenght()
    {
        return $this->lenght;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return CoralMonitoringReports
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CoralMonitoringReports
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
