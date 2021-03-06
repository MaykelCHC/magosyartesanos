<?php

namespace App\Entity;

use App\Repository\TransferenciaBancariaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransferenciaBancariaRepository::class)
 */
class TransferenciaBancaria
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
    private $banco;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titular;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numerodcuenta;
=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombrebanco;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombretitular;

    /**
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
    public function getBanco(): ?string
    {
        return $this->banco;
    }

    public function setBanco(string $banco): self
    {
        $this->banco = $banco;
=======
    public function getNombrebanco(): ?string
    {
        return $this->nombrebanco;
    }

    public function setNombrebanco(?string $nombrebanco): self
    {
        $this->nombrebanco = $nombrebanco;

        return $this;
    }

    public function getNombretitular(): ?string
    {
        return $this->nombretitular;
    }

    public function setNombretitular(?string $nombretitular): self
    {
        $this->nombretitular = $nombretitular;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getTitular(): ?string
    {
        return $this->titular;
    }

    public function setTitular(string $titular): self
    {
        $this->titular = $titular;
=======
    public function getNumerocuenta(): ?string
    {
        return $this->numerocuenta;
    }

    public function setNumerocuenta(?string $numerocuenta): self
    {
        $this->numerocuenta = $numerocuenta;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getNumerodcuenta(): ?string
    {
        return $this->numerodcuenta;
    }

    public function setNumerodcuenta(string $numerodcuenta): self
    {
        $this->numerodcuenta = $numerodcuenta;
=======
    public function getUsuarioid(): ?User
    {
        return $this->usuarioid;
    }

    public function setUsuarioid(?User $usuarioid): self
    {
        $this->usuarioid = $usuarioid;
>>>>>>> Stashed changes

        return $this;
    }
}
