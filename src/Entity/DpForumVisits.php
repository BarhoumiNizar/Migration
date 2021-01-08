<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpForumVisits
 *
 * @ORM\Table(name="dp_forum_visits", indexes={@ORM\Index(name="idx_fv", columns={"visit_user", "visit_forum", "visit_message"})})
 * @ORM\Entity
 */
class DpForumVisits
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
     * @ORM\Column(name="visit_user", type="integer", nullable=false)
     */
    private $visitUser;

    /**
     * @var int
     *
     * @ORM\Column(name="visit_forum", type="integer", nullable=false)
     */
    private $visitForum;

    /**
     * @var int
     *
     * @ORM\Column(name="visit_message", type="integer", nullable=false)
     */
    private $visitMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="visit_date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $visitDate = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisitUser(): ?int
    {
        return $this->visitUser;
    }

    public function setVisitUser(int $visitUser): self
    {
        $this->visitUser = $visitUser;

        return $this;
    }

    public function getVisitForum(): ?int
    {
        return $this->visitForum;
    }

    public function setVisitForum(int $visitForum): self
    {
        $this->visitForum = $visitForum;

        return $this;
    }

    public function getVisitMessage(): ?int
    {
        return $this->visitMessage;
    }

    public function setVisitMessage(int $visitMessage): self
    {
        $this->visitMessage = $visitMessage;

        return $this;
    }

    public function getVisitDate(): ?\DateTimeInterface
    {
        return $this->visitDate;
    }

    public function setVisitDate(\DateTimeInterface $visitDate): self
    {
        $this->visitDate = $visitDate;

        return $this;
    }


}
