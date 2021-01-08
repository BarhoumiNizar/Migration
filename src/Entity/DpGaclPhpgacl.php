<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpGaclPhpgacl
 *
 * @ORM\Table(name="dp_gacl_phpgacl")
 * @ORM\Entity
 */
class DpGaclPhpgacl
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=127, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=230, nullable=false)
     */
    private $value;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
