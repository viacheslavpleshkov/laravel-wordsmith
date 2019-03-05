<?php

namespace App\Repositories\Site;

use App\Models\Setting as Model;

class SettingRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	protected $model;

	/**
	 * SettingRepository constructor.
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
	public function getHome()
	{
		return $this->model->find(1);
	}

	public function getPaginateSite()
	{
		return $this->model->find(1)->paginate_site;
	}
}