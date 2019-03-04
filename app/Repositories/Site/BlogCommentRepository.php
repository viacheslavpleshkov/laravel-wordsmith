<?php

namespace App\Repositories\Site;

use App\Models\BlogComment as Model;
use App\Repositories\RepositoryInterface;

class BlogCommentRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	private $model;

	/**
	 * EloquentTask constructor.
	 *
	 * @param App\Task $model
	 */
	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * Get task by id.
	 *
	 * @param integer $id
	 * @return App\Task
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}

	/**
	 * Create a new task.
	 *
	 * @param array $attributes
	 * @return App\Task
	 */
	public function create(array $attributes)
	{
		return $this->model->create($attributes);
	}

	/**
	 * Update a task.
	 *
	 * @param integer $id
	 * @param array $attributes
	 * @return App\Task
	 */
	public function update($id, array $attributes)
	{
		return $this->model->find($id)->update($attributes);
	}

	/**
	 * Delete a task.
	 *
	 * @param integer $id
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	public function getCommentsAll($id)
	{
		return $this->model->where(
			'status', 1
		)->where(
			'article_id', $id
		)->orderBy(
			'id', 'desc'
		)->get();
	}

	public function getCountCommentsAll($id)
	{
		return $this->model->select(
			'id', 'article_id', 'status'
		)->where(
			'status', 1
		)->where(
			'article_id', $id
		)->count();
	}
}