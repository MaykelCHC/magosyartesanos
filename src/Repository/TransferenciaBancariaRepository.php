<?php

namespace App\Repository;

use App\Entity\TransferenciaBancaria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TransferenciaBancaria|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransferenciaBancaria|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransferenciaBancaria[]    findAll()
 * @method TransferenciaBancaria[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransferenciaBancariaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransferenciaBancaria::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(TransferenciaBancaria $entity, bool $flush = true): void
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
    public function remove(TransferenciaBancaria $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return TransferenciaBancaria[] Returns an array of TransferenciaBancaria objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TransferenciaBancaria
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
