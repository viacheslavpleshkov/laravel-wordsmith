<?php

namespace App\Repositories\Site;

use App\Models\BlogCategory as Model;

class BlogCategoryRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	protected $model;

	/**
	 * BlogCategoryRepository constructor.
	 */
	public function __construct()
	{
		$this->model = new Model();
	}

	/**
	 * @return Model[]|\Illuminate\Database\Eloquent\Collection]
	 *
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
		$result =  $this->model
			->where('status', 1)
			->get();

		return $result;
	}

	public function getCategoryUrl($url)
	{
		$result = $this->model
			->where('status', 1)
			->where('url', $url)
			->first();

		return $result;
	}
}