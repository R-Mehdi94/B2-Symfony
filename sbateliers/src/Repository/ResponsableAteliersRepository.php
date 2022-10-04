<?php

namespace App\Repository;

use App\Entity\ResponsableAteliers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ResponsableAteliers>
 *
 * @method ResponsableAteliers|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResponsableAteliers|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResponsableAteliers[]    findAll()
 * @method ResponsableAteliers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponsableAteliersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResponsableAteliers::class);
    }

    public function add(ResponsableAteliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ResponsableAteliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ResponsableAteliers[] Returns an array of ResponsableAteliers objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ResponsableAteliers
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
