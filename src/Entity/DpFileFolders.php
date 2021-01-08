<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpFileFolders
 *
 * @ORM\Table(name="dp_file_folders")
 * @ORM\Entity
 */
class DpFileFolders
{
    /**
     * @var int
     *
     * @ORM\Column(name="file_folder_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileFolderId;

    /**
     * @var int
     *
     * @ORM\Column(name="file_folder_parent", type="integer", nullable=false)
     */
    private $fileFolderParent;

    /**
     * @var string
     *
     * @ORM\Column(name="file_folder_name", type="string", length=255, nullable=false)
     */
    private $fileFolderName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_folder_description", type="text", length=65535, nullable=true)
     */
    private $fileFolderDescription;

    public function getFileFolderId(): ?int
    {
        return $this->fileFolderId;
    }

    public function getFileFolderParent(): ?int
    {
        return $this->fileFolderParent;
    }

    public function setFileFolderParent(int $fileFolderParent): self
    {
        $this->fileFolderParent = $fileFolderParent;

        return $this;
    }

    public function getFileFolderName(): ?string
    {
        return $this->fileFolderName;
    }

    public function setFileFolderName(string $fileFolderName): self
    {
        $this->fileFolderName = $fileFolderName;

        return $this;
    }

    public function getFileFolderDescription(): ?string
    {
        return $this->fileFolderDescription;
    }

    public function setFileFolderDescription(?string $fileFolderDescription): self
    {
        $this->fileFolderDescription = $fileFolderDescription;

        return $this;
    }


}
