<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclAcl
 *
 * @ORM\Table(name="dp_gacl_acl", indexes={@ORM\Index(name="gacl_enabled_acl", columns={"enabled"}), @ORM\Index(name="gacl_section_value_acl", columns={"section_value"}), @ORM\Index(name="gacl_updated_date_acl", columns={"updated_date"})})
 * @ORM\Entity
 */
class DpGaclAcl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="section_value", type="string", length=80, nullable=false, options={"default"="system"})
     */
    private $sectionValue = 'system';

    /**
     * @var int
     *
     * @ORM\Column(name="allow", type="integer", nullable=false)
     */
    private $allow;

    /**
     * @var int
     *
     * @ORM\Column(name="enabled", type="integer", nullable=false)
     */
    private $enabled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="return_value", type="text", length=0, nullable=true)
     */
    private $returnValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=true)
     */
    private $note;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_date", type="integer", nullable=false)
     */
    private $updatedDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSectionValue(): ?string
    {
        return $this->sectionValue;
    }

    public function setSectionValue(string $sectionValue): self
    {
        $this->sectionValue = $sectionValue;

        return $this;
    }

    public function getAllow(): ?int
    {
        return $this->allow;
    }

    public function setAllow(int $allow): self
    {
        $this->allow = $allow;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getReturnValue(): ?string
    {
        return $this->returnValue;
    }

    public function setReturnValue(?string $returnValue): self
    {
        $this->returnValue = $returnValue;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getUpdatedDate(): ?int
    {
        return $this->updatedDate;
    }

    public function setUpdatedDate(int $updatedDate): self
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }


}
