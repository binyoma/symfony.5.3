<?php

namespace App\Entity;

use App\Repository\SessionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionsRepository::class)
 */
class Sessions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sess_id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $sess_data;

    /**
     * @ORM\Column(type="integer")
     */
    private $sess_lifetime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSessId(): ?string
    {
        return $this->sess_id;
    }

    public function setSessId(string $sess_id): self
    {
        $this->sess_id = $sess_id;

        return $this;
    }

    public function getSessData(): ?string
    {
        return $this->sess_data;
    }

    public function setSessData(string $sess_data): self
    {
        $this->sess_data = $sess_data;

        return $this;
    }

    public function getSessLifetime(): ?int
    {
        return $this->sess_lifetime;
    }

    public function setSessLifetime(int $sess_lifetime): self
    {
        $this->sess_lifetime = $sess_lifetime;

        return $this;
    }
}
