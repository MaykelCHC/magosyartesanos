<?php

namespace App\Repository;

use App\Entity\SolicitarPagoRoyalAcumuladoServicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SolicitarPagoRoyalAcumuladoServicio>
 *
 * @method SolicitarPagoRoyalAcumuladoServicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method SolicitarPagoRoyalAcumuladoServicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method SolicitarPagoRoyalAcumuladoServicio[]    findAll()
 * @method SolicitarPagoRoyalAcumuladoServicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SolicitarPagoRoyalAcumuladoServicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SolicitarPagoRoyalAcumuladoServicio::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(SolicitarPagoRoyalAcumuladoServicio $entity, bool $flush = true): void
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
    public function remove(SolicitarPagoRoyalAcumuladoServicio $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return SolicitarPagoRoyalAcumuladoServicio[] Returns an array of SolicitarPagoRoyalAcumuladoServicio objects
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
    public function findOneBySomeField($value): ?SolicitarPagoRoyalAcumuladoServicio
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
