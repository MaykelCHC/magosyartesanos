<?php

namespace App\Entity;

use App\Repository\WesterUnionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WesterUnionRepository::class)
 */
class WesterUnion
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
    private $apellidopaterno;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apellidomaterno;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $correo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefono;

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

    public function getApellidopaterno(): ?string
    {
        return $this->apellidopaterno;
    }

    public function setApellidopaterno(string $apellidopaterno): self
    {
        $this->apellidopaterno = $apellidopaterno;

        return $this;
    }

    public function getApellidomaterno(): ?string
    {
        return $this->apellidomaterno;
    }

    public function setApellidomaterno(string $apellidomaterno): self
    {
        $this->apellidomaterno = $apellidomaterno;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }
}
