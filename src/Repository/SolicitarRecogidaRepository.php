<?php

namespace App\Repository;

use App\Entity\SolicitarRecogida;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SolicitarRecogida|null find($id, $lockMode = null, $lockVersion = null)
 * @method SolicitarRecogida|null findOneBy(array $criteria, array $orderBy = null)
 * @method SolicitarRecogida[]    findAll()
 * @method SolicitarRecogida[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SolicitarRecogidaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SolicitarRecogida::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(SolicitarRecogida $entity, bool $flush = true): void
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
    public function remove(SolicitarRecogida $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return SolicitarRecogida[] Returns an array of SolicitarRecogida objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SolicitarRecogida
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
