<?php

namespace App\Repository;

use App\Entity\VentaProductos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @method VentaProductos|null find($id, $lockMode = null, $lockVersion = null)
 * @method VentaProductos|null findOneBy(array $criteria, array $orderBy = null)
 * @method VentaProductos[]    findAll()
 * @method VentaProductos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentaProductosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VentaProductos::class);
    }

    public function add(VentaProductos $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function remove(VentaProductos $entity, bool $flush = true): void
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

    /**
     * Devuelve la Fecha, IDD, y Nombre
     *
     * @param int $iduser
     * @return array
     */
    public function dadoIDusuarioobtenertodo(int $iduser): array
    {
        return $this->createQueryBuilder('pv')
            ->select('pv.fecha, pv.codigo, p.imagen, p.nombre, SUM(p.beneficioxventa) as beneficio')
            ->join('pv.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $iduser)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de ventas diarias
     *
     * @param int $iduser
     * @return int
     */
    public function ventasdiarias(int $iduser): int
    {
        $fecha = date('Y-m-d');

        return count($this->createQueryBuilder('vp')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->andWhere('vp.fecha = :ahora')
            ->setParameter('user_id', $iduser)
            ->setParameter('ahora', $fecha)
            ->getQuery()
            ->getResult());
    }

    /**
     * Devuelve el total de ventas semanales
     *
     * @param int $iduser
     * @return int
     */
    public function ventassemanales(int $iduser): int
    {
        $date_now = date('Y-m-d');
        $date_past = strtotime('-5 day', strtotime($date_now));
        $fecha = date('Y-m-d', $date_past);

        return count($this->createQueryBuilder('vp')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->andWhere('vp.fecha = :ahora')
            ->setParameter('user_id', $iduser)
            ->setParameter('ahora', $fecha)
            ->getQuery()
            ->getResult());
    }

    /**
     * Devuelve el total de ventas mensuales
     *
     * @param int $iduser
     * @return int
     */
    public function ventasmensuales(int $iduser): int
    {
        $mesactual = date("m");

        return count($this->createQueryBuilder('vp')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->andWhere('MONTH(vp.fecha) = :ahora')
            ->setParameter('user_id', $iduser)
            ->setParameter('ahora', $mesactual)
            ->getQuery()
            ->getResult());
    }

    /**
     * Devuelve los datos del filtrado
     *
     * @param int $iduser
     * @param DateTime $dateini
     * @param DateTime $datefin
     * @param string $orden
     * @param int $tamano
     * @return array
     */
    public function filtrardatos(int $iduser, DateTime $dateini, DateTime $datefin, string $orden, int $tamano): array
    {
        var_dump($dateini);
        die();
        var_dump($this->createQueryBuilder('vp')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->andWhere('vp.fecha BETWEEN : =ahora AND : =final ')
            ->setParameter('user_id', $iduser)
            ->setParameter('ahora', $dateini)
            ->setParameter('final', $datefin)
            ->orderBy($orden)
            ->getQuery()
            ->setMaxResults($tamano)
            ->getResult());
        die();
        return $this->createQueryBuilder('vp')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->andWhere('vp.fecha BETWEEN : =ahora AND : =final ')
            ->setParameter('user_id', $iduser)
            ->setParameter('ahora', $dateini)
            ->setParameter('final', $datefin)
            ->orderBy($orden)
            ->getQuery()
            ->setMaxResults($tamano)
            ->getResult();
    }

    /**
     * Devuelve el total acumulado de royal
     *
     * @param int $iduser
     * @return array
     */
    public function dadofechayuserobtenertotalacum(int $iduser): array
    {
        $fecha = date('Y-m-d');

        return $this->createQueryBuilder('vp')
            ->select('SUM(vp.royaltie)')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->andWhere('vp.fecha <= :ahora')
            ->setParameter('user_id', $iduser)
            ->setParameter('ahora', $fecha)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total acumulado de royal
     *
     * @param string $iduser
     * @return array
     */
    public function dadoproductoobteneruserroyal(string $iduser): array
    {
        return $this->createQueryBuilder('vp')
            ->select('u.nombre, p.beneficioxventa')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('p.id = :user_id')
            ->setParameter('user_id', $iduser)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total acumulado de royal
     *
     * @param string $iduser
     * @return int
     */
    public function dadoidobtenerpagoroyal(string $iduser): int
    {
        return $this->createQueryBuilder('vp')
            ->select('vp')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('p.id = :user_id')
            ->setParameter('user_id', $iduser)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de ventas mensuales
     *
     * @param int $iduser
     * @return array
     */
    public function obtenerroyalpagado(int $iduser): array
    {
        return $this->createQueryBuilder('vp')
            ->select('v')
            ->join('vp.listadoproducto', 'p')
            ->join('p.usuarioid', 'u')
            ->where('u.id = :user_id')
            ->andWhere('MONTH(vp.fecha) = :ahora')
            ->setParameter('user_id', $iduser)
            ->setParameter('ahora', $mesactual)
            ->getQuery()
            ->getResult();
    }


}
