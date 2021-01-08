<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpTaskDepartments
 *
 * @ORM\Table(name="dp_task_departments", indexes={@ORM\Index(name="idx_task_departments", columns={"task_id"})})
 * @ORM\Entity
 */
class DpTaskDepartments
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
     * @ORM\Column(name="task_id", type="integer", nullable=false)
     */
    private $taskId;

    /**
     * @var int
     *
     * @ORM\Column(name="department_id", type="integer", nullable=false)
     */
    private $departmentId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    public function setTaskId(int $taskId): self
    {
        $this->taskId = $taskId;

        return $this;
    }

    public function getDepartmentId(): ?int
    {
        return $this->departmentId;
    }

    public function setDepartmentId(int $departmentId): self
    {
        $this->departmentId = $departmentId;

        return $this;
    }


}
