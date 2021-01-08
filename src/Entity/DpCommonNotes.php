<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpCommonNotes
 *
 * @ORM\Table(name="dp_common_notes")
 * @ORM\Entity
 */
class DpCommonNotes
{
    /**
     * @var int
     *
     * @ORM\Column(name="note_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $noteId;

    /**
     * @var int
     *
     * @ORM\Column(name="note_author", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $noteAuthor;

    /**
     * @var int
     *
     * @ORM\Column(name="note_module", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $noteModule;

    /**
     * @var int
     *
     * @ORM\Column(name="note_record_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $noteRecordId;

    /**
     * @var int
     *
     * @ORM\Column(name="note_category", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $noteCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="note_title", type="string", length=100, nullable=false)
     */
    private $noteTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="note_body", type="text", length=65535, nullable=false)
     */
    private $noteBody;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="note_date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $noteDate = '0000-00-00 00:00:00';

    /**
     * @var float
     *
     * @ORM\Column(name="note_hours", type="float", precision=10, scale=0, nullable=false)
     */
    private $noteHours;

    /**
     * @var string
     *
     * @ORM\Column(name="note_code", type="string", length=8, nullable=false)
     */
    private $noteCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="note_created", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $noteCreated = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="note_modified", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $noteModified = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="note_modified_by", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $noteModifiedBy;

    public function getNoteId(): ?int
    {
        return $this->noteId;
    }

    public function getNoteAuthor(): ?int
    {
        return $this->noteAuthor;
    }

    public function setNoteAuthor(int $noteAuthor): self
    {
        $this->noteAuthor = $noteAuthor;

        return $this;
    }

    public function getNoteModule(): ?int
    {
        return $this->noteModule;
    }

    public function setNoteModule(int $noteModule): self
    {
        $this->noteModule = $noteModule;

        return $this;
    }

    public function getNoteRecordId(): ?int
    {
        return $this->noteRecordId;
    }

    public function setNoteRecordId(int $noteRecordId): self
    {
        $this->noteRecordId = $noteRecordId;

        return $this;
    }

    public function getNoteCategory(): ?int
    {
        return $this->noteCategory;
    }

    public function setNoteCategory(int $noteCategory): self
    {
        $this->noteCategory = $noteCategory;

        return $this;
    }

    public function getNoteTitle(): ?string
    {
        return $this->noteTitle;
    }

    public function setNoteTitle(string $noteTitle): self
    {
        $this->noteTitle = $noteTitle;

        return $this;
    }

    public function getNoteBody(): ?string
    {
        return $this->noteBody;
    }

    public function setNoteBody(string $noteBody): self
    {
        $this->noteBody = $noteBody;

        return $this;
    }

    public function getNoteDate(): ?\DateTimeInterface
    {
        return $this->noteDate;
    }

    public function setNoteDate(\DateTimeInterface $noteDate): self
    {
        $this->noteDate = $noteDate;

        return $this;
    }

    public function getNoteHours(): ?float
    {
        return $this->noteHours;
    }

    public function setNoteHours(float $noteHours): self
    {
        $this->noteHours = $noteHours;

        return $this;
    }

    public function getNoteCode(): ?string
    {
        return $this->noteCode;
    }

    public function setNoteCode(string $noteCode): self
    {
        $this->noteCode = $noteCode;

        return $this;
    }

    public function getNoteCreated(): ?\DateTimeInterface
    {
        return $this->noteCreated;
    }

    public function setNoteCreated(\DateTimeInterface $noteCreated): self
    {
        $this->noteCreated = $noteCreated;

        return $this;
    }

    public function getNoteModified(): ?\DateTimeInterface
    {
        return $this->noteModified;
    }

    public function setNoteModified(\DateTimeInterface $noteModified): self
    {
        $this->noteModified = $noteModified;

        return $this;
    }

    public function getNoteModifiedBy(): ?int
    {
        return $this->noteModifiedBy;
    }

    public function setNoteModifiedBy(int $noteModifiedBy): self
    {
        $this->noteModifiedBy = $noteModifiedBy;

        return $this;
    }


}
