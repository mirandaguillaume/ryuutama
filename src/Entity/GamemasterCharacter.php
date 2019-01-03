<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 08/11/18
 * Time: 23:52.
 */

namespace App\Entity;

class GamemasterCharacter implements Entity
{
    use CharacterBasic;

    /**
     * @var \App\Entity\DragonColor
     */
    private $color;

    /**
     * @var int
     */
    private $level;

    /**
     * @var \App\Entity\Artefact
     */
    private $artefact;

    /**
     * @var string
     */
    private $inscription;

    /**
     * @var int
     */
    private $breath_points;

    /**
     * @var \App\Entity\DragonBreath[]
     */
    private $breaths;

    /**
     * @var Awakening[]
     */
    private $awakenings;

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

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return \App\Entity\Artefact
     */
    public function getArtefact(): \App\Entity\Artefact
    {
        return $this->artefact;
    }

    /**
     * @param \App\Entity\Artefact $artefact
     */
    public function setArtefact(\App\Entity\Artefact $artefact): void
    {
        $this->artefact = $artefact;
    }

    /**
     * @return string
     */
    public function getInscription(): string
    {
        return $this->inscription;
    }

    /**
     * @param string $inscription
     */
    public function setInscription(string $inscription): void
    {
        $this->inscription = $inscription;
    }

    /**
     * @return int
     */
    public function getBreathPoints(): int
    {
        return $this->breath_points;
    }

    /**
     * @param int $breath_points
     */
    public function setBreathPoints(int $breath_points): void
    {
        $this->breath_points = $breath_points;
    }

    /**
     * @return \App\Entity\DragonBreath[]
     */
    public function getBreaths(): array
    {
        return $this->breaths;
    }

    /**
     * @param \App\Entity\DragonBreath[] $breaths
     */
    public function setBreaths(array $breaths): void
    {
        $this->breaths = $breaths;
    }

    /**
     * @return \App\Entity\Awakening[]
     */
    public function getAwakenings(): array
    {
        return $this->awakenings;
    }

    /**
     * @param \App\Entity\Awakening[] $awakenings
     */
    public function setAwakenings(array $awakenings): void
    {
        $this->awakenings = $awakenings;
    }
}
