<?php

namespace App\Repository;

use App\Entity\VentaServicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VentaServicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method VentaServicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method VentaServicio[]    findAll()
 * @method VentaServicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentaServicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VentaServicio::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(VentaServicio $entity, bool $flush = true): void
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
    public function remove(VentaServicio $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Devuelve el total de venta por servicios registrados
     *
     * @return int
     */
    public function totalventav(): int
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
    //  * @return VentaServicio[] Returns an array of VentaServicio objects
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
    public function findOneBySomeField($value): ?VentaServicio
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
