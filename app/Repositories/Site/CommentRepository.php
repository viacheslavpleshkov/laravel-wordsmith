<?php

namespace App\Repositories\Site;

use App\Models\Comment as Model;

class CommentRepository implements RepositoryInterface
{
	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * BlogCommentRepository constructor.
	 */
	public function __construct()
	{
		$this->model = new Model();
	}

	/**
	 * @return Model[]|\Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}

	/**
	 * @param array $attributes
	 * @return mixed
	 */
	public function create(array $attributes)
	{
		return $this->model->create([
			'user_id' => $attributes['user_id'],
			'article_id' => $attributes['id'],
			'text' => $attributes['request']['text'],
			'status' => 1
		]);
	}
	/**
	 * @param $id
	 * @return mixed
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getCommentsAll($id)
	{
		$result = $this->model
			->where('status', 1)
			->where('article_id', $id)
			->orderBy('id', 'desc')
			->get();

		return $result;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getCountCommentsAll($id)
	{
		$columns = [
			'id',
			'article_id',
			'status'
		];

		$result = $this->model
			->select($columns)
			->where('status', 1)
			->where('article_id', $id)
			->count();

		return $result;
	}
}