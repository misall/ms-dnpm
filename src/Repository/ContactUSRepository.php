<?php

namespace App\Repository;

use App\Entity\ContactUS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContactUS|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactUS|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactUS[]    findAll()
 * @method ContactUS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactUSRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactUS::class);
    }

    // /**
    //  * @return ContactUS[] Returns an array of ContactUS objects
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
    public function findOneBySomeField($value): ?ContactUS
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
