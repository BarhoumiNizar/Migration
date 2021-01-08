<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpProjectContacts
 *
 * @ORM\Table(name="dp_project_contacts")
 * @ORM\Entity
 */
class DpProjectContacts
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     */
    private $contactId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    public function setContactId(int $contactId): self
    {
        $this->contactId = $contactId;

        return $this;
    }


}
