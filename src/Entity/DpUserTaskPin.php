<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpUserTaskPin
 *
 * @ORM\Table(name="dp_user_task_pin")
 * @ORM\Entity
 */
class DpUserTaskPin
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
     * @ORM\Column(name="task_pinned", type="boolean", nullable=false, options={"default"="1"})
     */
    private $taskPinned = true;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    public function getTaskPinned(): ?bool
    {
        return $this->taskPinned;
    }

    public function setTaskPinned(bool $taskPinned): self
    {
        $this->taskPinned = $taskPinned;

        return $this;
    }


}
