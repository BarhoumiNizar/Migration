<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpDepartments
 *
 * @ORM\Table(name="dp_departments")
 * @ORM\Entity
 */
class DpDepartments
{
    /**
     * @var int
     *
     * @ORM\Column(name="dept_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $deptId;

    /**
     * @var int
     *
     * @ORM\Column(name="dept_parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deptParent;

    /**
     * @var int
     *
     * @ORM\Column(name="dept_company", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deptCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="dept_name", type="text", length=255, nullable=false)
     */
    private $deptName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_phone", type="string", length=30, nullable=true)
     */
    private $deptPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_fax", type="string", length=30, nullable=true)
     */
    private $deptFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_address1", type="string", length=30, nullable=true)
     */
    private $deptAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_address2", type="string", length=30, nullable=true)
     */
    private $deptAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_city", type="string", length=30, nullable=true)
     */
    private $deptCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_state", type="string", length=30, nullable=true)
     */
    private $deptState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_zip", type="string", length=11, nullable=true)
     */
    private $deptZip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_url", type="string", length=25, nullable=true)
     */
    private $deptUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dept_desc", type="text", length=65535, nullable=true)
     */
    private $deptDesc;

    /**
     * @var int
     *
     * @ORM\Column(name="dept_owner", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deptOwner;

    public function getDeptId(): ?int
    {
        return $this->deptId;
    }

    public function getDeptParent(): ?int
    {
        return $this->deptParent;
    }

    public function setDeptParent(int $deptParent): self
    {
        $this->deptParent = $deptParent;

        return $this;
    }

    public function getDeptCompany(): ?int
    {
        return $this->deptCompany;
    }

    public function setDeptCompany(int $deptCompany): self
    {
        $this->deptCompany = $deptCompany;

        return $this;
    }

    public function getDeptName(): ?string
    {
        return $this->deptName;
    }

    public function setDeptName(string $deptName): self
    {
        $this->deptName = $deptName;

        return $this;
    }

    public function getDeptPhone(): ?string
    {
        return $this->deptPhone;
    }

    public function setDeptPhone(?string $deptPhone): self
    {
        $this->deptPhone = $deptPhone;

        return $this;
    }

    public function getDeptFax(): ?string
    {
        return $this->deptFax;
    }

    public function setDeptFax(?string $deptFax): self
    {
        $this->deptFax = $deptFax;

        return $this;
    }

    public function getDeptAddress1(): ?string
    {
        return $this->deptAddress1;
    }

    public function setDeptAddress1(?string $deptAddress1): self
    {
        $this->deptAddress1 = $deptAddress1;

        return $this;
    }

    public function getDeptAddress2(): ?string
    {
        return $this->deptAddress2;
    }

    public function setDeptAddress2(?string $deptAddress2): self
    {
        $this->deptAddress2 = $deptAddress2;

        return $this;
    }

    public function getDeptCity(): ?string
    {
        return $this->deptCity;
    }

    public function setDeptCity(?string $deptCity): self
    {
        $this->deptCity = $deptCity;

        return $this;
    }

    public function getDeptState(): ?string
    {
        return $this->deptState;
    }

    public function setDeptState(?string $deptState): self
    {
        $this->deptState = $deptState;

        return $this;
    }

    public function getDeptZip(): ?string
    {
        return $this->deptZip;
    }

    public function setDeptZip(?string $deptZip): self
    {
        $this->deptZip = $deptZip;

        return $this;
    }

    public function getDeptUrl(): ?string
    {
        return $this->deptUrl;
    }

    public function setDeptUrl(?string $deptUrl): self
    {
        $this->deptUrl = $deptUrl;

        return $this;
    }

    public function getDeptDesc(): ?string
    {
        return $this->deptDesc;
    }

    public function setDeptDesc(?string $deptDesc): self
    {
        $this->deptDesc = $deptDesc;

        return $this;
    }

    public function getDeptOwner(): ?int
    {
        return $this->deptOwner;
    }

    public function setDeptOwner(int $deptOwner): self
    {
        $this->deptOwner = $deptOwner;

        return $this;
    }


}
