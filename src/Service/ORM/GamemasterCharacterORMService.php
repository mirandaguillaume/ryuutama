<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 08/11/18
 * Time: 23:51.
 */

namespace App\Service\ORM;

use App\Entity\GamemasterCharacter;

class GamemasterCharacterORMService extends BasicORMService
{
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, GamemasterCharacter::class);
    }
}
