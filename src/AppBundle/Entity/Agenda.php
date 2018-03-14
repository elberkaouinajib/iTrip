<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Agenda
 * @ApiResource
 * @ORM\Table(name="agenda")
 * @ORM\Entity
 */
class Agenda
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut_agenda", type="datetime", nullable=true)
     */
    private $dateDebutAgenda;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_agenda", type="datetime", nullable=true)
     */
    private $dateFinAgenda;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
