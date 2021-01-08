<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpConfig
 *
 * @ORM\Table(name="dp_config", uniqueConstraints={@ORM\UniqueConstraint(name="config_name", columns={"config_name"})})
 * @ORM\Entity
 */
class DpConfig
{
    /**
     * @var int
     *
     * @ORM\Column(name="config_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configId;

    /**
     * @var string
     *
     * @ORM\Column(name="config_name", type="string", length=127, nullable=false)
     */
    private $configName;

    /**
     * @var string
     *
     * @ORM\Column(name="config_value", type="string", length=255, nullable=false)
     */
    private $configValue;

    /**
     * @var string
     *
     * @ORM\Column(name="config_group", type="string", length=255, nullable=false)
     */
    private $configGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="config_type", type="string", length=255, nullable=false)
     */
    private $configType;

    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    public function getConfigName(): ?string
    {
        return $this->configName;
    }

    public function setConfigName(string $configName): self
    {
        $this->configName = $configName;

        return $this;
    }

    public function getConfigValue(): ?string
    {
        return $this->configValue;
    }

    public function setConfigValue(string $configValue): self
    {
        $this->configValue = $configValue;

        return $this;
    }

    public function getConfigGroup(): ?string
    {
        return $this->configGroup;
    }

    public function setConfigGroup(string $configGroup): self
    {
        $this->configGroup = $configGroup;

        return $this;
    }

    public function getConfigType(): ?string
    {
        return $this->configType;
    }

    public function setConfigType(string $configType): self
    {
        $this->configType = $configType;

        return $this;
    }


}
