<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 08/11/18
 * Time: 23:59
 */

namespace App\Entity;


class DragonColor implements Entity
{
    public const BLUE = 'blue';
    public const GREEN = 'green';
    public const BLACK = 'black';
    public const RED = 'red';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Artefact[]
     */
    private $artefacts;

    /**
     * @var ColoredBreath[]
     */
    private $breaths;

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
     * @return \App\Entity\Artefact[]
     */
    public function getArtefacts(): array
    {
        return $this->artefacts;
    }

    /**
     * @param \App\Entity\Artefact[] $artefacts
     */
    public function setArtefacts(array $artefacts): void
    {
        $this->artefacts = $artefacts;
    }

    /**
     * @return \App\Entity\ColoredBreath[]
     */
    public function getBreaths(): array
    {
        return $this->breaths;
    }

    /**
     * @param \App\Entity\ColoredBreath[] $breaths
     */
    public function setBreaths(array $breaths): void
    {
        $this->breaths = $breaths;
    }
}
