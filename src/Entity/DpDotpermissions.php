<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpDotpermissions
 *
 * @ORM\Table(name="dp_dotpermissions", indexes={@ORM\Index(name="user_id", columns={"user_id", "section", "permission", "axo"})})
 * @ORM\Entity
 */
class DpDotpermissions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="acl_id", type="integer", nullable=false)
     */
    private $aclId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=80, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=80, nullable=false)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="axo", type="string", length=80, nullable=false)
     */
    private $axo;

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="string", length=80, nullable=false)
     */
    private $permission;

    /**
     * @var int
     *
     * @ORM\Column(name="allow", type="integer", nullable=false)
     */
    private $allow;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var int
     *
     * @ORM\Column(name="enabled", type="integer", nullable=false)
     */
    private $enabled;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAclId(): ?int
    {
        return $this->aclId;
    }

    public function setAclId(int $aclId): self
    {
        $this->aclId = $aclId;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getAxo(): ?string
    {
        return $this->axo;
    }

    public function setAxo(string $axo): self
    {
        $this->axo = $axo;

        return $this;
    }

    public function getPermission(): ?string
    {
        return $this->permission;
    }

    public function setPermission(string $permission): self
    {
        $this->permission = $permission;

        return $this;
    }

    public function getAllow(): ?int
    {
        return $this->allow;
    }

    public function setAllow(int $allow): self
    {
        $this->allow = $allow;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }


}
