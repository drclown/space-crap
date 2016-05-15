<?php

namespace Homesoft\MediaBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * FileRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FileRepository extends EntityRepository {

    public function findAllWithoutMediaByIdExternalDisk($id) {

        $qb = $this->createQueryBuilder('f');

        $qb
            ->innerJoin('f.externalDisk', 'e_d')
            ->leftJoin("f.media", "m")
            ->addSelect('e_d')
            ->addSelect('f')
            ->where('e_d.id = :id')
            ->andWhere("m.id is null")
            ->setParameter('id', $id)
            ->orderBy('f.name')
        ;

        return $qb
            ->getQuery()
            ->getArrayResult()
        ;
    }
}