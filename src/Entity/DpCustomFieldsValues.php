<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpCustomFieldsValues
 *
 * @ORM\Table(name="dp_custom_fields_values", indexes={@ORM\Index(name="idx_cfv_id", columns={"value_id"})})
 * @ORM\Entity
 */
class DpCustomFieldsValues
{
    /**
     * @var int
     *
     * @ORM\Column(name="value_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $valueId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_module", type="string", length=30, nullable=true)
     */
    private $valueModule;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_object_id", type="integer", nullable=true)
     */
    private $valueObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_field_id", type="integer", nullable=true)
     */
    private $valueFieldId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_charvalue", type="string", length=250, nullable=true)
     */
    private $valueCharvalue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_intvalue", type="integer", nullable=true)
     */
    private $valueIntvalue;

    public function getValueId(): ?int
    {
        return $this->valueId;
    }

    public function getValueModule(): ?string
    {
        return $this->valueModule;
    }

    public function setValueModule(?string $valueModule): self
    {
        $this->valueModule = $valueModule;

        return $this;
    }

    public function getValueObjectId(): ?int
    {
        return $this->valueObjectId;
    }

    public function setValueObjectId(?int $valueObjectId): self
    {
        $this->valueObjectId = $valueObjectId;

        return $this;
    }

    public function getValueFieldId(): ?int
    {
        return $this->valueFieldId;
    }

    public function setValueFieldId(?int $valueFieldId): self
    {
        $this->valueFieldId = $valueFieldId;

        return $this;
    }

    public function getValueCharvalue(): ?string
    {
        return $this->valueCharvalue;
    }

    public function setValueCharvalue(?string $valueCharvalue): self
    {
        $this->valueCharvalue = $valueCharvalue;

        return $this;
    }

    public function getValueIntvalue(): ?int
    {
        return $this->valueIntvalue;
    }

    public function setValueIntvalue(?int $valueIntvalue): self
    {
        $this->valueIntvalue = $valueIntvalue;

        return $this;
    }


}
