<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 09/11/18
 * Time: 00:06.
 */

namespace App\Entity;

class ColoredBreath extends DragonBreath
{
    /**
     * @var \App\Entity\DragonColor
     */
    private $color;

    /**
     * @return \App\Entity\DragonColor
     */
    public function getColor(): DragonColor
    {
        return $this->color;
    }

    /**
     * @param \App\Entity\DragonColor $color
     */
    public function setColor(DragonColor $color): void
    {
        $this->color = $color;
    }
}
