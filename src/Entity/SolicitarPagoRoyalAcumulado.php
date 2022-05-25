<?php

namespace App\Entity;

use App\Repository\SolicitarPagoRoyalAcumuladoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SolicitarPagoRoyalAcumuladoRepository::class)
 */
class SolicitarPagoRoyalAcumulado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $royaltiespagar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $metododepago;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getRoyaltiespagar(): ?float
    {
        return $this->royaltiespagar;
    }

    public function setRoyaltiespagar(?float $royaltiespagar): self
    {
        $this->royaltiespagar = $royaltiespagar;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getMetododepago(): ?string
    {
        return $this->metododepago;
    }

    public function setMetododepago(?string $metododepago): self
    {
        $this->metododepago = $metododepago;

        return $this;
    }
}
