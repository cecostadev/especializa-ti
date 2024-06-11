<?php

namespace App\Repositories;

use App\Models\Support;
use App\Repositories\Interfaces\SupportRepositoryInterface;
use App\DTO\CreateSupport;
use App\DTO\UpdateSupport;
use \stdClass;

class SupportRepository implements SupportRepositoryInterface
{
    public function __construct(protected Support $model){}

    public function getAll(string $filter = null): array
    {
        return $this->model->where(function($query) use ($filter) {
            if($filter) {
                $query->where('subject', $filter);
                $query->orWhere('body', 'like', "%$filter%");
            }
        })
        ->paginate()
        ->toArray();
    }

    public function getOne(string $id):stdClass|null
    {
        $support = $this->model->find($id);

        if(!$support) return null;

        return (object) $support->toArray();
    }

    public function delete(string $id):void
    {
        $this->model->findOrFail($id)->delete();
    }

    public function create(CreateSupport $dto):stdClass
    {
        $support = $this->model->create(
            (array) $dto
        );

        return (object) $support->toArray();
    }

    public function update(UpdateSupport $dto):stdClass|null
    {
        if(!$support = $this->model->find($dto->id)) {
            return null;
        }

        $support->update((array) $dto);

        return (object) $support->toArray();
    }
    
}