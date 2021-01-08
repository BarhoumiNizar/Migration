<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclAxoGroupsMap
 *
 * @ORM\Table(name="dp_gacl_axo_groups_map")
 * @ORM\Entity
 */
class DpGaclAxoGroupsMap
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
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupId;

    public function getAclId(): ?int
    {
        return $this->aclId;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }


}
