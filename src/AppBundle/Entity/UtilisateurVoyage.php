<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * UtilisateurVoyage
 * @ApiResource
 * @ORM\Table(name="utilisateur_voyage", indexes={@ORM\Index(name="utilisateur_Utilisateur_Voyage", columns={"utilisateur_Utilisateur_Voyage"}), @ORM\Index(name="voyage_Utilisateur_Voyage", columns={"voyage_Utilisateur_Voyage"})})
 * @ORM\Entity
 */
class UtilisateurVoyage
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur_Utilisateur_Voyage", type="integer", nullable=true)
     */
    private $utilisateurUtilisateurVoyage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="voyage_Utilisateur_Voyage", type="integer", nullable=true)
     */
    private $voyageUtilisateurVoyage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="iscreator", type="boolean", nullable=true)
     */
    private $iscreator;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
