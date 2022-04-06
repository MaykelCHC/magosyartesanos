<?php

namespace App\Entity;

use App\Repository\VentaServicioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VentaServicioRepository::class)
 */
class VentaServicio
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
    private $fechaventaserv;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="ventaServicio")
     */
    private $usuario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $concepto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $valor;

    /**
     * @ORM\Column(type="float")
     */
    private $royaltiescomision;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adjuntardocumento;

    public function __construct()
    {
        $this->usuario = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaventaserv(): ?string
    {
        return $this->fechaventaserv;
    }

    public function setFechaventaserv(string $fechaventaserv): self
    {
        $this->fechaventaserv = $fechaventaserv;

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
            $usuario->setVentaServicio($this);
        }

        return $this;
    }

    public function removeUsuario(User $usuario): self
    {
        if ($this->usuario->removeElement($usuario)) {
            // set the owning side to null (unless already changed)
            if ($usuario->getVentaServicio() === $this) {
                $usuario->setVentaServicio(null);
            }
        }

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

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(string $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getRoyaltiescomision(): ?float
    {
        return $this->royaltiescomision;
    }

    public function setRoyaltiescomision(float $royaltiescomision): self
    {
        $this->royaltiescomision = $royaltiescomision;

        return $this;
    }

    public function getAdjuntardocumento(): ?string
    {
        return $this->adjuntardocumento;
    }

    public function setAdjuntardocumento(string $adjuntardocumento): self
    {
        $this->adjuntardocumento = $adjuntardocumento;

        return $this;
    }
}
