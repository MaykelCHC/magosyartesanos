<?php

namespace App\Entity;

use App\Repository\VentaProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VentaProductoRepository::class)
 */
class VentaProducto
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
    private $fechadeventa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codigoventa;

    /**
     * @ORM\ManyToMany(targetEntity=Producto::class, inversedBy="ventaProductos")
     */
    private $producto;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="ventaProducto")
     */
    private $usuario;

    /**
     * @ORM\Column(type="float")
     */
    private $valorxventa;

    /**
     * @ORM\Column(type="integer")
     */
    private $royaltie;

    public function __construct()
    {
        $this->producto = new ArrayCollection();
        $this->usuario = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechadeventa(): ?string
    {
        return $this->fechadeventa;
    }

    public function setFechadeventa(string $fechadeventa): self
    {
        $this->fechadeventa = $fechadeventa;

        return $this;
    }

    public function getCodigoventa(): ?string
    {
        return $this->codigoventa;
    }

    public function setCodigoventa(string $codigoventa): self
    {
        $this->codigoventa = $codigoventa;

        return $this;
    }

    /**
     * @return Collection<int, Producto>
     */
    public function getProducto(): Collection
    {
        return $this->producto;
    }

    public function addProducto(Producto $producto): self
    {
        if (!$this->producto->contains($producto)) {
            $this->producto[] = $producto;
        }

        return $this;
    }

    public function removeProducto(Producto $producto): self
    {
        $this->producto->removeElement($producto);

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsuario(): Collection
    {
        return $this->usuario;
    }

    public function addUsuario(User $usuario): self
    {
        if (!$this->usuario->contains($usuario)) {
            $this->usuario[] = $usuario;
            $usuario->setVentaProducto($this);
        }

        return $this;
    }

    public function removeUsuario(User $usuario): self
    {
        if ($this->usuario->removeElement($usuario)) {
            // set the owning side to null (unless already changed)
            if ($usuario->getVentaProducto() === $this) {
                $usuario->setVentaProducto(null);
            }
        }

        return $this;
    }

    public function getValorxventa(): ?float
    {
        return $this->valorxventa;
    }

    public function setValorxventa(float $valorxventa): self
    {
        $this->valorxventa = $valorxventa;

        return $this;
    }

    public function getRoyaltie(): ?int
    {
        return $this->royaltie;
    }

    public function setRoyaltie(int $royaltie): self
    {
        $this->royaltie = $royaltie;

        return $this;
    }
}
