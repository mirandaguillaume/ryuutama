<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 09/11/18
 * Time: 00:17.
 */

namespace App\Entity;

class Awakening implements Entity
{
    public const BATTLE_TYPE = 'battle';

    public const TRAVEL_TYPE = 'travel';

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $cost;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $type;

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
     * @return int
     */
    public function getCost(): int
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     */
    public function setCost(int $cost): void
    {
        $this->cost = $cost;
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
