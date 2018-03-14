<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Notation
 * @ApiResource
 * @ORM\Table(name="notation", indexes={@ORM\Index(name="pack_Notation", columns={"pack_Notation"}), @ORM\Index(name="utilisateur_Notation", columns={"utilisateur_Notation"})})
 * @ORM\Entity
 */
class Notation
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur_Notation", type="integer", nullable=true)
     */
    private $utilisateurNotation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pack_Notation", type="integer", nullable=true)
     */
    private $packNotation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_Notation", type="datetime", nullable=true)
     */
    private $dateNotation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="note_Notation", type="integer", nullable=true)
     */
    private $noteNotation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_Notation", type="text", length=65535, nullable=true)
     */
    private $commentaireNotation;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
