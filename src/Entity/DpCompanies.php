<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpCompanies
 *
 * @ORM\Table(name="dp_companies", indexes={@ORM\Index(name="idx_cpy1", columns={"company_owner"})})
 * @ORM\Entity
 */
class DpCompanies
{
    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $companyId;

    /**
     * @var int
     *
     * @ORM\Column(name="company_module", type="integer", nullable=false)
     */
    private $companyModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=100, nullable=true)
     */
    private $companyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_phone1", type="string", length=30, nullable=true)
     */
    private $companyPhone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_phone2", type="string", length=30, nullable=true)
     */
    private $companyPhone2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_fax", type="string", length=30, nullable=true)
     */
    private $companyFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_address1", type="string", length=50, nullable=true)
     */
    private $companyAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_address2", type="string", length=50, nullable=true)
     */
    private $companyAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_city", type="string", length=30, nullable=true)
     */
    private $companyCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_state", type="string", length=30, nullable=true)
     */
    private $companyState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_zip", type="string", length=11, nullable=true)
     */
    private $companyZip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_primary_url", type="string", length=255, nullable=true)
     */
    private $companyPrimaryUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="company_owner", type="integer", nullable=false)
     */
    private $companyOwner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_description", type="text", length=65535, nullable=true)
     */
    private $companyDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="company_type", type="integer", nullable=false)
     */
    private $companyType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_email", type="string", length=255, nullable=true)
     */
    private $companyEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_custom", type="text", length=0, nullable=true)
     */
    private $companyCustom;

    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    public function getCompanyModule(): ?int
    {
        return $this->companyModule;
    }

    public function setCompanyModule(int $companyModule): self
    {
        $this->companyModule = $companyModule;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyPhone1(): ?string
    {
        return $this->companyPhone1;
    }

    public function setCompanyPhone1(?string $companyPhone1): self
    {
        $this->companyPhone1 = $companyPhone1;

        return $this;
    }

    public function getCompanyPhone2(): ?string
    {
        return $this->companyPhone2;
    }

    public function setCompanyPhone2(?string $companyPhone2): self
    {
        $this->companyPhone2 = $companyPhone2;

        return $this;
    }

    public function getCompanyFax(): ?string
    {
        return $this->companyFax;
    }

    public function setCompanyFax(?string $companyFax): self
    {
        $this->companyFax = $companyFax;

        return $this;
    }

    public function getCompanyAddress1(): ?string
    {
        return $this->companyAddress1;
    }

    public function setCompanyAddress1(?string $companyAddress1): self
    {
        $this->companyAddress1 = $companyAddress1;

        return $this;
    }

    public function getCompanyAddress2(): ?string
    {
        return $this->companyAddress2;
    }

    public function setCompanyAddress2(?string $companyAddress2): self
    {
        $this->companyAddress2 = $companyAddress2;

        return $this;
    }

    public function getCompanyCity(): ?string
    {
        return $this->companyCity;
    }

    public function setCompanyCity(?string $companyCity): self
    {
        $this->companyCity = $companyCity;

        return $this;
    }

    public function getCompanyState(): ?string
    {
        return $this->companyState;
    }

    public function setCompanyState(?string $companyState): self
    {
        $this->companyState = $companyState;

        return $this;
    }

    public function getCompanyZip(): ?string
    {
        return $this->companyZip;
    }

    public function setCompanyZip(?string $companyZip): self
    {
        $this->companyZip = $companyZip;

        return $this;
    }

    public function getCompanyPrimaryUrl(): ?string
    {
        return $this->companyPrimaryUrl;
    }

    public function setCompanyPrimaryUrl(?string $companyPrimaryUrl): self
    {
        $this->companyPrimaryUrl = $companyPrimaryUrl;

        return $this;
    }

    public function getCompanyOwner(): ?int
    {
        return $this->companyOwner;
    }

    public function setCompanyOwner(int $companyOwner): self
    {
        $this->companyOwner = $companyOwner;

        return $this;
    }

    public function getCompanyDescription(): ?string
    {
        return $this->companyDescription;
    }

    public function setCompanyDescription(?string $companyDescription): self
    {
        $this->companyDescription = $companyDescription;

        return $this;
    }

    public function getCompanyType(): ?int
    {
        return $this->companyType;
    }

    public function setCompanyType(int $companyType): self
    {
        $this->companyType = $companyType;

        return $this;
    }

    public function getCompanyEmail(): ?string
    {
        return $this->companyEmail;
    }

    public function setCompanyEmail(?string $companyEmail): self
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    public function getCompanyCustom(): ?string
    {
        return $this->companyCustom;
    }

    public function setCompanyCustom(?string $companyCustom): self
    {
        $this->companyCustom = $companyCustom;

        return $this;
    }


}
