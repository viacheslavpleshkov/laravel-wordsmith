<?php

namespace App\Repositories;

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
		return $this->model->create($attributes);
	}

	/**
	 * @param $id
	 * @param $attributes
	 * @return mixed
	 */
	public function update($id, $attributes)
	{
		return $this->model->find($id)->update($attributes);
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