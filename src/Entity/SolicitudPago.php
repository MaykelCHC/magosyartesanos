<?php

namespace App\Entity;

use App\Repository\SolicitudPagoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SolicitudPagoRepository::class)
 */
class SolicitudPago
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
    private $fechasolicitud;

    /**
     * @ORM\Column(type="float")
     */
    private $totalroyaltiesacumulados;

    /**
     * @ORM\Column(type="float")
     */
    private $royaltiesxpagar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $metododepago;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechasolicitud(): ?string
    {
        return $this->fechasolicitud;
    }

    public function setFechasolicitud(string $fechasolicitud): self
    {
        $this->fechasolicitud = $fechasolicitud;

        return $this;
    }

    public function getTotalroyaltiesacumulados(): ?float
    {
        return $this->totalroyaltiesacumulados;
    }

    public function setTotalroyaltiesacumulados(float $totalroyaltiesacumulados): self
    {
        $this->totalroyaltiesacumulados = $totalroyaltiesacumulados;

        return $this;
    }

    public function getRoyaltiesxpagar(): ?float
    {
        return $this->royaltiesxpagar;
    }

    public function setRoyaltiesxpagar(float $royaltiesxpagar): self
    {
        $this->royaltiesxpagar = $royaltiesxpagar;

        return $this;
    }

    public function getMetododepago(): ?string
    {
        return $this->metododepago;
    }

    public function setMetododepago(string $metododepago): self
    {
        $this->metododepago = $metododepago;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
