<?php

namespace App\Repository;

use App\Entity\AvisDepot;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<AvisDepot>
 */
class AvisDepotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvisDepot::class);
    }

    //TODO delete examples
    //    /**
    //     * @return AvisDepot[] Returns an array of AvisDepot objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AvisDepot
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    /**
     * Retrieve the list of urban planning authorization requests
     *
     * @return array
     */
    public function getAuthorizationRequests(): array
    {
        return $this->createQueryBuilder('a')
            ->select(['a.id', 'a.reference', 'a.dateDepot', 'a.dosDnmT', 'a.surfCc', 'a.nature', 'a.bieAdresse', 'a.bieCadT'])
            ->orderBy('a.dateDepot', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
}
