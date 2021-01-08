<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpModules
 *
 * @ORM\Table(name="dp_modules")
 * @ORM\Entity
 */
class DpModules
{
    /**
     * @var int
     *
     * @ORM\Column(name="mod_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $modId;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_directory", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $modDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_name", type="string", length=64, nullable=false)
     */
    private $modName;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_version", type="string", length=10, nullable=false)
     */
    private $modVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_setup_class", type="string", length=64, nullable=false)
     */
    private $modSetupClass;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_type", type="string", length=64, nullable=false)
     */
    private $modType;

    /**
     * @var int
     *
     * @ORM\Column(name="mod_active", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $modActive;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_ui_name", type="string", length=20, nullable=false)
     */
    private $modUiName;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_ui_icon", type="string", length=64, nullable=false)
     */
    private $modUiIcon;

    /**
     * @var bool
     *
     * @ORM\Column(name="mod_ui_order", type="boolean", nullable=false)
     */
    private $modUiOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="mod_ui_active", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $modUiActive;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_description", type="string", length=255, nullable=false)
     */
    private $modDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permissions_item_table", type="string", length=100, nullable=true, options={"fixed"=true})
     */
    private $permissionsItemTable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permissions_item_field", type="string", length=100, nullable=true, options={"fixed"=true})
     */
    private $permissionsItemField;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permissions_item_label", type="string", length=100, nullable=true, options={"fixed"=true})
     */
    private $permissionsItemLabel;

    public function getModId(): ?int
    {
        return $this->modId;
    }

    public function getModDirectory(): ?string
    {
        return $this->modDirectory;
    }

    public function getModName(): ?string
    {
        return $this->modName;
    }

    public function setModName(string $modName): self
    {
        $this->modName = $modName;

        return $this;
    }

    public function getModVersion(): ?string
    {
        return $this->modVersion;
    }

    public function setModVersion(string $modVersion): self
    {
        $this->modVersion = $modVersion;

        return $this;
    }

    public function getModSetupClass(): ?string
    {
        return $this->modSetupClass;
    }

    public function setModSetupClass(string $modSetupClass): self
    {
        $this->modSetupClass = $modSetupClass;

        return $this;
    }

    public function getModType(): ?string
    {
        return $this->modType;
    }

    public function setModType(string $modType): self
    {
        $this->modType = $modType;

        return $this;
    }

    public function getModActive(): ?int
    {
        return $this->modActive;
    }

    public function setModActive(int $modActive): self
    {
        $this->modActive = $modActive;

        return $this;
    }

    public function getModUiName(): ?string
    {
        return $this->modUiName;
    }

    public function setModUiName(string $modUiName): self
    {
        $this->modUiName = $modUiName;

        return $this;
    }

    public function getModUiIcon(): ?string
    {
        return $this->modUiIcon;
    }

    public function setModUiIcon(string $modUiIcon): self
    {
        $this->modUiIcon = $modUiIcon;

        return $this;
    }

    public function getModUiOrder(): ?bool
    {
        return $this->modUiOrder;
    }

    public function setModUiOrder(bool $modUiOrder): self
    {
        $this->modUiOrder = $modUiOrder;

        return $this;
    }

    public function getModUiActive(): ?int
    {
        return $this->modUiActive;
    }

    public function setModUiActive(int $modUiActive): self
    {
        $this->modUiActive = $modUiActive;

        return $this;
    }

    public function getModDescription(): ?string
    {
        return $this->modDescription;
    }

    public function setModDescription(string $modDescription): self
    {
        $this->modDescription = $modDescription;

        return $this;
    }

    public function getPermissionsItemTable(): ?string
    {
        return $this->permissionsItemTable;
    }

    public function setPermissionsItemTable(?string $permissionsItemTable): self
    {
        $this->permissionsItemTable = $permissionsItemTable;

        return $this;
    }

    public function getPermissionsItemField(): ?string
    {
        return $this->permissionsItemField;
    }

    public function setPermissionsItemField(?string $permissionsItemField): self
    {
        $this->permissionsItemField = $permissionsItemField;

        return $this;
    }

    public function getPermissionsItemLabel(): ?string
    {
        return $this->permissionsItemLabel;
    }

    public function setPermissionsItemLabel(?string $permissionsItemLabel): self
    {
        $this->permissionsItemLabel = $permissionsItemLabel;

        return $this;
    }


}
