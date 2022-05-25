<?php

namespace App\Entity;

use App\Repository\VentaServiciosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VentaServiciosRepository::class)
 */
class VentaServicios
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $concepto;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $valor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $comisionRoyalties;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documento;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ventaServicios")
     */
    private $usuarioid;

    /**
     * @ORM\ManyToMany(targetEntity=Servicio::class, inversedBy="ventaServicios")
     */
    private $servicios;

    /**
     * @ORM\Column(type="text", length=255, nullable=true)
     */
    private $codigo;

    public function __construct()
    {
        $this->servicios = new ArrayCollection();
    }

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

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(?string $concepto): self
    {
        $this->concepto = $concepto;

        return $this;
    }

    public function getValor(): ?int
    {
        return $this->valor;
    }

    public function setValor(?int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getComisionRoyalties(): ?int
    {
        return $this->comisionRoyalties;
    }

    public function setComisionRoyalties(?int $comisionRoyalties): self
    {
        $this->comisionRoyalties = $comisionRoyalties;

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

    /**
     * @return Collection<int, Servicio>
     */
    public function getServicios(): Collection
    {
        return $this->servicios;
    }

    public function addServicio(Servicio $servicio): self
    {
        if (!$this->servicios->contains($servicio)) {
            $this->servicios[] = $servicio;
        }

        return $this;
    }

    public function removeServicio(Servicio $servicio): self
    {
        $this->servicios->removeElement($servicio);

        return $this;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(?string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }
}
