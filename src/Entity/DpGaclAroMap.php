<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclAroMap
 *
 * @ORM\Table(name="dp_gacl_aro_map")
 * @ORM\Entity
 */
class DpGaclAroMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="acl_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $aclId;

    /**
     * @var string
     *
     * @ORM\Column(name="section_value", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sectionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $value;

    public function getAclId(): ?int
    {
        return $this->aclId;
    }

    public function getSectionValue(): ?string
    {
        return $this->sectionValue;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }


}
