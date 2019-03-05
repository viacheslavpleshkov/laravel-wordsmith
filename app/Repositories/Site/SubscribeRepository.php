<?php

namespace App\Repositories\Site;

use App\Models\Subscribe as Model;

class SubscribeRepository implements RepositoryInterface
{
	/**
	 * @var Model
	 */
	private $model;

	/**
	 * SubscribeRepository constructor.
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
	 * @param $attributes
	 * @return mixed
	 */
	public function create($attributes)
	{
		$result = $this->model->create(
			[
				'email' => $attributes['email'],
				'status' => 1
			]
		);

		return $result;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}
}