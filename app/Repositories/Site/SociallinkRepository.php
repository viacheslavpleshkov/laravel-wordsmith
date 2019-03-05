<?php

namespace App\Repositories\Site;

use App\Models\Sociallink as Model;

class SociallinkRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	protected $model;

	/**
	 * SociallinkRepository constructor.
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
	 * @param $id
	 * @return mixed
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	/**
	 * @return mixed
	 */
	public function getStatusAll()
	{
		return $this->model->where('status', 1)->get();
	}
}