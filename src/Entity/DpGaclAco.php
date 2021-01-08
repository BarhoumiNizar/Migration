<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclAco
 *
 * @ORM\Table(name="dp_gacl_aco", uniqueConstraints={@ORM\UniqueConstraint(name="gacl_section_value_value_aco", columns={"section_value", "value"})}, indexes={@ORM\Index(name="gacl_hidden_aco", columns={"hidden"})})
 * @ORM\Entity
 */
class DpGaclAco
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
     * @ORM\Column(name="section_value", type="string", length=80, nullable=false)
     */
    private $sectionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=80, nullable=false)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="order_value", type="integer", nullable=false)
     */
    private $orderValue;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="hidden", type="integer", nullable=false)
     */
    private $hidden;

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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getOrderValue(): ?int
    {
        return $this->orderValue;
    }

    public function setOrderValue(int $orderValue): self
    {
        $this->orderValue = $orderValue;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHidden(): ?int
    {
        return $this->hidden;
    }

    public function setHidden(int $hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }


}
