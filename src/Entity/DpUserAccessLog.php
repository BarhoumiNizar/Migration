<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpUserAccessLog
 *
 * @ORM\Table(name="dp_user_access_log")
 * @ORM\Entity
 */
class DpUserAccessLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_access_log_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userAccessLogId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ip", type="string", length=15, nullable=false)
     */
    private $userIp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_time_in", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateTimeIn = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_time_out", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateTimeOut = '0000-00-00 00:00:00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_time_last_action", type="datetime", nullable=true, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateTimeLastAction = '0000-00-00 00:00:00';

    public function getUserAccessLogId(): ?int
    {
        return $this->userAccessLogId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUserIp(): ?string
    {
        return $this->userIp;
    }

    public function setUserIp(string $userIp): self
    {
        $this->userIp = $userIp;

        return $this;
    }

    public function getDateTimeIn(): ?\DateTimeInterface
    {
        return $this->dateTimeIn;
    }

    public function setDateTimeIn(?\DateTimeInterface $dateTimeIn): self
    {
        $this->dateTimeIn = $dateTimeIn;

        return $this;
    }

    public function getDateTimeOut(): ?\DateTimeInterface
    {
        return $this->dateTimeOut;
    }

    public function setDateTimeOut(?\DateTimeInterface $dateTimeOut): self
    {
        $this->dateTimeOut = $dateTimeOut;

        return $this;
    }

    public function getDateTimeLastAction(): ?\DateTimeInterface
    {
        return $this->dateTimeLastAction;
    }

    public function setDateTimeLastAction(?\DateTimeInterface $dateTimeLastAction): self
    {
        $this->dateTimeLastAction = $dateTimeLastAction;

        return $this;
    }


}
