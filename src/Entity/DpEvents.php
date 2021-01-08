<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpEvents
 *
 * @ORM\Table(name="dp_events", indexes={@ORM\Index(name="id_esd", columns={"event_start_date"}), @ORM\Index(name="idx_ev1", columns={"event_owner"}), @ORM\Index(name="id_eed", columns={"event_end_date"}), @ORM\Index(name="idx_ev2", columns={"event_project"}), @ORM\Index(name="id_evp", columns={"event_parent"})})
 * @ORM\Entity
 */
class DpEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="event_title", type="string", length=255, nullable=false)
     */
    private $eventTitle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_start_date", type="datetime", nullable=true)
     */
    private $eventStartDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_end_date", type="datetime", nullable=true)
     */
    private $eventEndDate;

    /**
     * @var int
     *
     * @ORM\Column(name="event_parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $eventParent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_description", type="text", length=65535, nullable=true)
     */
    private $eventDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="event_times_recuring", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $eventTimesRecuring;

    /**
     * @var int
     *
     * @ORM\Column(name="event_recurs", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $eventRecurs;

    /**
     * @var int
     *
     * @ORM\Column(name="event_remind", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $eventRemind;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_icon", type="string", length=20, nullable=true, options={"default"="obj/event"})
     */
    private $eventIcon = 'obj/event';

    /**
     * @var int|null
     *
     * @ORM\Column(name="event_owner", type="integer", nullable=true)
     */
    private $eventOwner;

    /**
     * @var int|null
     *
     * @ORM\Column(name="event_project", type="integer", nullable=true)
     */
    private $eventProject;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="event_private", type="boolean", nullable=true)
     */
    private $eventPrivate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="event_type", type="boolean", nullable=true)
     */
    private $eventType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="event_cwd", type="boolean", nullable=true)
     */
    private $eventCwd;

    /**
     * @var bool
     *
     * @ORM\Column(name="event_notify", type="boolean", nullable=false)
     */
    private $eventNotify;

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function getEventTitle(): ?string
    {
        return $this->eventTitle;
    }

    public function setEventTitle(string $eventTitle): self
    {
        $this->eventTitle = $eventTitle;

        return $this;
    }

    public function getEventStartDate(): ?\DateTimeInterface
    {
        return $this->eventStartDate;
    }

    public function setEventStartDate(?\DateTimeInterface $eventStartDate): self
    {
        $this->eventStartDate = $eventStartDate;

        return $this;
    }

    public function getEventEndDate(): ?\DateTimeInterface
    {
        return $this->eventEndDate;
    }

    public function setEventEndDate(?\DateTimeInterface $eventEndDate): self
    {
        $this->eventEndDate = $eventEndDate;

        return $this;
    }

    public function getEventParent(): ?int
    {
        return $this->eventParent;
    }

    public function setEventParent(int $eventParent): self
    {
        $this->eventParent = $eventParent;

        return $this;
    }

    public function getEventDescription(): ?string
    {
        return $this->eventDescription;
    }

    public function setEventDescription(?string $eventDescription): self
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    public function getEventTimesRecuring(): ?int
    {
        return $this->eventTimesRecuring;
    }

    public function setEventTimesRecuring(int $eventTimesRecuring): self
    {
        $this->eventTimesRecuring = $eventTimesRecuring;

        return $this;
    }

    public function getEventRecurs(): ?int
    {
        return $this->eventRecurs;
    }

    public function setEventRecurs(int $eventRecurs): self
    {
        $this->eventRecurs = $eventRecurs;

        return $this;
    }

    public function getEventRemind(): ?int
    {
        return $this->eventRemind;
    }

    public function setEventRemind(int $eventRemind): self
    {
        $this->eventRemind = $eventRemind;

        return $this;
    }

    public function getEventIcon(): ?string
    {
        return $this->eventIcon;
    }

    public function setEventIcon(?string $eventIcon): self
    {
        $this->eventIcon = $eventIcon;

        return $this;
    }

    public function getEventOwner(): ?int
    {
        return $this->eventOwner;
    }

    public function setEventOwner(?int $eventOwner): self
    {
        $this->eventOwner = $eventOwner;

        return $this;
    }

    public function getEventProject(): ?int
    {
        return $this->eventProject;
    }

    public function setEventProject(?int $eventProject): self
    {
        $this->eventProject = $eventProject;

        return $this;
    }

    public function getEventPrivate(): ?bool
    {
        return $this->eventPrivate;
    }

    public function setEventPrivate(?bool $eventPrivate): self
    {
        $this->eventPrivate = $eventPrivate;

        return $this;
    }

    public function getEventType(): ?bool
    {
        return $this->eventType;
    }

    public function setEventType(?bool $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    public function getEventCwd(): ?bool
    {
        return $this->eventCwd;
    }

    public function setEventCwd(?bool $eventCwd): self
    {
        $this->eventCwd = $eventCwd;

        return $this;
    }

    public function getEventNotify(): ?bool
    {
        return $this->eventNotify;
    }

    public function setEventNotify(bool $eventNotify): self
    {
        $this->eventNotify = $eventNotify;

        return $this;
    }


}
