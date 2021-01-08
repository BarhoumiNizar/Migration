<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpFiles
 *
 * @ORM\Table(name="dp_files", indexes={@ORM\Index(name="idx_file_task", columns={"file_task"}), @ORM\Index(name="idx_file_vid", columns={"file_version_id"}), @ORM\Index(name="idx_file_project", columns={"file_project"}), @ORM\Index(name="idx_file_parent", columns={"file_parent"})})
 * @ORM\Entity
 */
class DpFiles
{
    /**
     * @var int
     *
     * @ORM\Column(name="file_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileId;

    /**
     * @var string
     *
     * @ORM\Column(name="file_real_filename", type="string", length=255, nullable=false)
     */
    private $fileRealFilename;

    /**
     * @var int
     *
     * @ORM\Column(name="file_folder", type="integer", nullable=false)
     */
    private $fileFolder;

    /**
     * @var int
     *
     * @ORM\Column(name="file_project", type="integer", nullable=false)
     */
    private $fileProject;

    /**
     * @var int
     *
     * @ORM\Column(name="file_task", type="integer", nullable=false)
     */
    private $fileTask;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=false)
     */
    private $fileName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="file_parent", type="integer", nullable=true)
     */
    private $fileParent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_description", type="text", length=65535, nullable=true)
     */
    private $fileDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_type", type="string", length=100, nullable=true)
     */
    private $fileType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="file_owner", type="integer", nullable=true)
     */
    private $fileOwner;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="file_date", type="datetime", nullable=true)
     */
    private $fileDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="file_size", type="integer", nullable=true)
     */
    private $fileSize;

    /**
     * @var float
     *
     * @ORM\Column(name="file_version", type="float", precision=10, scale=0, nullable=false)
     */
    private $fileVersion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_icon", type="string", length=20, nullable=true, options={"default"="obj/"})
     */
    private $fileIcon = 'obj/';

    /**
     * @var int|null
     *
     * @ORM\Column(name="file_category", type="integer", nullable=true)
     */
    private $fileCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="file_checkout", type="string", length=255, nullable=false)
     */
    private $fileCheckout;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_co_reason", type="text", length=65535, nullable=true)
     */
    private $fileCoReason;

    /**
     * @var int
     *
     * @ORM\Column(name="file_version_id", type="integer", nullable=false)
     */
    private $fileVersionId;

    public function getFileId(): ?int
    {
        return $this->fileId;
    }

    public function getFileRealFilename(): ?string
    {
        return $this->fileRealFilename;
    }

    public function setFileRealFilename(string $fileRealFilename): self
    {
        $this->fileRealFilename = $fileRealFilename;

        return $this;
    }

    public function getFileFolder(): ?int
    {
        return $this->fileFolder;
    }

    public function setFileFolder(int $fileFolder): self
    {
        $this->fileFolder = $fileFolder;

        return $this;
    }

    public function getFileProject(): ?int
    {
        return $this->fileProject;
    }

    public function setFileProject(int $fileProject): self
    {
        $this->fileProject = $fileProject;

        return $this;
    }

    public function getFileTask(): ?int
    {
        return $this->fileTask;
    }

    public function setFileTask(int $fileTask): self
    {
        $this->fileTask = $fileTask;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getFileParent(): ?int
    {
        return $this->fileParent;
    }

    public function setFileParent(?int $fileParent): self
    {
        $this->fileParent = $fileParent;

        return $this;
    }

    public function getFileDescription(): ?string
    {
        return $this->fileDescription;
    }

    public function setFileDescription(?string $fileDescription): self
    {
        $this->fileDescription = $fileDescription;

        return $this;
    }

    public function getFileType(): ?string
    {
        return $this->fileType;
    }

    public function setFileType(?string $fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }

    public function getFileOwner(): ?int
    {
        return $this->fileOwner;
    }

    public function setFileOwner(?int $fileOwner): self
    {
        $this->fileOwner = $fileOwner;

        return $this;
    }

    public function getFileDate(): ?\DateTimeInterface
    {
        return $this->fileDate;
    }

    public function setFileDate(?\DateTimeInterface $fileDate): self
    {
        $this->fileDate = $fileDate;

        return $this;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(?int $fileSize): self
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    public function getFileVersion(): ?float
    {
        return $this->fileVersion;
    }

    public function setFileVersion(float $fileVersion): self
    {
        $this->fileVersion = $fileVersion;

        return $this;
    }

    public function getFileIcon(): ?string
    {
        return $this->fileIcon;
    }

    public function setFileIcon(?string $fileIcon): self
    {
        $this->fileIcon = $fileIcon;

        return $this;
    }

    public function getFileCategory(): ?int
    {
        return $this->fileCategory;
    }

    public function setFileCategory(?int $fileCategory): self
    {
        $this->fileCategory = $fileCategory;

        return $this;
    }

    public function getFileCheckout(): ?string
    {
        return $this->fileCheckout;
    }

    public function setFileCheckout(string $fileCheckout): self
    {
        $this->fileCheckout = $fileCheckout;

        return $this;
    }

    public function getFileCoReason(): ?string
    {
        return $this->fileCoReason;
    }

    public function setFileCoReason(?string $fileCoReason): self
    {
        $this->fileCoReason = $fileCoReason;

        return $this;
    }

    public function getFileVersionId(): ?int
    {
        return $this->fileVersionId;
    }

    public function setFileVersionId(int $fileVersionId): self
    {
        $this->fileVersionId = $fileVersionId;

        return $this;
    }


}
