<?php

namespace App\Services;

class GetItemsService
{
    public function getItemsOrdered(string $model, string $field){
        return $model::orderBy($field, 'asc')->get();
    }

    public function getItemsWithChildren(string $model,string $relation,  string $field, ){
        return $model::with($relation)->orderBy($field, 'asc')->get();
    }
}
