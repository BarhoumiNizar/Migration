<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpTaskDependencies
 *
 * @ORM\Table(name="dp_task_dependencies")
 * @ORM\Entity
 */
class DpTaskDependencies
{
    /**
     * @var int
     *
     * @ORM\Column(name="dependencies_task_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dependenciesTaskId;

    /**
     * @var int
     *
     * @ORM\Column(name="dependencies_req_task_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dependenciesReqTaskId;

    public function getDependenciesTaskId(): ?int
    {
        return $this->dependenciesTaskId;
    }

    public function getDependenciesReqTaskId(): ?int
    {
        return $this->dependenciesReqTaskId;
    }


}
