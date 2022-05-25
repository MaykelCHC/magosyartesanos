<?php

namespace App\Entity;

use App\Repository\SolicitarRecogidaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SolicitarRecogidaRepository::class)
 */
class SolicitarRecogida
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
     */
    private $nombreempresa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fecharecogida;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $horarecogida;

    /**
     * @ORM\Column(type="integer")
=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $hora;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $numeroenvio;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
     */
    private $estado;

=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="solicitarRecogidas")
     */
    private $usuarioid;

>>>>>>> Stashed changes
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< Updated upstream
    public function getNombreempresa(): ?string
    {
        return $this->nombreempresa;
    }

    public function setNombreempresa(string $nombreempresa): self
    {
        $this->nombreempresa = $nombreempresa;
=======
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getFecharecogida(): ?string
    {
        return $this->fecharecogida;
    }

    public function setFecharecogida(string $fecharecogida): self
    {
        $this->fecharecogida = $fecharecogida;
=======
    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getHorarecogida(): ?string
    {
        return $this->horarecogida;
    }

    public function setHorarecogida(string $horarecogida): self
    {
        $this->horarecogida = $horarecogida;
=======
    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(?\DateTimeInterface $hora): self
    {
        $this->hora = $hora;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getNumeroenvio(): ?int
=======
    public function getNumeroenvio(): ?string
>>>>>>> Stashed changes
    {
        return $this->numeroenvio;
    }

<<<<<<< Updated upstream
    public function setNumeroenvio(int $numeroenvio): self
=======
    public function setNumeroenvio(?string $numeroenvio): self
>>>>>>> Stashed changes
    {
        $this->numeroenvio = $numeroenvio;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

<<<<<<< Updated upstream
    public function setEstado(string $estado): self
=======
    public function setEstado(?string $estado): self
>>>>>>> Stashed changes
    {
        $this->estado = $estado;

        return $this;
    }
<<<<<<< Updated upstream
=======

    public function getUsuarioid(): ?User
    {
        return $this->usuarioid;
    }

    public function setUsuarioid(?User $usuarioid): self
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }
>>>>>>> Stashed changes
}
