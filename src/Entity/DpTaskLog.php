<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpTaskLog
 *
 * @ORM\Table(name="dp_task_log", indexes={@ORM\Index(name="idx_log_task", columns={"task_log_task"})})
 * @ORM\Entity
 */
class DpTaskLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="task_log_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskLogId;

    /**
     * @var int
     *
     * @ORM\Column(name="task_log_task", type="integer", nullable=false)
     */
    private $taskLogTask;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_log_name", type="string", length=255, nullable=true)
     */
    private $taskLogName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_log_description", type="text", length=65535, nullable=true)
     */
    private $taskLogDescription;

    /**
     * @var int
     *
    * @ORM\Column(name="task_log_creator", type="integer", nullable=false)
     */
    private $taskLogCreator;

    /**
     * @var float
     *
     * @ORM\Column(name="task_log_hours", type="float", precision=10, scale=0, nullable=false)
     */
    private $taskLogHours;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="task_log_date", type="datetime", nullable=true)
     */
    private $taskLogDate;

    /**
     * @var string
     *
     * @ORM\Column(name="task_log_costcode", type="string", length=8, nullable=false)
     */
    private $taskLogCostcode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="task_log_problem", type="boolean", nullable=true)
     */
    private $taskLogProblem;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="task_log_reference", type="boolean", nullable=true)
     */
    private $taskLogReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_log_related_url", type="string", length=255, nullable=true)
     */
    private $taskLogRelatedUrl;

    public function getTaskLogId(): ?int
    {
        return $this->taskLogId;
    }

    public function getTaskLogTask(): ?int
    {
        return $this->taskLogTask;
    }

    public function setTaskLogTask(int $taskLogTask): self
    {
        $this->taskLogTask = $taskLogTask;

        return $this;
    }

    public function getTaskLogName(): ?string
    {
        return $this->taskLogName;
    }

    public function setTaskLogName(?string $taskLogName): self
    {
        $this->taskLogName = $taskLogName;

        return $this;
    }

    public function getTaskLogDescription(): ?string
    {
        return $this->taskLogDescription;
    }

    public function setTaskLogDescription(?string $taskLogDescription): self
    {
        $this->taskLogDescription = $taskLogDescription;

        return $this;
    }

    

    public function getTaskLogHours(): ?float
    {
        return $this->taskLogHours;
    }

    public function setTaskLogHours(float $taskLogHours): self
    {
        $this->taskLogHours = $taskLogHours;

        return $this;
    }

    public function getTaskLogDate(): ?\DateTimeInterface
    {
        return $this->taskLogDate;
    }

    public function setTaskLogDate(?\DateTimeInterface $taskLogDate): self
    {
        $this->taskLogDate = $taskLogDate;

        return $this;
    }

    public function getTaskLogCostcode(): ?string
    {
        return $this->taskLogCostcode;
    }

    public function setTaskLogCostcode(string $taskLogCostcode): self
    {
        $this->taskLogCostcode = $taskLogCostcode;

        return $this;
    }

    public function getTaskLogProblem(): ?bool
    {
        return $this->taskLogProblem;
    }

    public function setTaskLogProblem(?bool $taskLogProblem): self
    {
        $this->taskLogProblem = $taskLogProblem;

        return $this;
    }

    public function getTaskLogReference(): ?bool
    {
        return $this->taskLogReference;
    }

    public function setTaskLogReference(?bool $taskLogReference): self
    {
        $this->taskLogReference = $taskLogReference;

        return $this;
    }

    public function getTaskLogRelatedUrl(): ?string
    {
        return $this->taskLogRelatedUrl;
    }

    public function setTaskLogRelatedUrl(?string $taskLogRelatedUrl): self
    {
        $this->taskLogRelatedUrl = $taskLogRelatedUrl;

        return $this;
    }

    public function getTaskLogCreator(): ?int
    {
        return $this->taskLogCreator;
    }

    public function setTaskLogCreator(int $taskLogCreator): self
    {
        $this->taskLogCreator = $taskLogCreator;

        return $this;
    }

    

    


}
