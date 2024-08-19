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

    /**
     * Retrieve the list of urban planning authorization requests depends based on filters
     *
     * @param [type] $filters
     * @return array
     */
    public function getAuthorizationRequestsFilters($filter): array
    {
        $filters = json_decode($filter, true);
        $text = !empty($filters['text']) ? $filters['text'] : null;
        $date = !empty($filters['date']) ? $filters['date'] : null;

        $qb = $this->createQueryBuilder('a')
            ->select(['a.id', 'a.reference', 'a.dateDepot', 'a.dosDnmT', 'a.surfCc', 'a.nature', 'a.bieAdresse', 'a.bieCadT'])
            ->orderBy('a.dateDepot', 'DESC');

        if($text != NULL){
            $qb->andWhere('LOWER(a.reference) LIKE :text OR LOWER(a.dosDnmT) LIKE :text OR LOWER(a.nature) LIKE :text OR LOWER(a.bieAdresse) LIKE :text OR LOWER(a.bieCadT) LIKE :text')
                ->setParameter('text', '%'.strtolower($text).'%');
        }

        if ($date !== null) {
            $qb->andWhere('a.dateDepot = :date')
                ->setParameter('date', new \DateTime($date));
        }
        return $qb->getQuery()->getResult();
    }

}
