<?php

namespace App\Repository;

use App\Entity\VentaServicios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VentaServicios|null find($id, $lockMode = null, $lockVersion = null)
 * @method VentaServicios|null findOneBy(array $criteria, array $orderBy = null)
 * @method VentaServicios[]    findAll()
 * @method VentaServicios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentaServiciosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VentaServicios::class);
    }


    public function add(VentaServicios $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }


    public function remove(VentaServicios $entity, bool $flush = true): void
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
     * @return array
     */
    public function ultimos5registros(): array
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.id', 'DESC')
            ->getQuery()
            ->setMaxResults(10)
            ->getResult();
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
