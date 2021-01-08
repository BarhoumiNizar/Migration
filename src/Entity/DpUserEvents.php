<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpUserEvents
 *
 * @ORM\Table(name="dp_user_events", indexes={@ORM\Index(name="uek1", columns={"user_id", "event_id"}), @ORM\Index(name="uek2", columns={"event_id", "user_id"})})
 * @ORM\Entity
 */
class DpUserEvents
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     */
    private $eventId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function setEventId(int $eventId): self
    {
        $this->eventId = $eventId;

        return $this;
    }


}
