<?php

namespace App\Entity;

use App\Repository\FormadePagoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormadePagoRepository::class)
 */
class FormadePago
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
    private $metodopago;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMetodopago(): ?string
    {
        return $this->metodopago;
    }

    public function setMetodopago(string $metodopago): self
    {
        $this->metodopago = $metodopago;

        return $this;
    }
}
