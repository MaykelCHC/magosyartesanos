<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
<<<<<<< Updated upstream
=======
 * @extends ServiceEntityRepository<User>
 *
>>>>>>> Stashed changes
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(User $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(User $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * Devuelve el total de usuarios registrados
     *
     * @return int
     */
    public function totalusers(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve el total de usuarios registrados
     *
<<<<<<< Updated upstream
=======
     * @param string $correo
>>>>>>> Stashed changes
     * @return array
     */
    public function nombreUsuarioporEmail(string $correo): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.nombre')
            ->andWhere('u.email =:val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult();
    }

<<<<<<< Updated upstream
=======
    /**
     * Devuelve un ID dado un Correo
     *
     * @param string $correo
     * @return int
     */
    public function obtenerIDdadoEmail(string $correo)
    {
        return $this->createQueryBuilder('u')
            ->select('u.id')
            ->andWhere('u.email = :val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve un Rol dado un Correo
     *
     * @param string $correo
     * @return array
     */
    public function obtenerRoldadoEmail(string $correo): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.roles')
            ->andWhere('u.email = :val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de usuarios registrados
     *
     * @param string $correo
     * @return int
     */
    public function cantidadUserporEmail(string $correo): int
    {

        return count($this->createQueryBuilder('u')
            ->andWhere('u.email =:val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult());
    }

    /**
     * Devuelve los usuarios asignados dado un producto
     *
     * @param string $producid
     * @return array
     */
    public function usuariosasignadosproduct(string $producid): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.nombre')
            ->join('u.product', 'p')
            ->where('p.nombre = :user_id')
            ->setParameter('user_id', $producid)
            ->getQuery()
            ->getResult();
    }
>>>>>>> Stashed changes


    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
