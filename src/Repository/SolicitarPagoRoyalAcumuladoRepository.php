<?php

namespace App\Repository;

use App\Entity\SolicitarPagoRoyalAcumulado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SolicitarPagoRoyalAcumulado>
 *
 * @method SolicitarPagoRoyalAcumulado|null find($id, $lockMode = null, $lockVersion = null)
 * @method SolicitarPagoRoyalAcumulado|null findOneBy(array $criteria, array $orderBy = null)
 * @method SolicitarPagoRoyalAcumulado[]    findAll()
 * @method SolicitarPagoRoyalAcumulado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SolicitarPagoRoyalAcumuladoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SolicitarPagoRoyalAcumulado::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(SolicitarPagoRoyalAcumulado $entity, bool $flush = true): void
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
    public function remove(SolicitarPagoRoyalAcumulado $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }



    // /**
    //  * @return SolicitarPagoRoyalAcumulado[] Returns an array of SolicitarPagoRoyalAcumulado objects
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
    public function findOneBySomeField($value): ?SolicitarPagoRoyalAcumulado
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
