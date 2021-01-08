<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpEventQueue
 *
 * @ORM\Table(name="dp_event_queue", indexes={@ORM\Index(name="queue_start", columns={"queue_batched", "queue_start"}), @ORM\Index(name="queue_type", columns={"queue_type"}), @ORM\Index(name="queue_origin_id", columns={"queue_origin_id"}), @ORM\Index(name="queue_module", columns={"queue_module"})})
 * @ORM\Entity
 */
class DpEventQueue
{
    /**
     * @var int
     *
     * @ORM\Column(name="queue_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $queueId;

    /**
     * @var int
     *
     * @ORM\Column(name="queue_start", type="integer", nullable=false)
     */
    private $queueStart;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_type", type="string", length=40, nullable=false)
     */
    private $queueType;

    /**
     * @var int
     *
     * @ORM\Column(name="queue_repeat_interval", type="integer", nullable=false)
     */
    private $queueRepeatInterval;

    /**
     * @var int
     *
     * @ORM\Column(name="queue_repeat_count", type="integer", nullable=false)
     */
    private $queueRepeatCount;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_data", type="blob", length=0, nullable=false)
     */
    private $queueData;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_callback", type="string", length=127, nullable=false)
     */
    private $queueCallback;

    /**
     * @var int
     *
     * @ORM\Column(name="queue_owner", type="integer", nullable=false)
     */
    private $queueOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="queue_origin_id", type="integer", nullable=false)
     */
    private $queueOriginId;

    /**
     * @var string
     *
     * @ORM\Column(name="queue_module", type="string", length=40, nullable=false)
     */
    private $queueModule;

    /**
     * @var int
     *
     * @ORM\Column(name="queue_batched", type="integer", nullable=false)
     */
    private $queueBatched;

    public function getQueueId(): ?int
    {
        return $this->queueId;
    }

    public function getQueueStart(): ?int
    {
        return $this->queueStart;
    }

    public function setQueueStart(int $queueStart): self
    {
        $this->queueStart = $queueStart;

        return $this;
    }

    public function getQueueType(): ?string
    {
        return $this->queueType;
    }

    public function setQueueType(string $queueType): self
    {
        $this->queueType = $queueType;

        return $this;
    }

    public function getQueueRepeatInterval(): ?int
    {
        return $this->queueRepeatInterval;
    }

    public function setQueueRepeatInterval(int $queueRepeatInterval): self
    {
        $this->queueRepeatInterval = $queueRepeatInterval;

        return $this;
    }

    public function getQueueRepeatCount(): ?int
    {
        return $this->queueRepeatCount;
    }

    public function setQueueRepeatCount(int $queueRepeatCount): self
    {
        $this->queueRepeatCount = $queueRepeatCount;

        return $this;
    }

    public function getQueueData()
    {
        return $this->queueData;
    }

    public function setQueueData($queueData): self
    {
        $this->queueData = $queueData;

        return $this;
    }

    public function getQueueCallback(): ?string
    {
        return $this->queueCallback;
    }

    public function setQueueCallback(string $queueCallback): self
    {
        $this->queueCallback = $queueCallback;

        return $this;
    }

    public function getQueueOwner(): ?int
    {
        return $this->queueOwner;
    }

    public function setQueueOwner(int $queueOwner): self
    {
        $this->queueOwner = $queueOwner;

        return $this;
    }

    public function getQueueOriginId(): ?int
    {
        return $this->queueOriginId;
    }

    public function setQueueOriginId(int $queueOriginId): self
    {
        $this->queueOriginId = $queueOriginId;

        return $this;
    }

    public function getQueueModule(): ?string
    {
        return $this->queueModule;
    }

    public function setQueueModule(string $queueModule): self
    {
        $this->queueModule = $queueModule;

        return $this;
    }

    public function getQueueBatched(): ?int
    {
        return $this->queueBatched;
    }

    public function setQueueBatched(int $queueBatched): self
    {
        $this->queueBatched = $queueBatched;

        return $this;
    }


}
