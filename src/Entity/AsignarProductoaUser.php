<?php

namespace App\Entity;

use App\Repository\AsignarProductoaUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AsignarProductoaUserRepository::class)
 */
class AsignarProductoaUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="asignarProductoaUsers")
     */
    private $usuario;

    /**
     * @ORM\ManyToMany(targetEntity=Producto::class, inversedBy="asignarProductoaUsers")
     */
    private $producto;

    public function __construct()
    {
        $this->usuario = new ArrayCollection();
        $this->producto = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
        }

        return $this;
    }

    public function removeUsuario(User $usuario): self
    {
        $this->usuario->removeElement($usuario);

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
}
