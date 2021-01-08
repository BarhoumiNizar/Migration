<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpFilesIndex
 *
 * @ORM\Table(name="dp_files_index", indexes={@ORM\Index(name="idx_fwrd", columns={"word"})})
 * @ORM\Entity
 */
class DpFilesIndex
{
    /**
     * @var int
     *
     * @ORM\Column(name="file_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fileId;

    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $word;

    /**
     * @var int
     *
     * @ORM\Column(name="word_placement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $wordPlacement;

    public function getFileId(): ?int
    {
        return $this->fileId;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function getWordPlacement(): ?int
    {
        return $this->wordPlacement;
    }


}
