<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpProjects
 *
 * @ORM\Table(name="dp_projects", indexes={@ORM\Index(name="idx_project_owner", columns={"project_owner"}), @ORM\Index(name="project_short_name", columns={"project_short_name"}), @ORM\Index(name="idx_sdate", columns={"project_start_date"}), @ORM\Index(name="idx_proj1", columns={"project_company"}), @ORM\Index(name="idx_edate", columns={"project_end_date"})})
 * @ORM\Entity
 */
class DpProjects
{
    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectId;

    /**
     * @var int
     *
     * @ORM\Column(name="project_company", type="integer", nullable=false)
     */
    private $projectCompany;

    /**
     * @var int
     *
     * @ORM\Column(name="project_company_internal", type="integer", nullable=false)
     */
    private $projectCompanyInternal;

    /**
     * @var int
     *
     * @ORM\Column(name="project_department", type="integer", nullable=false)
     */
    private $projectDepartment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_name", type="string", length=255, nullable=true)
     */
    private $projectName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_short_name", type="string", length=10, nullable=true)
     */
    private $projectShortName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_owner", type="integer", nullable=true)
     */
    private $projectOwner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_url", type="string", length=255, nullable=true)
     */
    private $projectUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_demo_url", type="string", length=255, nullable=true)
     */
    private $projectDemoUrl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="project_start_date", type="datetime", nullable=true)
     */
    private $projectStartDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="project_end_date", type="datetime", nullable=true)
     */
    private $projectEndDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_status", type="integer", nullable=true)
     */
    private $projectStatus;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="project_percent_complete", type="boolean", nullable=true)
     */
    private $projectPercentComplete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_color_identifier", type="string", length=7, nullable=true, options={"default"="#eeeeee"})
     */
    private $projectColorIdentifier = '#eeeeee';

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_description", type="text", length=65535, nullable=true)
     */
    private $projectDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_target_budget", type="decimal", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $projectTargetBudget = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_actual_budget", type="decimal", precision=10, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $projectActualBudget = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_creator", type="integer", nullable=true)
     */
    private $projectCreator;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="project_private", type="boolean", nullable=true)
     */
    private $projectPrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_departments", type="string", length=100, nullable=true, options={"fixed"=true})
     */
    private $projectDepartments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_contacts", type="string", length=100, nullable=true, options={"fixed"=true})
     */
    private $projectContacts;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="project_priority", type="boolean", nullable=true)
     */
    private $projectPriority;

    /**
     * @var int
     *
     * @ORM\Column(name="project_type", type="smallint", nullable=false)
     */
    private $projectType;

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function getProjectCompany(): ?int
    {
        return $this->projectCompany;
    }

    public function setProjectCompany(int $projectCompany): self
    {
        $this->projectCompany = $projectCompany;

        return $this;
    }

    public function getProjectCompanyInternal(): ?int
    {
        return $this->projectCompanyInternal;
    }

    public function setProjectCompanyInternal(int $projectCompanyInternal): self
    {
        $this->projectCompanyInternal = $projectCompanyInternal;

        return $this;
    }

    public function getProjectDepartment(): ?int
    {
        return $this->projectDepartment;
    }

    public function setProjectDepartment(int $projectDepartment): self
    {
        $this->projectDepartment = $projectDepartment;

        return $this;
    }

    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;

        return $this;
    }

    public function getProjectShortName(): ?string
    {
        return $this->projectShortName;
    }

    public function setProjectShortName(?string $projectShortName): self
    {
        $this->projectShortName = $projectShortName;

        return $this;
    }

    public function getProjectOwner(): ?int
    {
        return $this->projectOwner;
    }

    public function setProjectOwner(?int $projectOwner): self
    {
        $this->projectOwner = $projectOwner;

        return $this;
    }

    public function getProjectUrl(): ?string
    {
        return $this->projectUrl;
    }

    public function setProjectUrl(?string $projectUrl): self
    {
        $this->projectUrl = $projectUrl;

        return $this;
    }

    public function getProjectDemoUrl(): ?string
    {
        return $this->projectDemoUrl;
    }

    public function setProjectDemoUrl(?string $projectDemoUrl): self
    {
        $this->projectDemoUrl = $projectDemoUrl;

        return $this;
    }

    public function getProjectStartDate(): ?\DateTimeInterface
    {
        return $this->projectStartDate;
    }

    public function setProjectStartDate(?\DateTimeInterface $projectStartDate): self
    {
        $this->projectStartDate = $projectStartDate;

        return $this;
    }

    public function getProjectEndDate(): ?\DateTimeInterface
    {
        return $this->projectEndDate;
    }

    public function setProjectEndDate(?\DateTimeInterface $projectEndDate): self
    {
        $this->projectEndDate = $projectEndDate;

        return $this;
    }

    public function getProjectStatus(): ?int
    {
        return $this->projectStatus;
    }

    public function setProjectStatus(?int $projectStatus): self
    {
        $this->projectStatus = $projectStatus;

        return $this;
    }

    public function getProjectPercentComplete(): ?bool
    {
        return $this->projectPercentComplete;
    }

    public function setProjectPercentComplete(?bool $projectPercentComplete): self
    {
        $this->projectPercentComplete = $projectPercentComplete;

        return $this;
    }

    public function getProjectColorIdentifier(): ?string
    {
        return $this->projectColorIdentifier;
    }

    public function setProjectColorIdentifier(?string $projectColorIdentifier): self
    {
        $this->projectColorIdentifier = $projectColorIdentifier;

        return $this;
    }

    public function getProjectDescription(): ?string
    {
        return $this->projectDescription;
    }

    public function setProjectDescription(?string $projectDescription): self
    {
        $this->projectDescription = $projectDescription;

        return $this;
    }

    public function getProjectTargetBudget(): ?string
    {
        return $this->projectTargetBudget;
    }

    public function setProjectTargetBudget(?string $projectTargetBudget): self
    {
        $this->projectTargetBudget = $projectTargetBudget;

        return $this;
    }

    public function getProjectActualBudget(): ?string
    {
        return $this->projectActualBudget;
    }

    public function setProjectActualBudget(?string $projectActualBudget): self
    {
        $this->projectActualBudget = $projectActualBudget;

        return $this;
    }

    public function getProjectCreator(): ?int
    {
        return $this->projectCreator;
    }

    public function setProjectCreator(?int $projectCreator): self
    {
        $this->projectCreator = $projectCreator;

        return $this;
    }

    public function getProjectPrivate(): ?bool
    {
        return $this->projectPrivate;
    }

    public function setProjectPrivate(?bool $projectPrivate): self
    {
        $this->projectPrivate = $projectPrivate;

        return $this;
    }

    public function getProjectDepartments(): ?string
    {
        return $this->projectDepartments;
    }

    public function setProjectDepartments(?string $projectDepartments): self
    {
        $this->projectDepartments = $projectDepartments;

        return $this;
    }

    public function getProjectContacts(): ?string
    {
        return $this->projectContacts;
    }

    public function setProjectContacts(?string $projectContacts): self
    {
        $this->projectContacts = $projectContacts;

        return $this;
    }

    public function getProjectPriority(): ?bool
    {
        return $this->projectPriority;
    }

    public function setProjectPriority(?bool $projectPriority): self
    {
        $this->projectPriority = $projectPriority;

        return $this;
    }

    public function getProjectType(): ?int
    {
        return $this->projectType;
    }

    public function setProjectType(int $projectType): self
    {
        $this->projectType = $projectType;

        return $this;
    }


}
