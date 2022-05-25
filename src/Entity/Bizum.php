<?php

namespace App\Entity;

use App\Repository\BizumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BizumRepository::class)
 */
class Bizum
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
<<<<<<< Updated upstream
     * @ORM\Column(type="integer")
     */
    private $telefono;

=======
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telefono;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $usuarioid;

>>>>>>> Stashed changes
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

<<<<<<< Updated upstream
    public function setTelefono(int $telefono): self
=======
    public function setTelefono(?int $telefono): self
>>>>>>> Stashed changes
    {
        $this->telefono = $telefono;

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
