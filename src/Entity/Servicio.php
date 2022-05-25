<?php

namespace App\Entity;

use App\Repository\ServicioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicioRepository::class)
 */
class Servicio
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $beneficioxventa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tipodmoneda;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $concepto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documento;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="servicios")
     */
    private $usuarioid;

    /**
     * @ORM\ManyToMany(targetEntity=VentaServicios::class, mappedBy="servicios")
     */
    private $ventaServicios;

    public function __construct()
    {
        $this->ventaServicios = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getBeneficioxventa(): ?int
    {
        return $this->beneficioxventa;
    }

    public function setBeneficioxventa(?int $beneficioxventa): self
    {
        $this->beneficioxventa = $beneficioxventa;

        return $this;
    }

    public function getTipodmoneda(): ?string
    {
        return $this->tipodmoneda;
    }

    public function setTipodmoneda(?string $tipodmoneda): self
    {
        $this->tipodmoneda = $tipodmoneda;

        return $this;
    }

    public function getIv(): ?string
    {
        return $this->iv;
    }

    public function setIv(?string $iv): self
    {
        $this->iv = $iv;

        return $this;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(?string $concepto): self
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

    public function getDocumento(): ?string
    {
        return $this->documento;
    }

    public function setDocumento(?string $documento): self
    {
        $this->documento = $documento;

        return $this;
    }

    public function getUsuarioid(): ?User
    {
        return $this->usuarioid;
    }

    public function setUsuarioid(?User $usuarioid): self
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    public function __toString()
    {
        return $this->nombre;
    }

    /**
     * @return Collection<int, VentaServicios>
     */
    public function getVentaServicios(): Collection
    {
        return $this->ventaServicios;
    }

    public function addVentaServicio(VentaServicios $ventaServicio): self
    {
        if (!$this->ventaServicios->contains($ventaServicio)) {
            $this->ventaServicios[] = $ventaServicio;
            $ventaServicio->addServicio($this);
        }

        return $this;
    }

    public function removeVentaServicio(VentaServicios $ventaServicio): self
    {
        if ($this->ventaServicios->removeElement($ventaServicio)) {
            $ventaServicio->removeServicio($this);
        }

        return $this;
    }


}
