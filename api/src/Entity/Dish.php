<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A dish
 *
 * @ORM\Entity
 * @ApiResource
 */
class Dish
{
    /**
     * @var int The id of the dish
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The title of dish
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $title;

    /**
     * @var string The description of dish
     *
     * @ORM\Column(type="text", nullable=true)
     */
    public $description;

    /**
     * @var string The content of the dish - might be refactored later on the different table if needed
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $content;

    /**
     * @var int The price of the dish
     *
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Range(min=0, max=30000)
     */
    public $price;


    public function getId(): ?int
    {
        return $this->id;
    }
}
