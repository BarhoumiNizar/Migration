<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpTaskContacts
 *
 * @ORM\Table(name="dp_task_contacts", indexes={@ORM\Index(name="idx_task_contacts", columns={"task_id"})})
 * @ORM\Entity
 */
class DpTaskContacts
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
     * @ORM\Column(name="task_id", type="integer", nullable=false)
     */
    private $taskId;

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

    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    public function setTaskId(int $taskId): self
    {
        $this->taskId = $taskId;

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
