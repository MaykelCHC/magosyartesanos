<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
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
    private $imagenproducto;

    /**
     * @ORM\Column(type="integer")
     */
    private $beneficioxventa;

    /**
     * @ORM\Column(type="integer")
     */
    private $tipomoneda;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $iva;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $IDD;

    /**
     * @ORM\Column(type="integer")
     */
    private $Stock;

    /**
     * @ORM\ManyToMany(targetEntity=VentaProducto::class, mappedBy="producto")
     */
    private $ventaProductos;

    /**
     * @ORM\ManyToMany(targetEntity=AsignarProductoaUser::class, mappedBy="producto")
     */
    private $asignarProductoaUsers;

    public function __construct()
    {
        $this->ventaProductos = new ArrayCollection();
        $this->asignarProductoaUsers = new ArrayCollection();
    }

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

    public function getImagenproducto(): ?string
    {
        return $this->imagenproducto;
    }

    public function setImagenproducto(string $imagenproducto): self
    {
        $this->imagenproducto = $imagenproducto;

        return $this;
    }

    public function getBeneficioxventa(): ?int
    {
        return $this->beneficioxventa;
    }

    public function setBeneficioxventa(int $beneficioxventa): self
    {
        $this->beneficioxventa = $beneficioxventa;

        return $this;
    }

    public function getTipomoneda(): ?int
    {
        return $this->tipomoneda;
    }

    public function setTipomoneda(int $tipomoneda): self
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

    public function getIDD(): ?string
    {
        return $this->IDD;
    }

    public function setIDD(string $IDD): self
    {
        $this->IDD = $IDD;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(int $Stock): self
    {
        $this->Stock = $Stock;

        return $this;
    }

    /**
     * @return Collection<int, VentaProducto>
     */
    public function getVentaProductos(): Collection
    {
        return $this->ventaProductos;
    }

    public function addVentaProducto(VentaProducto $ventaProducto): self
    {
        if (!$this->ventaProductos->contains($ventaProducto)) {
            $this->ventaProductos[] = $ventaProducto;
            $ventaProducto->addProducto($this);
        }

        return $this;
    }

    public function removeVentaProducto(VentaProducto $ventaProducto): self
    {
        if ($this->ventaProductos->removeElement($ventaProducto)) {
            $ventaProducto->removeProducto($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, AsignarProductoaUser>
     */
    public function getAsignarProductoaUsers(): Collection
    {
        return $this->asignarProductoaUsers;
    }

    public function addAsignarProductoaUser(AsignarProductoaUser $asignarProductoaUser): self
    {
        if (!$this->asignarProductoaUsers->contains($asignarProductoaUser)) {
            $this->asignarProductoaUsers[] = $asignarProductoaUser;
            $asignarProductoaUser->addProducto($this);
        }

        return $this;
    }

    public function removeAsignarProductoaUser(AsignarProductoaUser $asignarProductoaUser): self
    {
        if ($this->asignarProductoaUsers->removeElement($asignarProductoaUser)) {
            $asignarProductoaUser->removeProducto($this);
        }

        return $this;
    }
}
