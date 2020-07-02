<?php

namespace App\Repository;

use App\Entity\Categoria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Categoria|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoria|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoria[]    findAll()
 * @method Categoria[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoria::class);
    }

    // /**
    //  * @return Categoria[] Returns an array of Categoria objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Categoria
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function ListadoCategoria($column, $tipo = "ASC", $pos, $cant = 10): array
    {
        $tbl = "c";
        $qb = $this->createQueryBuilder($tbl)
            ->OrderBy($tbl . "." . strtolower($column), $tipo)
            ->setFirstResult($pos)
            ->setMaxResults($cant);
        $query = $qb->getQuery();
        return $query->execute();
    }

    public function ListadoPaginacion($col, $tipo = "ASC", $pos, $cant = 10)
    {
        $tbl = "c";
        $qb = $this->createQueryBuilder($tbl)
            ->orderBy($tbl . "." . strtolower($col), $tipo)
            ->setFirstResult($pos)
            ->setMaxResults($cant);
        $query = $qb->getQuery();
        return $query->execute();
    }
    public function guardar(Categoria $categoria): Categoria
    {
        $entitymanager = $this->getEntityManager();
        $entitymanager->persist($categoria);
        $entitymanager->flush();
        return $categoria;
    }
    public function Delete(Categoria $categoria): Categoria
    {
        $em = $this->getEntityManager();
        $em->remove($categoria);
        $em->flush();

        return $categoria;
    }
}
