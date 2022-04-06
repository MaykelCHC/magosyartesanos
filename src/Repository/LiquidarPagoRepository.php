<?php

namespace App\Repository;

use App\Entity\LiquidarPago;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LiquidarPago|null find($id, $lockMode = null, $lockVersion = null)
 * @method LiquidarPago|null findOneBy(array $criteria, array $orderBy = null)
 * @method LiquidarPago[]    findAll()
 * @method LiquidarPago[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiquidarPagoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LiquidarPago::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(LiquidarPago $entity, bool $flush = true): void
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
    public function remove(LiquidarPago $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return LiquidarPago[] Returns an array of LiquidarPago objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LiquidarPago
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
