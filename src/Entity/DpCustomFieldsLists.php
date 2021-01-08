<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpCustomFieldsLists
 *
 * @ORM\Table(name="dp_custom_fields_lists")
 * @ORM\Entity
 */
class DpCustomFieldsLists
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
     * @var int|null
     *
     * @ORM\Column(name="list_option_id", type="integer", nullable=true)
     */
    private $listOptionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="list_value", type="string", length=250, nullable=true)
     */
    private $listValue;

    public function getFieldId(): ?int
    {
        return $this->fieldId;
    }

    public function getListOptionId(): ?int
    {
        return $this->listOptionId;
    }

    public function setListOptionId(?int $listOptionId): self
    {
        $this->listOptionId = $listOptionId;

        return $this;
    }

    public function getListValue(): ?string
    {
        return $this->listValue;
    }

    public function setListValue(?string $listValue): self
    {
        $this->listValue = $listValue;

        return $this;
    }


}
