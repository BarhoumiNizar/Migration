<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclAroSeq
 *
 * @ORM\Table(name="dp_gacl_aro_seq")
 * @ORM\Entity
 */
class DpGaclAroSeq
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
