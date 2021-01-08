<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpForums
 *
 * @ORM\Table(name="dp_forums", indexes={@ORM\Index(name="idx_fproject", columns={"forum_project"}), @ORM\Index(name="idx_fowner", columns={"forum_owner"}), @ORM\Index(name="forum_status", columns={"forum_status"})})
 * @ORM\Entity
 */
class DpForums
{
    /**
     * @var int
     *
     * @ORM\Column(name="forum_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $forumId;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_project", type="integer", nullable=false)
     */
    private $forumProject;

    /**
     * @var bool
     *
     * @ORM\Column(name="forum_status", type="boolean", nullable=false, options={"default"="-1"})
     */
    private $forumStatus = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="forum_owner", type="integer", nullable=false)
     */
    private $forumOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_name", type="string", length=50, nullable=false)
     */
    private $forumName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="forum_create_date", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    private $forumCreateDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="forum_last_date", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    private $forumLastDate = '0000-00-00 00:00:00';

    /**
     * @var int
     *
     * @ORM\Column(name="forum_last_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $forumLastId;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_message_count", type="integer", nullable=false)
     */
    private $forumMessageCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forum_description", type="string", length=255, nullable=true)
     */
    private $forumDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_moderated", type="integer", nullable=false)
     */
    private $forumModerated;

    public function getForumId(): ?int
    {
        return $this->forumId;
    }

    public function getForumProject(): ?int
    {
        return $this->forumProject;
    }

    public function setForumProject(int $forumProject): self
    {
        $this->forumProject = $forumProject;

        return $this;
    }

    public function getForumStatus(): ?bool
    {
        return $this->forumStatus;
    }

    public function setForumStatus(bool $forumStatus): self
    {
        $this->forumStatus = $forumStatus;

        return $this;
    }

    public function getForumOwner(): ?int
    {
        return $this->forumOwner;
    }

    public function setForumOwner(int $forumOwner): self
    {
        $this->forumOwner = $forumOwner;

        return $this;
    }

    public function getForumName(): ?string
    {
        return $this->forumName;
    }

    public function setForumName(string $forumName): self
    {
        $this->forumName = $forumName;

        return $this;
    }

    public function getForumCreateDate(): ?\DateTimeInterface
    {
        return $this->forumCreateDate;
    }

    public function setForumCreateDate(?\DateTimeInterface $forumCreateDate): self
    {
        $this->forumCreateDate = $forumCreateDate;

        return $this;
    }

    public function getForumLastDate(): ?\DateTimeInterface
    {
        return $this->forumLastDate;
    }

    public function setForumLastDate(?\DateTimeInterface $forumLastDate): self
    {
        $this->forumLastDate = $forumLastDate;

        return $this;
    }

    public function getForumLastId(): ?int
    {
        return $this->forumLastId;
    }

    public function setForumLastId(int $forumLastId): self
    {
        $this->forumLastId = $forumLastId;

        return $this;
    }

    public function getForumMessageCount(): ?int
    {
        return $this->forumMessageCount;
    }

    public function setForumMessageCount(int $forumMessageCount): self
    {
        $this->forumMessageCount = $forumMessageCount;

        return $this;
    }

    public function getForumDescription(): ?string
    {
        return $this->forumDescription;
    }

    public function setForumDescription(?string $forumDescription): self
    {
        $this->forumDescription = $forumDescription;

        return $this;
    }

    public function getForumModerated(): ?int
    {
        return $this->forumModerated;
    }

    public function setForumModerated(int $forumModerated): self
    {
        $this->forumModerated = $forumModerated;

        return $this;
    }


}
