<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    function getAll();

    function getById($id);

    function find($id);

    function create(array $attributes);

    function update($id, array $attributes);

    function delete($id);

    function paginate($limit);
}