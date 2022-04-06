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
     */
    private $numeroenvio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreempresa(): ?string
    {
        return $this->nombreempresa;
    }

    public function setNombreempresa(string $nombreempresa): self
    {
        $this->nombreempresa = $nombreempresa;

        return $this;
    }

    public function getFecharecogida(): ?string
    {
        return $this->fecharecogida;
    }

    public function setFecharecogida(string $fecharecogida): self
    {
        $this->fecharecogida = $fecharecogida;

        return $this;
    }

    public function getHorarecogida(): ?string
    {
        return $this->horarecogida;
    }

    public function setHorarecogida(string $horarecogida): self
    {
        $this->horarecogida = $horarecogida;

        return $this;
    }

    public function getNumeroenvio(): ?int
    {
        return $this->numeroenvio;
    }

    public function setNumeroenvio(int $numeroenvio): self
    {
        $this->numeroenvio = $numeroenvio;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
