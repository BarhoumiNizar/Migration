<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpPermissions
 *
 * @ORM\Table(name="dp_permissions", uniqueConstraints={@ORM\UniqueConstraint(name="idx_pgrant_on", columns={"permission_grant_on", "permission_item", "permission_user"})}, indexes={@ORM\Index(name="idx_puser", columns={"permission_user"}), @ORM\Index(name="idx_pvalue", columns={"permission_value"})})
 * @ORM\Entity
 */
class DpPermissions
{
    /**
     * @var int
     *
     * @ORM\Column(name="permission_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionId;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_user", type="integer", nullable=false)
     */
    private $permissionUser;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_grant_on", type="string", length=12, nullable=false)
     */
    private $permissionGrantOn;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_item", type="integer", nullable=false)
     */
    private $permissionItem;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_value", type="integer", nullable=false)
     */
    private $permissionValue;

    public function getPermissionId(): ?int
    {
        return $this->permissionId;
    }

    public function getPermissionUser(): ?int
    {
        return $this->permissionUser;
    }

    public function setPermissionUser(int $permissionUser): self
    {
        $this->permissionUser = $permissionUser;

        return $this;
    }

    public function getPermissionGrantOn(): ?string
    {
        return $this->permissionGrantOn;
    }

    public function setPermissionGrantOn(string $permissionGrantOn): self
    {
        $this->permissionGrantOn = $permissionGrantOn;

        return $this;
    }

    public function getPermissionItem(): ?int
    {
        return $this->permissionItem;
    }

    public function setPermissionItem(int $permissionItem): self
    {
        $this->permissionItem = $permissionItem;

        return $this;
    }

    public function getPermissionValue(): ?int
    {
        return $this->permissionValue;
    }

    public function setPermissionValue(int $permissionValue): self
    {
        $this->permissionValue = $permissionValue;

        return $this;
    }


}
