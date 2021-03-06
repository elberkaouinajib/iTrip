<?php

namespace AppBundle\Repository;

/**
 * UtilisateurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UtilisateurRepository extends \Doctrine\ORM\EntityRepository
{

    public function findCreator($idVoyage){
        $rows = $this->getEntityManager()
            ->createQuery(
                'SELECT u.id as id, u.username as username
                FROM AppBundle:Utilisateur u
                INNER JOIN AppBundle:Utilisateur_Voyage uv
                    WITH uv.idUtilisateur = u.id
                WHERE uv.isCreator =1
                AND uv.idVoyage = :id 
                '
            )->setParameter('id', $idVoyage)
            ->getResult();
        return $rows;
    }

    

}
