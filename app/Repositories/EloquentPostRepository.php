<?php

namespace App\Repositories;

use App\Models\Post;

class EloquentPostRepository implements PostRepositoryInterface
{
    /**
     * @var $model
     */
    private $model;

    /**
     * EloquentPost constructor.
     *
     * @param App/Post $model
     */
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    /**
     * Get all posts in pagination
     *
     * @return Illuminate/Database/Eloquent/Collection
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
     * @return boolean
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
        return $this->model->create($attributes);
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
        return $this->model->find($id)->update($attributes);
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