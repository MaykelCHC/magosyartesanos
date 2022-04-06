<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $empresa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poblacion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pais;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefono;

    /**
     * @ORM\ManyToOne(targetEntity=VentaProducto::class, inversedBy="usuario")
     */
    private $ventaProducto;

    /**
     * @ORM\ManyToOne(targetEntity=VentaServicio::class, inversedBy="usuario")
     */
    private $ventaServicio;

    /**
     * @ORM\ManyToOne(targetEntity=LiquidarPago::class, inversedBy="usuario")
     */
    private $liquidarPago;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $emitefactura;

    /**
     * @ORM\ManyToMany(targetEntity=AsignarProductoaUser::class, mappedBy="usuario")
     */
    private $asignarProductoaUsers;

    /**
     * @ORM\OneToMany(targetEntity=AprobarSolicitudRecogida::class, mappedBy="usuario")
     */
    private $aprobarSolicitudRecogidas;

    public function __construct()
    {
        $this->asignarProductoaUsers = new ArrayCollection();
        $this->aprobarSolicitudRecogidas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string)$this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string)$this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

    public function setEmpresa(string $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(string $nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getPoblacion(): ?string
    {
        return $this->poblacion;
    }

    public function setPoblacion(string $poblacion): self
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

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

    public function getVentaProducto(): ?VentaProducto
    {
        return $this->ventaProducto;
    }

    public function setVentaProducto(?VentaProducto $ventaProducto): self
    {
        $this->ventaProducto = $ventaProducto;

        return $this;
    }

    public function getVentaServicio(): ?VentaServicio
    {
        return $this->ventaServicio;
    }

    public function setVentaServicio(?VentaServicio $ventaServicio): self
    {
        $this->ventaServicio = $ventaServicio;

        return $this;
    }

    public function getLiquidarPago(): ?LiquidarPago
    {
        return $this->liquidarPago;
    }

    public function setLiquidarPago(?LiquidarPago $liquidarPago): self
    {
        $this->liquidarPago = $liquidarPago;

        return $this;
    }

    public function getEmitefactura(): ?bool
    {
        return $this->emitefactura;
    }

    public function setEmitefactura(bool $emitefactura): self
    {
        $this->emitefactura = $emitefactura;

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
            $asignarProductoaUser->addUsuario($this);
        }

        return $this;
    }

    public function removeAsignarProductoaUser(AsignarProductoaUser $asignarProductoaUser): self
    {
        if ($this->asignarProductoaUsers->removeElement($asignarProductoaUser)) {
            $asignarProductoaUser->removeUsuario($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, AprobarSolicitudRecogida>
     */
    public function getAprobarSolicitudRecogidas(): Collection
    {
        return $this->aprobarSolicitudRecogidas;
    }

    public function addAprobarSolicitudRecogida(AprobarSolicitudRecogida $aprobarSolicitudRecogida): self
    {
        if (!$this->aprobarSolicitudRecogidas->contains($aprobarSolicitudRecogida)) {
            $this->aprobarSolicitudRecogidas[] = $aprobarSolicitudRecogida;
            $aprobarSolicitudRecogida->setUsuario($this);
        }

        return $this;
    }

    public function removeAprobarSolicitudRecogida(AprobarSolicitudRecogida $aprobarSolicitudRecogida): self
    {
        if ($this->aprobarSolicitudRecogidas->removeElement($aprobarSolicitudRecogida)) {
            // set the owning side to null (unless already changed)
            if ($aprobarSolicitudRecogida->getUsuario() === $this) {
                $aprobarSolicitudRecogida->setUsuario(null);
            }
        }

        return $this;
    }
}
