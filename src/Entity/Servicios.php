<?php

namespace App\Entity;

use App\Repository\ServiciosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiciosRepository::class)
 */
class Servicios
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagenservicio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $beneficioxventa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipomoneda;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $iva;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $concepto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adjuntardocumentos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getImagenservicio(): ?string
    {
        return $this->imagenservicio;
    }

    public function setImagenservicio(string $imagenservicio): self
    {
        $this->imagenservicio = $imagenservicio;

        return $this;
    }

    public function getBeneficioxventa(): ?string
    {
        return $this->beneficioxventa;
    }

    public function setBeneficioxventa(string $beneficioxventa): self
    {
        $this->beneficioxventa = $beneficioxventa;

        return $this;
    }

    public function getTipomoneda(): ?string
    {
        return $this->tipomoneda;
    }

    public function setTipomoneda(string $tipomoneda): self
    {
        $this->tipomoneda = $tipomoneda;

        return $this;
    }

    public function getIva(): ?string
    {
        return $this->iva;
    }

    public function setIva(string $iva): self
    {
        $this->iva = $iva;

        return $this;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(string $concepto): self
    {
        $this->concepto = $concepto;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getAdjuntardocumentos(): ?string
    {
        return $this->adjuntardocumentos;
    }

    public function setAdjuntardocumentos(string $adjuntardocumentos): self
    {
        $this->adjuntardocumentos = $adjuntardocumentos;

        return $this;
    }
}
