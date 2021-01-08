<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpUsers
 *
 * @ORM\Table(name="dp_users", indexes={@ORM\Index(name="idx_uid", columns={"user_username"}), @ORM\Index(name="idx_pwd", columns={"user_password"}), @ORM\Index(name="idx_user_parent", columns={"user_parent"})})
 * @ORM\Entity
 */
class DpUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_contact", type="integer", nullable=false)
     */
    private $userContact;

    /**
     * @var string
     *
     * @ORM\Column(name="user_username", type="string", length=255, nullable=false)
     */
    private $userUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=32, nullable=false)
     */
    private $userPassword;

    /**
     * @var int
     *
     * @ORM\Column(name="user_parent", type="integer", nullable=false)
     */
    private $userParent;

    /**
     * @var bool
     *
     * @ORM\Column(name="user_type", type="boolean", nullable=false)
     */
    private $userType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_company", type="integer", nullable=true)
     */
    private $userCompany;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_department", type="integer", nullable=true)
     */
    private $userDepartment;

    /**
     * @var int
     *
     * @ORM\Column(name="user_owner", type="integer", nullable=false)
     */
    private $userOwner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_signature", type="text", length=65535, nullable=true)
     */
    private $userSignature;

    

    public function getUserContact(): ?int
    {
        return $this->userContact;
    }

    public function setUserContact(int $userContact): self
    {
        $this->userContact = $userContact;

        return $this;
    }

    public function getUserUsername(): ?string
    {
        return $this->userUsername;
    }

    public function setUserUsername(string $userUsername): self
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    public function setUserPassword(string $userPassword): self
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function getUserParent(): ?int
    {
        return $this->userParent;
    }

    public function setUserParent(int $userParent): self
    {
        $this->userParent = $userParent;

        return $this;
    }

    public function getUserType(): ?bool
    {
        return $this->userType;
    }

    public function setUserType(bool $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    public function getUserCompany(): ?int
    {
        return $this->userCompany;
    }

    public function setUserCompany(?int $userCompany): self
    {
        $this->userCompany = $userCompany;

        return $this;
    }

    public function getUserDepartment(): ?int
    {
        return $this->userDepartment;
    }

    public function setUserDepartment(?int $userDepartment): self
    {
        $this->userDepartment = $userDepartment;

        return $this;
    }

    public function getUserOwner(): ?int
    {
        return $this->userOwner;
    }

    public function setUserOwner(int $userOwner): self
    {
        $this->userOwner = $userOwner;

        return $this;
    }

    public function getUserSignature(): ?string
    {
        return $this->userSignature;
    }

    public function setUserSignature(?string $userSignature): self
    {
        $this->userSignature = $userSignature;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    


}
