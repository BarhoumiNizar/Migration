<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpProjectDepartments
 *
 * @ORM\Table(name="dp_project_departments")
 * @ORM\Entity
 */
class DpProjectDepartments
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId;

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

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): self
    {
        $this->projectId = $projectId;

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
