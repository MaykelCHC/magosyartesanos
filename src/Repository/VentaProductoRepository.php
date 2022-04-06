<?php

namespace App\Repository;

use App\Entity\VentaProducto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VentaProducto|null find($id, $lockMode = null, $lockVersion = null)
 * @method VentaProducto|null findOneBy(array $criteria, array $orderBy = null)
 * @method VentaProducto[]    findAll()
 * @method VentaProducto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentaProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VentaProducto::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(VentaProducto $entity, bool $flush = true): void
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
    public function remove(VentaProducto $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Devuelve el total de venta por productos registrados
     *
     * @return int
     */
    public function totalventap(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve los ultimos 5 registros de venta por servicios registrados
     *
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
    //  * @return VentaProducto[] Returns an array of VentaProducto objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VentaProducto
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
