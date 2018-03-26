<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Activite
 *@ApiResource(
 *     itemOperations={
 *     "find_utilisateurs_by_activite_get"={"route_name"="find_utilisateurs_by_activite_get"}
 *      }
 * )
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="location_activite", columns={"location_activite"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="location_activite", type="integer", nullable=false)
     */
    private $locationActivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_activite", type="text", length=65535, nullable=true)
     */
    private $descriptionActivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_activite", type="string", length=255, nullable=true)
     */
    private $nomActivite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_activite", type="datetime", nullable=true)
     */
    private $dateActivite;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getLocationActivite(): int
    {
        return $this->locationActivite;
    }

    /**
     * @param int $locationActivite
     */
    public function setLocationActivite(int $locationActivite)
    {
        $this->locationActivite = $locationActivite;
    }

    /**
     * @return null|string
     */
    public function getDescriptionActivite(): string
    {
        return $this->descriptionActivite;
    }

    /**
     * @param null|string $descriptionActivite
     */
    public function setDescriptionActivite(string $descriptionActivite)
    {
        $this->descriptionActivite = $descriptionActivite;
    }

    /**
     * @return null|string
     */
    public function getNomActivite(): string
    {
        return $this->nomActivite;
    }

    /**
     * @param null|string $nomActivite
     */
    public function setNomActivite(string $nomActivite)
    {
        $this->nomActivite = $nomActivite;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateActivite(): \DateTime
    {
        return $this->dateActivite;
    }

    /**
     * @param \DateTime|null $dateActivite
     */
    public function setDateActivite(\DateTime $dateActivite)
    {
        $this->dateActivite = $dateActivite;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }



}
