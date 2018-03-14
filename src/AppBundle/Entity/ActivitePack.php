<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * ActivitePack
 * @ApiResource
 * @ORM\Table(name="activite_pack", indexes={@ORM\Index(name="pack_Activite_Pack", columns={"pack_Activite_Pack"}), @ORM\Index(name="activite_Activite_Pack", columns={"activite_Activite_Pack"})})
 * @ORM\Entity
 */
class ActivitePack
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="pack_Activite_Pack", type="integer", nullable=true)
     */
    private $packActivitePack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="activite_Activite_Pack", type="integer", nullable=true)
     */
    private $activiteActivitePack;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
