<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpUserTasks
 *
 * @ORM\Table(name="dp_user_tasks", indexes={@ORM\Index(name="user_type", columns={"user_type"}), @ORM\Index(name="idx_user_tasks", columns={"task_id"})})
 * @ORM\Entity
 */
class DpUserTasks
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="task_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $taskId;

    /**
     * @var bool
     *
     * @ORM\Column(name="user_type", type="boolean", nullable=false)
     */
    private $userType;

    /**
     * @var int
     *
     * @ORM\Column(name="perc_assignment", type="integer", nullable=false, options={"default"="100"})
     */
    private $percAssignment = '100';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="user_task_priority", type="boolean", nullable=true)
     */
    private $userTaskPriority;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    public function getUserType(): ?bool
    {
        return $this->userType;
    }

    public function setUserType(bool $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    public function getPercAssignment(): ?int
    {
        return $this->percAssignment;
    }

    public function setPercAssignment(int $percAssignment): self
    {
        $this->percAssignment = $percAssignment;

        return $this;
    }

    public function getUserTaskPriority(): ?bool
    {
        return $this->userTaskPriority;
    }

    public function setUserTaskPriority(?bool $userTaskPriority): self
    {
        $this->userTaskPriority = $userTaskPriority;

        return $this;
    }


}
