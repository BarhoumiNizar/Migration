<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclGroupsAxoMap
 *
 * @ORM\Table(name="dp_gacl_groups_axo_map")
 * @ORM\Entity
 */
class DpGaclGroupsAxoMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupId;

    /**
     * @var int
     *
     * @ORM\Column(name="axo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $axoId;

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function getAxoId(): ?int
    {
        return $this->axoId;
    }


}
