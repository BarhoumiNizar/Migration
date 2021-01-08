<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpRoles
 *
 * @ORM\Table(name="dp_roles")
 * @ORM\Entity
 */
class DpRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="role_name", type="string", length=24, nullable=false)
     */
    private $roleName;

    /**
     * @var string
     *
     * @ORM\Column(name="role_description", type="string", length=255, nullable=false)
     */
    private $roleDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="role_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $roleType;

    /**
     * @var int
     *
     * @ORM\Column(name="role_module", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $roleModule;

    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    public function setRoleName(string $roleName): self
    {
        $this->roleName = $roleName;

        return $this;
    }

    public function getRoleDescription(): ?string
    {
        return $this->roleDescription;
    }

    public function setRoleDescription(string $roleDescription): self
    {
        $this->roleDescription = $roleDescription;

        return $this;
    }

    public function getRoleType(): ?int
    {
        return $this->roleType;
    }

    public function setRoleType(int $roleType): self
    {
        $this->roleType = $roleType;

        return $this;
    }

    public function getRoleModule(): ?int
    {
        return $this->roleModule;
    }

    public function setRoleModule(int $roleModule): self
    {
        $this->roleModule = $roleModule;

        return $this;
    }


}
