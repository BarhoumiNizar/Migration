<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpBillingcode
 *
 * @ORM\Table(name="dp_billingcode")
 * @ORM\Entity
 */
class DpBillingcode
{
    /**
     * @var int
     *
     * @ORM\Column(name="billingcode_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $billingcodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="billingcode_name", type="string", length=25, nullable=false)
     */
    private $billingcodeName;

    /**
     * @var float
     *
     * @ORM\Column(name="billingcode_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $billingcodeValue;

    /**
     * @var string
     *
     * @ORM\Column(name="billingcode_desc", type="string", length=255, nullable=false)
     */
    private $billingcodeDesc;

    /**
     * @var int
     *
     * @ORM\Column(name="billingcode_status", type="integer", nullable=false)
     */
    private $billingcodeStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="bigint", nullable=false)
     */
    private $companyId;

    public function getBillingcodeId(): ?string
    {
        return $this->billingcodeId;
    }

    public function getBillingcodeName(): ?string
    {
        return $this->billingcodeName;
    }

    public function setBillingcodeName(string $billingcodeName): self
    {
        $this->billingcodeName = $billingcodeName;

        return $this;
    }

    public function getBillingcodeValue(): ?float
    {
        return $this->billingcodeValue;
    }

    public function setBillingcodeValue(float $billingcodeValue): self
    {
        $this->billingcodeValue = $billingcodeValue;

        return $this;
    }

    public function getBillingcodeDesc(): ?string
    {
        return $this->billingcodeDesc;
    }

    public function setBillingcodeDesc(string $billingcodeDesc): self
    {
        $this->billingcodeDesc = $billingcodeDesc;

        return $this;
    }

    public function getBillingcodeStatus(): ?int
    {
        return $this->billingcodeStatus;
    }

    public function setBillingcodeStatus(int $billingcodeStatus): self
    {
        $this->billingcodeStatus = $billingcodeStatus;

        return $this;
    }

    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    public function setCompanyId(string $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }


}
