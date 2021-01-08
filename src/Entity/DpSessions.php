<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpSessions
 *
 * @ORM\Table(name="dp_sessions", indexes={@ORM\Index(name="session_updated", columns={"session_updated"}), @ORM\Index(name="session_created", columns={"session_created"})})
 * @ORM\Entity
 */
class DpSessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;

    /**
     * @var int
     *
     * @ORM\Column(name="session_user", type="integer", nullable=false)
     */
    private $sessionUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_data", type="blob", length=0, nullable=true)
     */
    private $sessionData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_updated", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $sessionUpdated = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_created", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $sessionCreated = '0000-00-00 00:00:00';

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function getSessionUser(): ?int
    {
        return $this->sessionUser;
    }

    public function setSessionUser(int $sessionUser): self
    {
        $this->sessionUser = $sessionUser;

        return $this;
    }

    public function getSessionData()
    {
        return $this->sessionData;
    }

    public function setSessionData($sessionData): self
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    public function getSessionUpdated(): ?\DateTimeInterface
    {
        return $this->sessionUpdated;
    }

    public function setSessionUpdated(\DateTimeInterface $sessionUpdated): self
    {
        $this->sessionUpdated = $sessionUpdated;

        return $this;
    }

    public function getSessionCreated(): ?\DateTimeInterface
    {
        return $this->sessionCreated;
    }

    public function setSessionCreated(\DateTimeInterface $sessionCreated): self
    {
        $this->sessionCreated = $sessionCreated;

        return $this;
    }


}
