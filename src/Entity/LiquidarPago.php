<?php

namespace App\Entity;

use App\Repository\LiquidarPagoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LiquidarPagoRepository::class)
 */
class LiquidarPago
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="liquidarPago")
     */
    private $usuario;

    public function __construct()
    {
        $this->usuario = new ArrayCollection();
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
            $usuario->setLiquidarPago($this);
        }

        return $this;
    }

    public function removeUsuario(User $usuario): self
    {
        if ($this->usuario->removeElement($usuario)) {
            // set the owning side to null (unless already changed)
            if ($usuario->getLiquidarPago() === $this) {
                $usuario->setLiquidarPago(null);
            }
        }

        return $this;
    }
}
