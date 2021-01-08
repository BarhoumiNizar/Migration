<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpTasks
 *
 * @ORM\Table(name="dp_tasks", indexes={@ORM\Index(name="idx_task_parent", columns={"task_parent"}), @ORM\Index(name="idx_task2", columns={"task_end_date"}), @ORM\Index(name="idx_task_order", columns={"task_order"}), @ORM\Index(name="idx_task_project", columns={"task_project"}), @ORM\Index(name="idx_task1", columns={"task_start_date"}), @ORM\Index(name="idx_task_owner", columns={"task_owner"})})
 * @ORM\Entity
 */
class DpTasks
{
    /**
     * @var int
     *
     * @ORM\Column(name="task_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_name", type="string", length=255, nullable=true)
     */
    private $taskName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="task_parent", type="integer", nullable=true)
     */
    private $taskParent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="task_milestone", type="boolean", nullable=true)
     */
    private $taskMilestone;

    /**
     * @var int
     *
     * @ORM\Column(name="task_project", type="integer", nullable=false)
     */
    private $taskProject;

    /**
     * @var int
     *
     * @ORM\Column(name="task_owner", type="integer", nullable=false)
     */
    private $taskOwner;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="task_start_date", type="datetime", nullable=true)
     */
    private $taskStartDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="task_duration", type="float", precision=10, scale=0, nullable=true)
     */
    private $taskDuration;

    /**
     * @var int
     *
     * @ORM\Column(name="task_duration_type", type="integer", nullable=false, options={"default"="1"})
     */
    private $taskDurationType = '1';

    /**
     * @var float|null
     *
     * @ORM\Column(name="task_hours_worked", type="float", precision=10, scale=0, nullable=true)
     */
    private $taskHoursWorked;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="task_end_date", type="datetime", nullable=true)
     */
    private $taskEndDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="task_status", type="integer", nullable=true)
     */
    private $taskStatus;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="task_priority", type="boolean", nullable=true)
     */
    private $taskPriority;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="task_percent_complete", type="boolean", nullable=true)
     */
    private $taskPercentComplete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_description", type="text", length=65535, nullable=true)
     */
    private $taskDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_target_budget", type="decimal", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $taskTargetBudget = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_related_url", type="string", length=255, nullable=true)
     */
    private $taskRelatedUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="task_creator", type="integer", nullable=false)
     */
    private $taskCreator;

    /**
     * @var int
     *
     * @ORM\Column(name="task_order", type="integer", nullable=false)
     */
    private $taskOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="task_client_publish", type="boolean", nullable=false)
     */
    private $taskClientPublish;

    /**
     * @var bool
     *
     * @ORM\Column(name="task_dynamic", type="boolean", nullable=false)
     */
    private $taskDynamic;

    /**
     * @var int
     *
     * @ORM\Column(name="task_access", type="integer", nullable=false)
     */
    private $taskAccess;

    /**
     * @var int
     *
     * @ORM\Column(name="task_notify", type="integer", nullable=false)
     */
    private $taskNotify;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_departments", type="string", length=100, nullable=true, options={"fixed"=true})
     */
    private $taskDepartments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_contacts", type="string", length=100, nullable=true, options={"fixed"=true})
     */
    private $taskContacts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_custom", type="text", length=0, nullable=true)
     */
    private $taskCustom;

    /**
     * @var int
     *
     * @ORM\Column(name="task_type", type="smallint", nullable=false)
     */
    private $taskType;

    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;

        return $this;
    }

    public function getTaskParent(): ?int
    {
        return $this->taskParent;
    }

    public function setTaskParent(?int $taskParent): self
    {
        $this->taskParent = $taskParent;

        return $this;
    }

    public function getTaskMilestone(): ?bool
    {
        return $this->taskMilestone;
    }

    public function setTaskMilestone(?bool $taskMilestone): self
    {
        $this->taskMilestone = $taskMilestone;

        return $this;
    }

    public function getTaskProject(): ?int
    {
        return $this->taskProject;
    }

    public function setTaskProject(int $taskProject): self
    {
        $this->taskProject = $taskProject;

        return $this;
    }

    public function getTaskOwner(): ?int
    {
        return $this->taskOwner;
    }

    public function setTaskOwner(int $taskOwner): self
    {
        $this->taskOwner = $taskOwner;

        return $this;
    }

    public function getTaskStartDate(): ?\DateTimeInterface
    {
        return $this->taskStartDate;
    }

    public function setTaskStartDate(?\DateTimeInterface $taskStartDate): self
    {
        $this->taskStartDate = $taskStartDate;

        return $this;
    }

    public function getTaskDuration(): ?float
    {
        return $this->taskDuration;
    }

    public function setTaskDuration(?float $taskDuration): self
    {
        $this->taskDuration = $taskDuration;

        return $this;
    }

    public function getTaskDurationType(): ?int
    {
        return $this->taskDurationType;
    }

    public function setTaskDurationType(int $taskDurationType): self
    {
        $this->taskDurationType = $taskDurationType;

        return $this;
    }

    public function getTaskHoursWorked(): ?float
    {
        return $this->taskHoursWorked;
    }

    public function setTaskHoursWorked(?float $taskHoursWorked): self
    {
        $this->taskHoursWorked = $taskHoursWorked;

        return $this;
    }

    public function getTaskEndDate(): ?\DateTimeInterface
    {
        return $this->taskEndDate;
    }

    public function setTaskEndDate(?\DateTimeInterface $taskEndDate): self
    {
        $this->taskEndDate = $taskEndDate;

        return $this;
    }

    public function getTaskStatus(): ?int
    {
        return $this->taskStatus;
    }

    public function setTaskStatus(?int $taskStatus): self
    {
        $this->taskStatus = $taskStatus;

        return $this;
    }

    public function getTaskPriority(): ?bool
    {
        return $this->taskPriority;
    }

    public function setTaskPriority(?bool $taskPriority): self
    {
        $this->taskPriority = $taskPriority;

        return $this;
    }

    public function getTaskPercentComplete(): ?bool
    {
        return $this->taskPercentComplete;
    }

    public function setTaskPercentComplete(?bool $taskPercentComplete): self
    {
        $this->taskPercentComplete = $taskPercentComplete;

        return $this;
    }

    public function getTaskDescription(): ?string
    {
        return $this->taskDescription;
    }

    public function setTaskDescription(?string $taskDescription): self
    {
        $this->taskDescription = $taskDescription;

        return $this;
    }

    public function getTaskTargetBudget(): ?string
    {
        return $this->taskTargetBudget;
    }

    public function setTaskTargetBudget(?string $taskTargetBudget): self
    {
        $this->taskTargetBudget = $taskTargetBudget;

        return $this;
    }

    public function getTaskRelatedUrl(): ?string
    {
        return $this->taskRelatedUrl;
    }

    public function setTaskRelatedUrl(?string $taskRelatedUrl): self
    {
        $this->taskRelatedUrl = $taskRelatedUrl;

        return $this;
    }

    public function getTaskCreator(): ?int
    {
        return $this->taskCreator;
    }

    public function setTaskCreator(int $taskCreator): self
    {
        $this->taskCreator = $taskCreator;

        return $this;
    }

    public function getTaskOrder(): ?int
    {
        return $this->taskOrder;
    }

    public function setTaskOrder(int $taskOrder): self
    {
        $this->taskOrder = $taskOrder;

        return $this;
    }

    public function getTaskClientPublish(): ?bool
    {
        return $this->taskClientPublish;
    }

    public function setTaskClientPublish(bool $taskClientPublish): self
    {
        $this->taskClientPublish = $taskClientPublish;

        return $this;
    }

    public function getTaskDynamic(): ?bool
    {
        return $this->taskDynamic;
    }

    public function setTaskDynamic(bool $taskDynamic): self
    {
        $this->taskDynamic = $taskDynamic;

        return $this;
    }

    public function getTaskAccess(): ?int
    {
        return $this->taskAccess;
    }

    public function setTaskAccess(int $taskAccess): self
    {
        $this->taskAccess = $taskAccess;

        return $this;
    }

    public function getTaskNotify(): ?int
    {
        return $this->taskNotify;
    }

    public function setTaskNotify(int $taskNotify): self
    {
        $this->taskNotify = $taskNotify;

        return $this;
    }

    public function getTaskDepartments(): ?string
    {
        return $this->taskDepartments;
    }

    public function setTaskDepartments(?string $taskDepartments): self
    {
        $this->taskDepartments = $taskDepartments;

        return $this;
    }

    public function getTaskContacts(): ?string
    {
        return $this->taskContacts;
    }

    public function setTaskContacts(?string $taskContacts): self
    {
        $this->taskContacts = $taskContacts;

        return $this;
    }

    public function getTaskCustom(): ?string
    {
        return $this->taskCustom;
    }

    public function setTaskCustom(?string $taskCustom): self
    {
        $this->taskCustom = $taskCustom;

        return $this;
    }

    public function getTaskType(): ?int
    {
        return $this->taskType;
    }

    public function setTaskType(int $taskType): self
    {
        $this->taskType = $taskType;

        return $this;
    }


}
