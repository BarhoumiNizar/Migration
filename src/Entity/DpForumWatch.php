<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpForumWatch
 *
 * @ORM\Table(name="dp_forum_watch", indexes={@ORM\Index(name="idx_fw1", columns={"watch_user", "watch_forum"}), @ORM\Index(name="idx_fw2", columns={"watch_user", "watch_topic"})})
 * @ORM\Entity
 */
class DpForumWatch
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
     * @ORM\Column(name="watch_user", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $watchUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="watch_forum", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $watchForum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="watch_topic", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $watchTopic;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWatchUser(): ?int
    {
        return $this->watchUser;
    }

    public function setWatchUser(int $watchUser): self
    {
        $this->watchUser = $watchUser;

        return $this;
    }

    public function getWatchForum(): ?int
    {
        return $this->watchForum;
    }

    public function setWatchForum(?int $watchForum): self
    {
        $this->watchForum = $watchForum;

        return $this;
    }

    public function getWatchTopic(): ?int
    {
        return $this->watchTopic;
    }

    public function setWatchTopic(?int $watchTopic): self
    {
        $this->watchTopic = $watchTopic;

        return $this;
    }


}
