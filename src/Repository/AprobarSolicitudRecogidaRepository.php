<?php

namespace App\Repository;

use App\Entity\AprobarSolicitudRecogida;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AprobarSolicitudRecogida|null find($id, $lockMode = null, $lockVersion = null)
 * @method AprobarSolicitudRecogida|null findOneBy(array $criteria, array $orderBy = null)
 * @method AprobarSolicitudRecogida[]    findAll()
 * @method AprobarSolicitudRecogida[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AprobarSolicitudRecogidaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AprobarSolicitudRecogida::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(AprobarSolicitudRecogida $entity, bool $flush = true): void
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
    public function remove(AprobarSolicitudRecogida $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return AprobarSolicitudRecogida[] Returns an array of AprobarSolicitudRecogida objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AprobarSolicitudRecogida
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
