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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBanco(): ?string
    {
        return $this->banco;
    }

    public function setBanco(string $banco): self
    {
        $this->banco = $banco;

        return $this;
    }

    public function getTitular(): ?string
    {
        return $this->titular;
    }

    public function setTitular(string $titular): self
    {
        $this->titular = $titular;

        return $this;
    }

    public function getNumerodcuenta(): ?string
    {
        return $this->numerodcuenta;
    }

    public function setNumerodcuenta(string $numerodcuenta): self
    {
        $this->numerodcuenta = $numerodcuenta;

        return $this;
    }
}
