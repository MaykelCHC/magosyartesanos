<?php

namespace App\Entity;

use App\Repository\VentaProductosRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VentaProductosRepository::class)
 */
class VentaProductos
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
    private $codigo;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valordeVenta;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $royaltie;

    /**
     * @ORM\ManyToMany(targetEntity=Producto::class, inversedBy="ventaProductos")
     */
    private $listadoproducto;

    public function __construct()
    {
        $this->listadoproducto = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?DateTime
    {
        return $this->fecha;
    }

    public function setFecha(?DateTime $fecha): self
    {
        $this->fecha = $fecha;

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

    public function getValordeVenta(): ?float
    {
        return $this->valordeVenta;
    }

    public function setValordeVenta(?float $valordeVenta): self
    {
        $this->valordeVenta = $valordeVenta;

        return $this;
    }

    public function getRoyaltie(): ?int
    {
        return $this->royaltie;
    }

    public function setRoyaltie(?int $royaltie): self
    {
        $this->royaltie = $royaltie;

        return $this;
    }


    /**
     * @return Collection<int, Producto>
     */
    public function getListadoproducto(): Collection
    {
        return $this->listadoproducto;
    }

    public function addListadoproducto(Producto $listadoproducto): self
    {
        if (!$this->listadoproducto->contains($listadoproducto)) {
            $this->listadoproducto[] = $listadoproducto;
        }

        return $this;
    }

    public function removeListadoproducto(Producto $listadoproducto): self
    {
        $this->listadoproducto->removeElement($listadoproducto);

        return $this;
    }
}
