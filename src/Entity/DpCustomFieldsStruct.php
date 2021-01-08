<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpCustomFieldsStruct
 *
 * @ORM\Table(name="dp_custom_fields_struct")
 * @ORM\Entity
 */
class DpCustomFieldsStruct
{
    /**
     * @var int
     *
     * @ORM\Column(name="field_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fieldId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_module", type="string", length=30, nullable=true)
     */
    private $fieldModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_page", type="string", length=30, nullable=true)
     */
    private $fieldPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_htmltype", type="string", length=20, nullable=true)
     */
    private $fieldHtmltype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_datatype", type="string", length=20, nullable=true)
     */
    private $fieldDatatype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="field_order", type="integer", nullable=true)
     */
    private $fieldOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_name", type="string", length=100, nullable=true)
     */
    private $fieldName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_extratags", type="string", length=250, nullable=true)
     */
    private $fieldExtratags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_description", type="string", length=250, nullable=true)
     */
    private $fieldDescription;

    public function getFieldId(): ?int
    {
        return $this->fieldId;
    }

    public function getFieldModule(): ?string
    {
        return $this->fieldModule;
    }

    public function setFieldModule(?string $fieldModule): self
    {
        $this->fieldModule = $fieldModule;

        return $this;
    }

    public function getFieldPage(): ?string
    {
        return $this->fieldPage;
    }

    public function setFieldPage(?string $fieldPage): self
    {
        $this->fieldPage = $fieldPage;

        return $this;
    }

    public function getFieldHtmltype(): ?string
    {
        return $this->fieldHtmltype;
    }

    public function setFieldHtmltype(?string $fieldHtmltype): self
    {
        $this->fieldHtmltype = $fieldHtmltype;

        return $this;
    }

    public function getFieldDatatype(): ?string
    {
        return $this->fieldDatatype;
    }

    public function setFieldDatatype(?string $fieldDatatype): self
    {
        $this->fieldDatatype = $fieldDatatype;

        return $this;
    }

    public function getFieldOrder(): ?int
    {
        return $this->fieldOrder;
    }

    public function setFieldOrder(?int $fieldOrder): self
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getFieldExtratags(): ?string
    {
        return $this->fieldExtratags;
    }

    public function setFieldExtratags(?string $fieldExtratags): self
    {
        $this->fieldExtratags = $fieldExtratags;

        return $this;
    }

    public function getFieldDescription(): ?string
    {
        return $this->fieldDescription;
    }

    public function setFieldDescription(?string $fieldDescription): self
    {
        $this->fieldDescription = $fieldDescription;

        return $this;
    }


}
