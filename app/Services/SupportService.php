<?php

namespace app\Services;

use App\DTO\CreateSupport;
use App\DTO\UpdateSupport;
use App\Repositories\Interfaces\SupportRepositoryInterface;
use \stdClass;

class SupportService
{

    public function __construct(protected SupportRepositoryInterface $repository){}

    public function create(CreateSupport $dto):stdClass
    {
        return $this->repository->create($dto);
    }

    public function update(UpdateSupport $dto):stdClass
    {
        return $this->repository->update($dto);
    }

    public function getAll($filter = null):array
    {
        return $this->repository->getAll($filter);
    }

    public function getOne(string $id):stdClass|null
    {
        return $this->repository->getOne($id);
    }

    public function delete(string $id):void
    {
        $this->repository->delete($id);
    }
}