<?php

namespace App\Entity;

use App\Repository\PaypalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaypalRepository::class)
 */
class Paypal
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
    private $cuentapaypal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCuentapaypal(): ?string
    {
        return $this->cuentapaypal;
    }

    public function setCuentapaypal(string $cuentapaypal): self
    {
        $this->cuentapaypal = $cuentapaypal;

        return $this;
    }
}
