<?php

namespace App\Services\Backend;

use App\Repositories\EloquentPostRepository;
use Illuminate\Http\Request;

Class PostService
{
    /**
     * Post repository object
     *
     * @var object
     */
    private $postRepository;

    /**
     * Initialize variables/objects.
     *
     * @param EloquentPostRepository $postRepository
     */
    public function __construct(EloquentPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Get all posts in pagination
     *
     * @return Illuminate/Support/Collection
     */
    public function paginate($limit = 5)
    {
        return $this->postRepository->paginate($limit);
    }

    /**
     * Get all posts.
     *
     * @return Illuminate/Support/Collection
     */
    public function getAll()
    {
        return $this->postRepository->all();
    }

    /**
     * Get post by id.
     *
     * @param integer $id
     *
     * @return App/Repositories/PostRepository
     */
    public function getById($id)
    {
        return $this->postRepository->find($id);
    }

    /**
     * Get post by id.
     *
     * @param integer $id
     *
     * @return App/Repositories/PostRepository
     */
    public function find($id)
    {
        return $this->postRepository->find($id);
    }

    /**
     * Create a new post.
     *
     * @param array $attributes
     *
     * @return App/Repositories/PostRepository
     */
    public function create(array $attributes)
    {
        unset($attributes['_token']);
        $attributes['created_at'] = date('Y-m-d H:i:s');
        $attributes['updated_at'] = date('Y-m-d H:i:s');

        return $this->postRepository->create($attributes);
    }

    /**
     * Update a post.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return App/Repositories/PostRepository
     */
    public function update($id, array $attributes)
    {
        unset($attributes['_token']);
        unset($attributes['_method']);
        $attributes['created_at'] = date('Y-m-d H:i:s');
        $attributes['updated_at'] = date('Y-m-d H:i:s');

        return $this->postRepository->update($id, $attributes);
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
        return $this->postRepository->delete($id);
    }
}