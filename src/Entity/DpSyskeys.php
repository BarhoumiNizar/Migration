<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpSyskeys
 *
 * @ORM\Table(name="dp_syskeys", uniqueConstraints={@ORM\UniqueConstraint(name="syskey_name", columns={"syskey_name"})})
 * @ORM\Entity
 */
class DpSyskeys
{
    /**
     * @var int
     *
     * @ORM\Column(name="syskey_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $syskeyId;

    /**
     * @var string
     *
     * @ORM\Column(name="syskey_name", type="string", length=48, nullable=false)
     */
    private $syskeyName;

    /**
     * @var string
     *
     * @ORM\Column(name="syskey_label", type="string", length=255, nullable=false)
     */
    private $syskeyLabel;

    /**
     * @var int
     *
     * @ORM\Column(name="syskey_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $syskeyType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="syskey_sep1", type="string", length=2, nullable=true, options={"default"="
","fixed"=true})
     */
    private $syskeySep1 = '
';

    /**
     * @var string
     *
     * @ORM\Column(name="syskey_sep2", type="string", length=2, nullable=false, options={"default"="|","fixed"=true})
     */
    private $syskeySep2 = '|';

    public function getSyskeyId(): ?int
    {
        return $this->syskeyId;
    }

    public function getSyskeyName(): ?string
    {
        return $this->syskeyName;
    }

    public function setSyskeyName(string $syskeyName): self
    {
        $this->syskeyName = $syskeyName;

        return $this;
    }

    public function getSyskeyLabel(): ?string
    {
        return $this->syskeyLabel;
    }

    public function setSyskeyLabel(string $syskeyLabel): self
    {
        $this->syskeyLabel = $syskeyLabel;

        return $this;
    }

    public function getSyskeyType(): ?int
    {
        return $this->syskeyType;
    }

    public function setSyskeyType(int $syskeyType): self
    {
        $this->syskeyType = $syskeyType;

        return $this;
    }

    public function getSyskeySep1(): ?string
    {
        return $this->syskeySep1;
    }

    public function setSyskeySep1(?string $syskeySep1): self
    {
        $this->syskeySep1 = $syskeySep1;

        return $this;
    }

    public function getSyskeySep2(): ?string
    {
        return $this->syskeySep2;
    }

    public function setSyskeySep2(string $syskeySep2): self
    {
        $this->syskeySep2 = $syskeySep2;

        return $this;
    }


}
