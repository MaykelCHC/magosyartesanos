<?php

namespace App\Repository;

use App\Entity\Producto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
<<<<<<< Updated upstream
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
=======
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Producto>
 *
>>>>>>> Stashed changes
 * @method Producto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Producto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Producto[]    findAll()
 * @method Producto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Producto::class);
    }

    /**
<<<<<<< Updated upstream
     * @throws ORMException
     * @throws OptimisticLockException
=======
     * @param Producto $entity
     * @param bool $flush
>>>>>>> Stashed changes
     */
    public function add(Producto $entity, bool $flush = true): void
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
    public function remove(Producto $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @return int
     */
    public function totalproductos(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve los ultimos 5 registros de venta por servicios registrados
     *
<<<<<<< Updated upstream
     * @return Query
     */
    public function ultimos5registros(): Query
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->orderBy('u.id', 'DESC')
            ->getQuery()
            ->setMaxResults(10);
    }

    // /**
    //  * @return Producto[] Returns an array of Producto objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Producto
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
=======
     * @return array
     */
    public function ultimos5registros(): array
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.id', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los productos asignados dado un usuario
     *
     * @param int $userid
     * @return array
     */
    public function productosasignados(int $userid): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @param $userid
     * @return array
     */
    public function totalusd($userid): array
    {
        return $this->createQueryBuilder('p')
            ->select('SUM(p.beneficioxventa)')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere("p.tipodemoneda = 'dolar'")
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @param $userid
     * @return array
     */
    public function totaleuros($userid): array
    {
        return $this->createQueryBuilder('p')
            ->select('SUM(p.beneficioxventa)')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere("p.tipodemoneda = 'euro'")
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @param $productos
     * @return array
     */
    public function dadoproductoobteneriddnombre($productos): array
    {

        return $this->createQueryBuilder('p')
            ->select('p.nombre, p.idd')
            ->where('p.nombre IN(:var)')
            ->setParameter('var', $productos)
            ->getQuery()
            ->getResult();
    }

>>>>>>> Stashed changes
}
