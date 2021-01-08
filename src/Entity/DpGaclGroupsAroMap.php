<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclGroupsAroMap
 *
 * @ORM\Table(name="dp_gacl_groups_aro_map")
 * @ORM\Entity
 */
class DpGaclGroupsAroMap
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
     * @ORM\Column(name="aro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $aroId;

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function getAroId(): ?int
    {
        return $this->aroId;
    }


}
