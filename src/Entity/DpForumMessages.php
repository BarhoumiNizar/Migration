<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpForumMessages
 *
 * @ORM\Table(name="dp_forum_messages", indexes={@ORM\Index(name="idx_mparent", columns={"message_parent"}), @ORM\Index(name="idx_mdate", columns={"message_date"}), @ORM\Index(name="idx_mforum", columns={"message_forum"})})
 * @ORM\Entity
 */
class DpForumMessages
{
    /**
     * @var int
     *
     * @ORM\Column(name="message_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $messageId;

    /**
     * @var int
     *
     * @ORM\Column(name="message_forum", type="integer", nullable=false)
     */
    private $messageForum;

    /**
     * @var int
     *
     * @ORM\Column(name="message_parent", type="integer", nullable=false)
     */
    private $messageParent;

    /**
     * @var int
     *
     * @ORM\Column(name="message_author", type="integer", nullable=false)
     */
    private $messageAuthor;

    /**
     * @var int
     *
     * @ORM\Column(name="message_editor", type="integer", nullable=false)
     */
    private $messageEditor;

    /**
     * @var string
     *
     * @ORM\Column(name="message_title", type="string", length=255, nullable=false)
     */
    private $messageTitle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_date", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    private $messageDate = '0000-00-00 00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_body", type="text", length=65535, nullable=true)
     */
    private $messageBody;

    /**
     * @var bool
     *
     * @ORM\Column(name="message_published", type="boolean", nullable=false, options={"default"="1"})
     */
    private $messagePublished = true;

    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    public function getMessageForum(): ?int
    {
        return $this->messageForum;
    }

    public function setMessageForum(int $messageForum): self
    {
        $this->messageForum = $messageForum;

        return $this;
    }

    public function getMessageParent(): ?int
    {
        return $this->messageParent;
    }

    public function setMessageParent(int $messageParent): self
    {
        $this->messageParent = $messageParent;

        return $this;
    }

    public function getMessageAuthor(): ?int
    {
        return $this->messageAuthor;
    }

    public function setMessageAuthor(int $messageAuthor): self
    {
        $this->messageAuthor = $messageAuthor;

        return $this;
    }

    public function getMessageEditor(): ?int
    {
        return $this->messageEditor;
    }

    public function setMessageEditor(int $messageEditor): self
    {
        $this->messageEditor = $messageEditor;

        return $this;
    }

    public function getMessageTitle(): ?string
    {
        return $this->messageTitle;
    }

    public function setMessageTitle(string $messageTitle): self
    {
        $this->messageTitle = $messageTitle;

        return $this;
    }

    public function getMessageDate(): ?\DateTimeInterface
    {
        return $this->messageDate;
    }

    public function setMessageDate(?\DateTimeInterface $messageDate): self
    {
        $this->messageDate = $messageDate;

        return $this;
    }

    public function getMessageBody(): ?string
    {
        return $this->messageBody;
    }

    public function setMessageBody(?string $messageBody): self
    {
        $this->messageBody = $messageBody;

        return $this;
    }

    public function getMessagePublished(): ?bool
    {
        return $this->messagePublished;
    }

    public function setMessagePublished(bool $messagePublished): self
    {
        $this->messagePublished = $messagePublished;

        return $this;
    }


}
