<?php

namespace App\Repositories\Interfaces;

use \stdClass;
use App\DTO\CreateSupport;
use App\DTO\UpdateSupport;

interface SupportRepositoryInterface
{   
    public function getAll(string $filter = null):array;
    public function getOne(string $id):stdClass|null;
    public function create(CreateSupport $dto): stdClass;
    public function update(UpdateSupport $dto):stdClass|null;
    public function delete(string $id):void;
}