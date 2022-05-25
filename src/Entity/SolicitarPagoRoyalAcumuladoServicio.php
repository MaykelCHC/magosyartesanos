<?php

namespace App\Entity;

use App\Repository\SolicitarPagoRoyalAcumuladoServicioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SolicitarPagoRoyalAcumuladoServicioRepository::class)
 */
class SolicitarPagoRoyalAcumuladoServicio
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
    private $rayaltieacum;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $royaltiepagado;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $saldoroyaltie;

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

    public function getRayaltieacum(): ?float
    {
        return $this->rayaltieacum;
    }

    public function setRayaltieacum(?float $rayaltieacum): self
    {
        $this->rayaltieacum = $rayaltieacum;

        return $this;
    }

    public function getRoyaltiepagado(): ?float
    {
        return $this->royaltiepagado;
    }

    public function setRoyaltiepagado(?float $royaltiepagado): self
    {
        $this->royaltiepagado = $royaltiepagado;

        return $this;
    }

    public function getSaldoroyaltie(): ?float
    {
        return $this->saldoroyaltie;
    }

    public function setSaldoroyaltie(?float $saldoroyaltie): self
    {
        $this->saldoroyaltie = $saldoroyaltie;

        return $this;
    }
}
