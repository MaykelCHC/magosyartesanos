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
<<<<<<< Updated upstream
=======
 * @ORM\Table(name="`user`")
>>>>>>> Stashed changes
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
=======
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $apellidos;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
=======
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $empresa;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
     */
    private $nif;

    /**
     * @ORM\Column(type="string", length=255)
=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nifcif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $direccion;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
=======
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $poblacion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provincia;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
=======
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $pais;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="string", length=255)
=======
     * @ORM\Column(type="string", length=255, nullable=true)
>>>>>>> Stashed changes
     */
    private $telefono;

    /**
<<<<<<< Updated upstream
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
=======
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $emitirfactura;

    /**
     * @ORM\ManyToMany(targetEntity=Producto::class, mappedBy="usuarioid")
     */
    private $product;

    /**
     * @ORM\OneToMany(targetEntity=Servicio::class, mappedBy="usuarioid")
     */
    private $servicios;

    /**
     * @ORM\OneToMany(targetEntity=VentaServicios::class, mappedBy="usuarioid")
     */
    private $ventaServicios;

    /**
     * @ORM\OneToMany(targetEntity=SolicitarRecogida::class, mappedBy="usuarioid")
     */
    private $solicitarRecogidas;

    public function __construct()
    {
        $this->product = new ArrayCollection();
        $this->servicios = new ArrayCollection();
        $this->ventaServicios = new ArrayCollection();
        $this->solicitarRecogidas = new ArrayCollection();
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
    public function setNombre(string $nombre): self
=======
    public function setNombre(?string $nombre): self
>>>>>>> Stashed changes
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

<<<<<<< Updated upstream
    public function setApellidos(string $apellidos): self
=======
    public function setApellidos(?string $apellidos): self
>>>>>>> Stashed changes
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

<<<<<<< Updated upstream
    public function setEmpresa(string $empresa): self
=======
    public function setEmpresa(?string $empresa): self
>>>>>>> Stashed changes
    {
        $this->empresa = $empresa;

        return $this;
    }

<<<<<<< Updated upstream
    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(string $nif): self
    {
        $this->nif = $nif;
=======
    public function getNifcif(): ?string
    {
        return $this->nifcif;
    }

    public function setNifcif(?string $nifcif): self
    {
        $this->nifcif = $nifcif;
>>>>>>> Stashed changes

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

<<<<<<< Updated upstream
    public function setDireccion(string $direccion): self
=======
    public function setDireccion(?string $direccion): self
>>>>>>> Stashed changes
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getPoblacion(): ?string
    {
        return $this->poblacion;
    }

<<<<<<< Updated upstream
    public function setPoblacion(string $poblacion): self
=======
    public function setPoblacion(?string $poblacion): self
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
    public function setPais(string $pais): self
=======
    public function setPais(?string $pais): self
>>>>>>> Stashed changes
    {
        $this->pais = $pais;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

<<<<<<< Updated upstream
    public function setTelefono(string $telefono): self
=======
    public function setTelefono(?string $telefono): self
>>>>>>> Stashed changes
    {
        $this->telefono = $telefono;

        return $this;
    }

<<<<<<< Updated upstream
    public function getVentaProducto(): ?VentaProducto
    {
        return $this->ventaProducto;
    }

    public function setVentaProducto(?VentaProducto $ventaProducto): self
    {
        $this->ventaProducto = $ventaProducto;
=======
    public function getEmitirfactura(): ?bool
    {
        return $this->emitirfactura;
    }

    public function setEmitirfactura(?bool $emitirfactura): self
    {
        $this->emitirfactura = $emitirfactura;
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
    public function getVentaServicio(): ?VentaServicio
    {
        return $this->ventaServicio;
    }

    public function setVentaServicio(?VentaServicio $ventaServicio): self
    {
        $this->ventaServicio = $ventaServicio;
=======
    /**
     * @return Collection<int, Producto>
     */
    public function getProduct(): Collection
    {
        return $this->product;
    }

    public function addProduct(Producto $product): self
    {
        if (!$this->product->contains($product)) {
            $this->product[] = $product;
            $product->addUsuarioid($this);
        }
>>>>>>> Stashed changes

        return $this;
    }

<<<<<<< Updated upstream
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
=======
    public function removeProduct(Producto $product): self
    {
        if ($this->product->removeElement($product)) {
            $product->removeUsuarioid($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Servicio>
     */
    public function getServicios(): Collection
    {
        return $this->servicios;
    }

    public function addServicio(Servicio $servicio): self
    {
        if (!$this->servicios->contains($servicio)) {
            $this->servicios[] = $servicio;
            $servicio->setUsuarioid($this);
        }

        return $this;
    }

    public function removeServicio(Servicio $servicio): self
    {
        if ($this->servicios->removeElement($servicio)) {
            // set the owning side to null (unless already changed)
            if ($servicio->getUsuarioid() === $this) {
                $servicio->setUsuarioid(null);
            }
        }
>>>>>>> Stashed changes

        return $this;
    }

    /**
<<<<<<< Updated upstream
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
=======
     * @return Collection<int, VentaServicios>
     */
    public function getVentaServicios(): Collection
    {
        return $this->ventaServicios;
    }

    public function addVentaServicio(VentaServicios $ventaServicio): self
    {
        if (!$this->ventaServicios->contains($ventaServicio)) {
            $this->ventaServicios[] = $ventaServicio;
            $ventaServicio->setUsuarioid($this);
>>>>>>> Stashed changes
        }

        return $this;
    }

<<<<<<< Updated upstream
    public function removeAsignarProductoaUser(AsignarProductoaUser $asignarProductoaUser): self
    {
        if ($this->asignarProductoaUsers->removeElement($asignarProductoaUser)) {
            $asignarProductoaUser->removeUsuario($this);
=======
    public function removeVentaServicio(VentaServicios $ventaServicio): self
    {
        if ($this->ventaServicios->removeElement($ventaServicio)) {
            // set the owning side to null (unless already changed)
            if ($ventaServicio->getUsuarioid() === $this) {
                $ventaServicio->setUsuarioid(null);
            }
>>>>>>> Stashed changes
        }

        return $this;
    }

    /**
<<<<<<< Updated upstream
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
=======
     * @return Collection<int, SolicitarRecogida>
     */
    public function getSolicitarRecogidas(): Collection
    {
        return $this->solicitarRecogidas;
    }

    public function addSolicitarRecogida(SolicitarRecogida $solicitarRecogida): self
    {
        if (!$this->solicitarRecogidas->contains($solicitarRecogida)) {
            $this->solicitarRecogidas[] = $solicitarRecogida;
            $solicitarRecogida->setUsuarioid($this);
>>>>>>> Stashed changes
        }

        return $this;
    }

<<<<<<< Updated upstream
    public function removeAprobarSolicitudRecogida(AprobarSolicitudRecogida $aprobarSolicitudRecogida): self
    {
        if ($this->aprobarSolicitudRecogidas->removeElement($aprobarSolicitudRecogida)) {
            // set the owning side to null (unless already changed)
            if ($aprobarSolicitudRecogida->getUsuario() === $this) {
                $aprobarSolicitudRecogida->setUsuario(null);
=======
    public function removeSolicitarRecogida(SolicitarRecogida $solicitarRecogida): self
    {
        if ($this->solicitarRecogidas->removeElement($solicitarRecogida)) {
            // set the owning side to null (unless already changed)
            if ($solicitarRecogida->getUsuarioid() === $this) {
                $solicitarRecogida->setUsuarioid(null);
>>>>>>> Stashed changes
            }
        }

        return $this;
    }
<<<<<<< Updated upstream
=======

    public function __toString()
    {
        return $this->nombre;
    }


>>>>>>> Stashed changes
}
