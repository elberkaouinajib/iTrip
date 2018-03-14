<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Pack
 * @ApiResource
 * @ORM\Table(name="pack", indexes={@ORM\Index(name="location_Pack", columns={"location_Pack"}), @ORM\Index(name="partenaire_Pack", columns={"partenaire_Pack"})})
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="location_Pack", type="integer", nullable=true)
     */
    private $locationPack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="partenaire_Pack", type="integer", nullable=true)
     */
    private $partenairePack;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateDebut_Pack", type="date", nullable=true)
     */
    private $datedebutPack;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFin_Pack", type="date", nullable=true)
     */
    private $datefinPack;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_Pack", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixPack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombrePerson_Pack", type="integer", nullable=true)
     */
    private $nombrepersonPack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nom_Pack", type="integer", nullable=true)
     */
    private $nomPack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien_Pack", type="string", length=255, nullable=true)
     */
    private $lienPack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_Pack", type="text", length=65535, nullable=true)
     */
    private $descriptionPack;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
