<?php

namespace App\Service;

use App\Entity\Entity;

class Hydrator
{
    public function __construct(private array $datas, private Entity $entity)
    {
        $this->setDatas($datas);
        $this->setEntity($entity);
    }

    public function hydrate(): array
    {
        foreach ($this->getDatas() as $data) {
            $user = $this->entity;

            foreach($data as $k => $v) {
                $setter = 'set' . ucfirst($k);
            $user->$setter($v);
            }
            
            $usersObject[] = $user;
        }

        return $usersObject;
    }

    /**
     * Get the value of datas
     */
    public function getDatas(): array
    {
        return $this->datas;
    }

    /**
     * Set the value of datas
     *
     * @return  self
     */
    public function setDatas(array $datas): self
    {
        $this->datas = $datas;

        return $this;
    }

    /**
     * Get the value of entity
     */
    public function getEntity(): Entity
    {
        return $this->entity;
    }

    /**
     * Set the value of entity
     *
     * @return  self
     */
    public function setEntity(Entity $entity): self
    {
        $this->entity = $entity;

        return $this;
    }
}
