<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpConfigList
 *
 * @ORM\Table(name="dp_config_list", indexes={@ORM\Index(name="config_id", columns={"config_id"})})
 * @ORM\Entity
 */
class DpConfigList
{
    /**
     * @var int
     *
     * @ORM\Column(name="config_list_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configListId;

    /**
     * @var int
     *
     * @ORM\Column(name="config_id", type="integer", nullable=false)
     */
    private $configId;

    /**
     * @var string
     *
     * @ORM\Column(name="config_list_name", type="string", length=30, nullable=false)
     */
    private $configListName;

    public function getConfigListId(): ?int
    {
        return $this->configListId;
    }

    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    public function setConfigId(int $configId): self
    {
        $this->configId = $configId;

        return $this;
    }

    public function getConfigListName(): ?string
    {
        return $this->configListName;
    }

    public function setConfigListName(string $configListName): self
    {
        $this->configListName = $configListName;

        return $this;
    }


}
