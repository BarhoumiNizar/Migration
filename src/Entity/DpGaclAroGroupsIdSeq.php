<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclAroGroupsIdSeq
 *
 * @ORM\Table(name="dp_gacl_aro_groups_id_seq")
 * @ORM\Entity
 */
class DpGaclAroGroupsIdSeq
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }


}
