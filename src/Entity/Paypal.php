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
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
     */
    private $cuentapaypal;
=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numerocuenta;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $usuarioid;
>>>>>>> Stashed changes

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< Updated upstream
    public function getCuentapaypal(): ?string
    {
        return $this->cuentapaypal;
    }

    public function setCuentapaypal(string $cuentapaypal): self
    {
        $this->cuentapaypal = $cuentapaypal;
=======
    public function getNumerocuenta(): ?string
    {
        return $this->numerocuenta;
    }

    public function setNumerocuenta(?string $numerocuenta): self
    {
        $this->numerocuenta = $numerocuenta;

        return $this;
    }

    public function getUsuarioid(): ?user
    {
        return $this->usuarioid;
    }

    public function setUsuarioid(?user $usuarioid): self
    {
        $this->usuarioid = $usuarioid;
>>>>>>> Stashed changes

        return $this;
    }
}
