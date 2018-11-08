<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 08/11/18
 * Time: 23:52
 */

namespace App\Entity;


class GamemasterCharacter implements Entity
{
    use CharacterBasic;

    const DRAGON_COLOR_BLUE = 'blue';
    const DRAGON_COLOR_YELLOW = 'yellow';
    const DRAGON_COLOR_GREEN = 'green';
    const DRAGON_COLOR_BLACK = 'black';

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $level;
}
