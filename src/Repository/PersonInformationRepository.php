<?php

namespace App\Repository;

use App\Entity\PersonInformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PersonInformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonInformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonInformation[]    findAll()
 * @method PersonInformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonInformationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PersonInformation::class);
    }

//    /**
//     * @return PersonInformation[] Returns an array of PersonInformation objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PersonInformation
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
