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
     * @return Illuminate\Support\Collection
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
     * @return App\PostRepository
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get all posts.
     *
     * @return Illuminate\Database\Eloquent\Collection
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
     * @return App\PostRepository
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
     * @return App\PostRepository
     */
    public function create(array $attributes)
    {
        unset($attributes['_token']);
        $attributes['created_at'] = date('Y-m-d H:i:s');
        $attributes['updated_at'] = date('Y-m-d H:i:s');

        return $this->model->insert($attributes);
    }

    /**
     * Update a post.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return App\PostRepository
     */
    public function update($id, array $attributes)
    {
        unset($attributes['_token']);
        unset($attributes['_method']);
        $attributes['created_at'] = date('Y-m-d H:i:s');
        $attributes['updated_at'] = date('Y-m-d H:i:s');

        return $this->model->where('id', $id)->update($attributes);
    }

    /**
     * Delete a task.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}