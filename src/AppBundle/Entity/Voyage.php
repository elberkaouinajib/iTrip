<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Voyage
 * @ApiResource
 * @ORM\Table(name="voyage", indexes={@ORM\Index(name="moneypot_voyage", columns={"moneypot_voyage"}), @ORM\Index(name="location_voyage", columns={"location_voyage"}), @ORM\Index(name="agenda_voyage", columns={"agenda_voyage"})})
 * @ORM\Entity
 */
class Voyage
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_voyage", type="string", length=255, nullable=true)
     */
    private $nomVoyage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descritpion_voyage", type="text", length=65535, nullable=true)
     */
    private $descritpionVoyage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="moneypot_voyage", type="integer", nullable=true)
     */
    private $moneypotVoyage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location_voyage", type="integer", nullable=true)
     */
    private $locationVoyage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isactif_voyage", type="boolean", nullable=true)
     */
    private $isactifVoyage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agenda_voyage", type="integer", nullable=true)
     */
    private $agendaVoyage;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
