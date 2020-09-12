<?php

namespace App\Repository;

use App\Entity\Officines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Officines|null find($id, $lockMode = null, $lockVersion = null)
 * @method Officines|null findOneBy(array $criteria, array $orderBy = null)
 * @method Officines[]    findAll()
 * @method Officines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfficinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Officines::class);
    }

    // /**
    //  * @return Officines[] Returns an array of Officines objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Officines
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
