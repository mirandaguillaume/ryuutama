<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 08/11/18
 * Time: 23:44.
 */

namespace App\Service\ORM;

use App\Entity\Entity;
use Doctrine\ORM\EntityManagerInterface;

abstract class BasicORMService
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $repository;

    /**
     * BasicORMService constructor.
     *
     * @param \Doctrine\ORM\EntityManagerInterface $entityManager
     * @param $resourceName
     */
    public function __construct(EntityManagerInterface $entityManager, $resourceName)
    {
        $this->repository = $entityManager->getRepository($resourceName);
    }

    /**
     * @param array $criterias
     *
     * @return null|object
     */
    public function findOneBy(array $criterias)
    {
        return $this->repository->findOneBy($criterias);
    }

    /**
     * @param array $criterias
     *
     * @return object[]
     */
    public function findBy(array $criterias): array
    {
        return $this->repository->findBy($criterias);
    }

    public function create(Entity $data): void
    {
        $this->repository->persist($data);
        $this->repository->flush();
    }

    public function update(Entity $data): void
    {
        $this->repository->merge($data);
        $this->repository->flush();
    }

    public function delete(Entity $data): void
    {
        $this->repository->remove($data);
        $this->repository->flush();
    }
}
