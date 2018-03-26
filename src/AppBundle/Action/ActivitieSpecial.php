<?php
// api/src/Controller/BookSpecial.php

namespace AppBundle\Action;

use AppBundle\Entity\Activite;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivitieSpecial extends Controller
{
    /**
     * @Route("/activities/{id}/users",
     *     name="find_utilisateurs_by_activite_get",
     *     defaults={
     *          "_api_resource_class" = Activite::class,
     *          "_api_collection_operation_name" = "find_utilisateurs_by_activite_get"
     * })
     */
    public function findUtilisateursByActivite($id)
    {
        $rows = $this->getDoctrine()->getManager()
            ->createQuery(
                'SELECT u.username, u.id
                FROM AppBundle:Activite a
                INNER JOIN AppBundle:Activite_Agenda aa WITH aa.activiteActiviteAgenda = a.id
                INNER JOIN AppBundle:Utilisateur u WITH u.id = aa.utilisateurActiviteAgenda
                WHERE a.id = :id
                '
            )->setParameter('id', $id)
            ->getResult();

        return $rows;
    }
}