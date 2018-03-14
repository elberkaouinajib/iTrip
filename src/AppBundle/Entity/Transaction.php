<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Transaction
 * @ApiResource
 * @ORM\Table(name="transaction", indexes={@ORM\Index(name="moneypot_Transaction", columns={"moneypot_Transaction"}), @ORM\Index(name="utilisateur_Transaction", columns={"utilisateur_Transaction"})})
 * @ORM\Entity
 */
class Transaction
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="moneypot_Transaction", type="integer", nullable=true)
     */
    private $moneypotTransaction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur_Transaction", type="integer", nullable=true)
     */
    private $utilisateurTransaction;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_Transaction", type="datetime", nullable=true)
     */
    private $dateTransaction;

    /**
     * @var float|null
     *
     * @ORM\Column(name="valeur_Transaction", type="float", precision=10, scale=0, nullable=true)
     */
    private $valeurTransaction;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
