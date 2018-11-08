<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 09/11/18
 * Time: 00:01
 */

namespace App\Entity;


class Artefact implements Entity
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \App\Entity\DragonColor
     */
    private $color;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return \App\Entity\DragonColor
     */
    public function getColor(): \App\Entity\DragonColor
    {
        return $this->color;
    }

    /**
     * @param \App\Entity\DragonColor $color
     */
    public function setColor(\App\Entity\DragonColor $color): void
    {
        $this->color = $color;
    }
}
