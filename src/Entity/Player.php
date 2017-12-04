<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tpBlanc_Player")
 * @UniqueEntity("name")
 */

class Player
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     * min = 4,
     * max = 15,
     * minMessage = "Your name must be at least {{ limit }} characters long",
     * maxMessage = "Your name cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @Assert\NotBlank()
     * @Assert\Choice(callback = {"ADC" , "JUNG", "TOP", "MID", "SUP"})
     * @ORM\Column(type="string")
     */
    private $role;
    /**
     * @ORM\Column(type="integer")
     */
    private $money;
    /**
     * @ORM\Column(type="integer")
     */
    private $experience;
    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $created_at;
    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRole()
    {
        return $this->roler;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function setMoney($money)
    {
        $this->money = $money;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }
}