<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpDpversion
 *
 * @ORM\Table(name="dp_dpversion")
 * @ORM\Entity
 */
class DpDpversion
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_version", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeVersion;

    /**
     * @var int
     *
     * @ORM\Column(name="db_version", type="integer", nullable=false)
     */
    private $dbVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_db_update", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $lastDbUpdate = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_code_update", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $lastCodeUpdate = '0000-00-00';

    public function getCodeVersion(): ?string
    {
        return $this->codeVersion;
    }

    public function getDbVersion(): ?int
    {
        return $this->dbVersion;
    }

    public function setDbVersion(int $dbVersion): self
    {
        $this->dbVersion = $dbVersion;

        return $this;
    }

    public function getLastDbUpdate(): ?\DateTimeInterface
    {
        return $this->lastDbUpdate;
    }

    public function setLastDbUpdate(\DateTimeInterface $lastDbUpdate): self
    {
        $this->lastDbUpdate = $lastDbUpdate;

        return $this;
    }

    public function getLastCodeUpdate(): ?\DateTimeInterface
    {
        return $this->lastCodeUpdate;
    }

    public function setLastCodeUpdate(\DateTimeInterface $lastCodeUpdate): self
    {
        $this->lastCodeUpdate = $lastCodeUpdate;

        return $this;
    }


}
