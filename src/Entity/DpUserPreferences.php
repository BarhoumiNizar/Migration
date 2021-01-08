<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpUserPreferences
 *
 * @ORM\Table(name="dp_user_preferences", indexes={@ORM\Index(name="pref_user", columns={"pref_user", "pref_name"})})
 * @ORM\Entity
 */
class DpUserPreferences
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
     * @var string
     *
     * @ORM\Column(name="pref_user", type="string", length=12, nullable=false)
     */
    private $prefUser;

    /**
     * @var string
     *
     * @ORM\Column(name="pref_name", type="string", length=72, nullable=false)
     */
    private $prefName;

    /**
     * @var string
     *
     * @ORM\Column(name="pref_value", type="string", length=32, nullable=false)
     */
    private $prefValue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrefUser(): ?string
    {
        return $this->prefUser;
    }

    public function setPrefUser(string $prefUser): self
    {
        $this->prefUser = $prefUser;

        return $this;
    }

    public function getPrefName(): ?string
    {
        return $this->prefName;
    }

    public function setPrefName(string $prefName): self
    {
        $this->prefName = $prefName;

        return $this;
    }

    public function getPrefValue(): ?string
    {
        return $this->prefValue;
    }

    public function setPrefValue(string $prefValue): self
    {
        $this->prefValue = $prefValue;

        return $this;
    }


}
