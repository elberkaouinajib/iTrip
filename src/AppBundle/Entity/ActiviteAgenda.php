<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * ActiviteAgenda
 *@ApiResource
 * @ORM\Table(name="activite_agenda", indexes={@ORM\Index(name="activite_activite_agenda", columns={"activite_activite_agenda"}), @ORM\Index(name="utilisateur_activite_agenda", columns={"utilisateur_activite_agenda"}), @ORM\Index(name="agenda_activite_agenda", columns={"agenda_activite_agenda"})})
 * @ORM\Entity
 */
class ActiviteAgenda
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="activite_activite_agenda", type="integer", nullable=true)
     */
    private $activiteActiviteAgenda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur_activite_agenda", type="integer", nullable=true)
     */
    private $utilisateurActiviteAgenda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agenda_activite_agenda", type="integer", nullable=true)
     */
    private $agendaActiviteAgenda;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
