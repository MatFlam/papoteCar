<?php

namespace App\Repository;

use App\Entity\Alert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Alert|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alert|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alert[]    findAll()
 * @method Alert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlertRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Alert::class);
    }

    public function findAlerts($startCity, $endCity, $startDate)
    {
        $qb = $this->createQueryBuilder('a');
        $qb->andWhere("a.startCity = :startCity");
        $qb->setParameter('startCity', $startCity);
        $qb->andWhere("a.endCity = :endCity");
        $qb->setParameter('endCity', $endCity);
/*        $qb->andWhere("a.startdate LIKE :startdate");
        $qb->setParameter('startdate', '%'.toDate($startDate.'%'));*/
        $query = $qb->getQuery();

        return $results = $query->getResult();

    }

//    /**
//     * @return Alert[] Returns an array of Alert objects
//     */
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
    public function findOneBySomeField($value): ?Alert
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
