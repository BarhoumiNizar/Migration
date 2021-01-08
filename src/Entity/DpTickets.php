<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpTickets
 *
 * @ORM\Table(name="dp_tickets", indexes={@ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class DpTickets
{
    /**
     * @var int
     *
     * @ORM\Column(name="ticket", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ticket;

    /**
     * @var int
     *
     * @ORM\Column(name="ticket_company", type="integer", nullable=false)
     */
    private $ticketCompany;

    /**
     * @var int
     *
     * @ORM\Column(name="ticket_project", type="integer", nullable=false)
     */
    private $ticketProject;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=100, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient", type="string", length=100, nullable=false)
     */
    private $recipient;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=false)
     */
    private $subject;

    /**
     * @var bool
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=false)
     */
    private $attachment;

    /**
     * @var int
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="assignment", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $assignment;

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parent;

    /**
     * @var int
     *
     * @ORM\Column(name="activity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $activity;

    /**
     * @var bool
     *
     * @ORM\Column(name="priority", type="boolean", nullable=false, options={"default"="1"})
     */
    private $priority = true;

    /**
     * @var string
     *
     * @ORM\Column(name="cc", type="string", length=255, nullable=false)
     */
    private $cc;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature", type="text", length=65535, nullable=true)
     */
    private $signature;

    public function getTicket(): ?int
    {
        return $this->ticket;
    }

    public function getTicketCompany(): ?int
    {
        return $this->ticketCompany;
    }

    public function setTicketCompany(int $ticketCompany): self
    {
        $this->ticketCompany = $ticketCompany;

        return $this;
    }

    public function getTicketProject(): ?int
    {
        return $this->ticketProject;
    }

    public function setTicketProject(int $ticketProject): self
    {
        $this->ticketProject = $ticketProject;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getAttachment(): ?bool
    {
        return $this->attachment;
    }

    public function setAttachment(bool $attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAssignment(): ?int
    {
        return $this->assignment;
    }

    public function setAssignment(int $assignment): self
    {
        $this->assignment = $assignment;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getActivity(): ?int
    {
        return $this->activity;
    }

    public function setActivity(int $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function getPriority(): ?bool
    {
        return $this->priority;
    }

    public function setPriority(bool $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getCc(): ?string
    {
        return $this->cc;
    }

    public function setCc(string $cc): self
    {
        $this->cc = $cc;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }


}
