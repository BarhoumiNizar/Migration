<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpSysvals
 *
 * @ORM\Table(name="dp_sysvals", uniqueConstraints={@ORM\UniqueConstraint(name="idx_sysval_title", columns={"sysval_title"})})
 * @ORM\Entity
 */
class DpSysvals
{
    /**
     * @var int
     *
     * @ORM\Column(name="sysval_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sysvalId;

    /**
     * @var int
     *
     * @ORM\Column(name="sysval_key_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sysvalKeyId;

    /**
     * @var string
     *
     * @ORM\Column(name="sysval_title", type="string", length=48, nullable=false)
     */
    private $sysvalTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="sysval_value", type="text", length=65535, nullable=false)
     */
    private $sysvalValue;

    public function getSysvalId(): ?int
    {
        return $this->sysvalId;
    }

    public function getSysvalKeyId(): ?int
    {
        return $this->sysvalKeyId;
    }

    public function setSysvalKeyId(int $sysvalKeyId): self
    {
        $this->sysvalKeyId = $sysvalKeyId;

        return $this;
    }

    public function getSysvalTitle(): ?string
    {
        return $this->sysvalTitle;
    }

    public function setSysvalTitle(string $sysvalTitle): self
    {
        $this->sysvalTitle = $sysvalTitle;

        return $this;
    }

    public function getSysvalValue(): ?string
    {
        return $this->sysvalValue;
    }

    public function setSysvalValue(string $sysvalValue): self
    {
        $this->sysvalValue = $sysvalValue;

        return $this;
    }


}
