<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpContacts
 *
 * @ORM\Table(name="dp_contacts", indexes={@ORM\Index(name="idx_oby", columns={"contact_order_by"}), @ORM\Index(name="idx_co", columns={"contact_company"}), @ORM\Index(name="idx_prp", columns={"contact_project"})})
 * @ORM\Entity
 */
class DpContacts
{
    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_first_name", type="string", length=30, nullable=true)
     */
    private $contactFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_last_name", type="string", length=30, nullable=true)
     */
    private $contactLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_order_by", type="string", length=30, nullable=false)
     */
    private $contactOrderBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_title", type="string", length=50, nullable=true)
     */
    private $contactTitle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="contact_birthday", type="date", nullable=true)
     */
    private $contactBirthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_job", type="string", length=255, nullable=true)
     */
    private $contactJob;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_company", type="string", length=100, nullable=false)
     */
    private $contactCompany;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_department", type="text", length=255, nullable=true)
     */
    private $contactDepartment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_type", type="string", length=20, nullable=true)
     */
    private $contactType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_email", type="string", length=255, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_email2", type="string", length=255, nullable=true)
     */
    private $contactEmail2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_url", type="string", length=255, nullable=true)
     */
    private $contactUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_phone", type="string", length=30, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_phone2", type="string", length=30, nullable=true)
     */
    private $contactPhone2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_fax", type="string", length=30, nullable=true)
     */
    private $contactFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_mobile", type="string", length=30, nullable=true)
     */
    private $contactMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_address1", type="string", length=60, nullable=true)
     */
    private $contactAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_address2", type="string", length=60, nullable=true)
     */
    private $contactAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_city", type="string", length=30, nullable=true)
     */
    private $contactCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_state", type="string", length=30, nullable=true)
     */
    private $contactState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_zip", type="string", length=11, nullable=true)
     */
    private $contactZip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_country", type="string", length=30, nullable=true)
     */
    private $contactCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_jabber", type="string", length=255, nullable=true)
     */
    private $contactJabber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_icq", type="string", length=20, nullable=true)
     */
    private $contactIcq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_msn", type="string", length=255, nullable=true)
     */
    private $contactMsn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_yahoo", type="string", length=255, nullable=true)
     */
    private $contactYahoo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_aol", type="string", length=30, nullable=true)
     */
    private $contactAol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_notes", type="text", length=65535, nullable=true)
     */
    private $contactNotes;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_project", type="integer", nullable=false)
     */
    private $contactProject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_icon", type="string", length=20, nullable=true, options={"default"="obj/contact"})
     */
    private $contactIcon = 'obj/contact';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contact_owner", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $contactOwner;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="contact_private", type="boolean", nullable=true)
     */
    private $contactPrivate;

    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    public function getContactFirstName(): ?string
    {
        return $this->contactFirstName;
    }

    public function setContactFirstName(?string $contactFirstName): self
    {
        $this->contactFirstName = $contactFirstName;

        return $this;
    }

    public function getContactLastName(): ?string
    {
        return $this->contactLastName;
    }

    public function setContactLastName(?string $contactLastName): self
    {
        $this->contactLastName = $contactLastName;

        return $this;
    }

    public function getContactOrderBy(): ?string
    {
        return $this->contactOrderBy;
    }

    public function setContactOrderBy(string $contactOrderBy): self
    {
        $this->contactOrderBy = $contactOrderBy;

        return $this;
    }

    public function getContactTitle(): ?string
    {
        return $this->contactTitle;
    }

    public function setContactTitle(?string $contactTitle): self
    {
        $this->contactTitle = $contactTitle;

        return $this;
    }

    public function getContactBirthday(): ?\DateTimeInterface
    {
        return $this->contactBirthday;
    }

    public function setContactBirthday(?\DateTimeInterface $contactBirthday): self
    {
        $this->contactBirthday = $contactBirthday;

        return $this;
    }

    public function getContactJob(): ?string
    {
        return $this->contactJob;
    }

    public function setContactJob(?string $contactJob): self
    {
        $this->contactJob = $contactJob;

        return $this;
    }

    public function getContactCompany(): ?string
    {
        return $this->contactCompany;
    }

    public function setContactCompany(string $contactCompany): self
    {
        $this->contactCompany = $contactCompany;

        return $this;
    }

    public function getContactDepartment(): ?string
    {
        return $this->contactDepartment;
    }

    public function setContactDepartment(?string $contactDepartment): self
    {
        $this->contactDepartment = $contactDepartment;

        return $this;
    }

    public function getContactType(): ?string
    {
        return $this->contactType;
    }

    public function setContactType(?string $contactType): self
    {
        $this->contactType = $contactType;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getContactEmail2(): ?string
    {
        return $this->contactEmail2;
    }

    public function setContactEmail2(?string $contactEmail2): self
    {
        $this->contactEmail2 = $contactEmail2;

        return $this;
    }

    public function getContactUrl(): ?string
    {
        return $this->contactUrl;
    }

    public function setContactUrl(?string $contactUrl): self
    {
        $this->contactUrl = $contactUrl;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    public function getContactPhone2(): ?string
    {
        return $this->contactPhone2;
    }

    public function setContactPhone2(?string $contactPhone2): self
    {
        $this->contactPhone2 = $contactPhone2;

        return $this;
    }

    public function getContactFax(): ?string
    {
        return $this->contactFax;
    }

    public function setContactFax(?string $contactFax): self
    {
        $this->contactFax = $contactFax;

        return $this;
    }

    public function getContactMobile(): ?string
    {
        return $this->contactMobile;
    }

    public function setContactMobile(?string $contactMobile): self
    {
        $this->contactMobile = $contactMobile;

        return $this;
    }

    public function getContactAddress1(): ?string
    {
        return $this->contactAddress1;
    }

    public function setContactAddress1(?string $contactAddress1): self
    {
        $this->contactAddress1 = $contactAddress1;

        return $this;
    }

    public function getContactAddress2(): ?string
    {
        return $this->contactAddress2;
    }

    public function setContactAddress2(?string $contactAddress2): self
    {
        $this->contactAddress2 = $contactAddress2;

        return $this;
    }

    public function getContactCity(): ?string
    {
        return $this->contactCity;
    }

    public function setContactCity(?string $contactCity): self
    {
        $this->contactCity = $contactCity;

        return $this;
    }

    public function getContactState(): ?string
    {
        return $this->contactState;
    }

    public function setContactState(?string $contactState): self
    {
        $this->contactState = $contactState;

        return $this;
    }

    public function getContactZip(): ?string
    {
        return $this->contactZip;
    }

    public function setContactZip(?string $contactZip): self
    {
        $this->contactZip = $contactZip;

        return $this;
    }

    public function getContactCountry(): ?string
    {
        return $this->contactCountry;
    }

    public function setContactCountry(?string $contactCountry): self
    {
        $this->contactCountry = $contactCountry;

        return $this;
    }

    public function getContactJabber(): ?string
    {
        return $this->contactJabber;
    }

    public function setContactJabber(?string $contactJabber): self
    {
        $this->contactJabber = $contactJabber;

        return $this;
    }

    public function getContactIcq(): ?string
    {
        return $this->contactIcq;
    }

    public function setContactIcq(?string $contactIcq): self
    {
        $this->contactIcq = $contactIcq;

        return $this;
    }

    public function getContactMsn(): ?string
    {
        return $this->contactMsn;
    }

    public function setContactMsn(?string $contactMsn): self
    {
        $this->contactMsn = $contactMsn;

        return $this;
    }

    public function getContactYahoo(): ?string
    {
        return $this->contactYahoo;
    }

    public function setContactYahoo(?string $contactYahoo): self
    {
        $this->contactYahoo = $contactYahoo;

        return $this;
    }

    public function getContactAol(): ?string
    {
        return $this->contactAol;
    }

    public function setContactAol(?string $contactAol): self
    {
        $this->contactAol = $contactAol;

        return $this;
    }

    public function getContactNotes(): ?string
    {
        return $this->contactNotes;
    }

    public function setContactNotes(?string $contactNotes): self
    {
        $this->contactNotes = $contactNotes;

        return $this;
    }

    public function getContactProject(): ?int
    {
        return $this->contactProject;
    }

    public function setContactProject(int $contactProject): self
    {
        $this->contactProject = $contactProject;

        return $this;
    }

    public function getContactIcon(): ?string
    {
        return $this->contactIcon;
    }

    public function setContactIcon(?string $contactIcon): self
    {
        $this->contactIcon = $contactIcon;

        return $this;
    }

    public function getContactOwner(): ?int
    {
        return $this->contactOwner;
    }

    public function setContactOwner(?int $contactOwner): self
    {
        $this->contactOwner = $contactOwner;

        return $this;
    }

    public function getContactPrivate(): ?bool
    {
        return $this->contactPrivate;
    }

    public function setContactPrivate(?bool $contactPrivate): self
    {
        $this->contactPrivate = $contactPrivate;

        return $this;
    }


}
