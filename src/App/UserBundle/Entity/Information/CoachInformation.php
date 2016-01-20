<?php

namespace App\UserBundle\Entity\Information;

use App\Util\Doctrine\Entity\AbstractEntity;
use App\Util\Doctrine\Entity\EntityInterface;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Province.
 *
 * @ORM\Entity
 * @ORM\Table(name="Coach_user")
 *
 * @JMS\ExclusionPolicy("all")
 */
class CoachInformation extends AbstractEntity implements EntityInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="pro_card_expiration_date", type="date")
     */
    protected $proCardExpirationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="insurance_company_name", type="string",length=255)
     */
    protected $insuranceCompanyName;

    /**
     * @var string
     *
     * @ORM\Column(name="insurance_policy_number", type="string", length=255)
     */
    protected $insurancePolicyNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="insurance_policy_expiration_date", type="date")
     */
    protected $insurancePolicyExpirationDate;

    /**
     * To string.
     *
     * @return string
     */
    public function __toString()
    {
        return '';
    }

    /**
     * Set proCardExpirationDate.
     *
     * @param \DateTime $proCardExpirationDate
     *
     * @return CoachInformation
     */
    public function setProCardExpirationDate($proCardExpirationDate)
    {
        $this->proCardExpirationDate = $proCardExpirationDate;

        return $this;
    }

    /**
     * Get proCardExpirationDate.
     *
     * @return \DateTime
     */
    public function getProCardExpirationDate()
    {
        return $this->proCardExpirationDate;
    }

    /**
     * Set insuranceCompanyName.
     *
     * @param string $insuranceCompanyName
     *
     * @return CoachInformation
     */
    public function setInsuranceCompanyName($insuranceCompanyName)
    {
        $this->insuranceCompanyName = $insuranceCompanyName;

        return $this;
    }

    /**
     * Get insuranceCompanyName.
     *
     * @return string
     */
    public function getInsuranceCompanyName()
    {
        return $this->insuranceCompanyName;
    }

    /**
     * Set insurancePolicyNumber.
     *
     * @param string $insurancePolicyNumber
     *
     * @return CoachInformation
     */
    public function setInsurancePolicyNumber($insurancePolicyNumber)
    {
        $this->insurancePolicyNumber = $insurancePolicyNumber;

        return $this;
    }

    /**
     * Get insurancePolicyNumber.
     *
     * @return string
     */
    public function getInsurancePolicyNumber()
    {
        return $this->insurancePolicyNumber;
    }

    /**
     * Set insurancePolicyExpirationDate.
     *
     * @param \DateTime $insurancePolicyExpirationDate
     *
     * @return CoachInformation
     */
    public function setInsurancePolicyExpirationDate($insurancePolicyExpirationDate)
    {
        $this->insurancePolicyExpirationDate = $insurancePolicyExpirationDate;

        return $this;
    }

    /**
     * Get insurancePolicyExpirationDate.
     *
     * @return \DateTime
     */
    public function getInsurancePolicyExpirationDate()
    {
        return $this->insurancePolicyExpirationDate;
    }
}