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
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
=======
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $nombre;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
     */
    private $imagenproducto;

    /**
     * @ORM\Column(type="integer")
=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $beneficioxventa;

    /**
<<<<<<< Updated upstream
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
=======
     * @ORM\Column(type="string", nullable=true)
     */
    private $tipodemoneda;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stock;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="product")
     */
    private $usuarioid;

    /**
     * @ORM\ManyToMany(targetEntity=VentaProductos::class, mappedBy="listadoproducto")
     */
    private $ventaProductos;

    public function __construct()
    {
        $this->usuarioid = new ArrayCollection();
        $this->ventaProductos = new ArrayCollection();
>>>>>>> Stashed changes
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

<<<<<<< Updated upstream
    public function setNombre(string $nombre): self
=======
    public function setNombre(?string $nombre): self
>>>>>>> Stashed changes
    {
        $this->nombre = $nombre;

        return $this;
    }

<<<<<<< Updated upstream
    public function getImagenproducto(): ?string
    {
        return $this->imagenproducto;
    }

    public function setImagenproducto(string $imagenproducto): self
    {
        $this->imagenproducto = $imagenproducto;
=======
    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getBeneficioxventa(): ?int
=======
    public function getBeneficioxventa(): ?string
>>>>>>> Stashed changes
    {
        return $this->beneficioxventa;
    }

<<<<<<< Updated upstream
    public function setBeneficioxventa(int $beneficioxventa): self
=======
    public function setBeneficioxventa(?string $beneficioxventa): self
>>>>>>> Stashed changes
    {
        $this->beneficioxventa = $beneficioxventa;

        return $this;
    }

<<<<<<< Updated upstream
    public function getTipomoneda(): ?int
    {
        return $this->tipomoneda;
    }

    public function setTipomoneda(int $tipomoneda): self
    {
        $this->tipomoneda = $tipomoneda;
=======
    public function getTipodemoneda(): ?string
    {
        return $this->tipodemoneda;
    }

    public function setTipodemoneda(?string $tipodemoneda): self
    {
        $this->tipodemoneda = $tipodemoneda;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getIva(): ?string
    {
        return $this->iva;
    }

    public function setIva(string $iva): self
    {
        $this->iva = $iva;
=======
    public function getIv(): ?string
    {
        return $this->iv;
    }

    public function setIv(?string $iv): self
    {
        $this->iv = $iv;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getIDD(): ?string
    {
        return $this->IDD;
    }

    public function setIDD(string $IDD): self
    {
        $this->IDD = $IDD;
=======
    public function getIdd(): ?string
    {
        return $this->idd;
    }

    public function setIdd(?string $idd): self
    {
        $this->idd = $idd;
>>>>>>> Stashed changes

        return $this;
    }

    public function getStock(): ?int
    {
<<<<<<< Updated upstream
        return $this->Stock;
    }

    public function setStock(int $Stock): self
    {
        $this->Stock = $Stock;
=======
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;
>>>>>>> Stashed changes

        return $this;
    }

    /**
<<<<<<< Updated upstream
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
=======
     * @return Collection<int, User> | null
     */
    public function getUsuarioid(): Collection
    {
        return $this->usuarioid;
    }

    public function addUsuarioid(User $usuarioid): self
    {
        if (!$this->usuarioid->contains($usuarioid)) {
            $this->usuarioid[] = $usuarioid;
>>>>>>> Stashed changes
        }

        return $this;
    }

<<<<<<< Updated upstream
    public function removeVentaProducto(VentaProducto $ventaProducto): self
    {
        if ($this->ventaProductos->removeElement($ventaProducto)) {
            $ventaProducto->removeProducto($this);
        }
=======
    public function removeUsuarioid(User $usuarioid): self
    {
        $this->usuarioid->removeElement($usuarioid);
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
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
=======
    public function __toString()
    {
        return $this->nombre;
    }

    /**
     * @return Collection<int, VentaProductos>
     */
    public function getVentaProductos(): Collection
    {
        return $this->ventaProductos;
    }

    public function addVentaProducto(VentaProductos $ventaProducto): self
    {
        if (!$this->ventaProductos->contains($ventaProducto)) {
            $this->ventaProductos[] = $ventaProducto;
            $ventaProducto->addListadoproducto($this);
>>>>>>> Stashed changes
        }

        return $this;
    }

<<<<<<< Updated upstream
    public function removeAsignarProductoaUser(AsignarProductoaUser $asignarProductoaUser): self
    {
        if ($this->asignarProductoaUsers->removeElement($asignarProductoaUser)) {
            $asignarProductoaUser->removeProducto($this);
=======
    public function removeVentaProducto(VentaProductos $ventaProducto): self
    {
        if ($this->ventaProductos->removeElement($ventaProducto)) {
            $ventaProducto->removeListadoproducto($this);
>>>>>>> Stashed changes
        }

        return $this;
    }
}
