<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Commentaire
 * @ApiResource
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="voyage_Commentaire", columns={"voyage_Commentaire"}), @ORM\Index(name="utilisateur_Commentaire", columns={"utilisateur_Commentaire"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="voyage_Commentaire", type="integer", nullable=true)
     */
    private $voyageCommentaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur_Commentaire", type="integer", nullable=true)
     */
    private $utilisateurCommentaire;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_Commentaire", type="datetime", nullable=true)
     */
    private $dateCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_Commentaire", type="text", length=65535, nullable=true)
     */
    private $messageCommentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
