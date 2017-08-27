<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;

class NormalPostRepository implements PostRepositoryInterface
{
    /**
     * @var $model
     */
    private $model;

    /**
     * NormalPost constructor.
     */
    public function __construct()
    {
        $this->model = DB::table('posts');
    }

    /**
     * Get all posts in pagination
     *
     * @return Illuminate/Support/Collection
     */
    public function paginate($limit = 5)
    {
        return $this->model->orderBy('id', 'desc')->paginate($limit);
    }

    /**
     * Get post by id.
     *
     * @param integer $id
     *
     * @return object
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get all posts.
     *
     * @return Illuminate/Database/Eloquent/Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Get post by id.
     *
     * @param integer $id
     *
     * @return object
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a new post.
     *
     * @param array $attributes
     *
     * @return boolean
     */
    public function create(array $attributes)
    {
        return $this->model->insert($attributes);
    }

    /**
     * Update a post.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return boolean
     */
    public function update($id, array $attributes)
    {
        return $this->model->where('id', $id)->update($attributes);
    }

    /**
     * Delete a post.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}