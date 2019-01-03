<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 08/11/18
 * Time: 23:53.
 */

namespace App\Entity;

trait CharacterBasic
{
    /**
     * @var string
     */
    private $characterName;

    /**
     * @var string
     */
    private $playerName;

    /**
     * @return string
     */
    public function getCharacterName(): string
    {
        return $this->characterName;
    }

    /**
     * @param string $characterName
     */
    public function setCharacterName(string $characterName): void
    {
        $this->characterName = $characterName;
    }

    /**
     * @return string
     */
    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    /**
     * @param string $playerName
     */
    public function setPlayerName(string $playerName): void
    {
        $this->playerName = $playerName;
    }
}
