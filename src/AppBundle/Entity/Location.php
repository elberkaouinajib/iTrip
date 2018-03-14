<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Location
 * @ApiResource
 * @ORM\Table(name="location")
 * @ORM\Entity
 */
class Location
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_location", type="string", length=255, nullable=true)
     */
    private $nomLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_location", type="text", length=65535, nullable=true)
     */
    private $descriptionLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
