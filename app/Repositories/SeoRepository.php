<?php

namespace App\Repositories;

use App\Models\Seo as Model;

class SeoRepository implements RepositoryInterface
{
	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * SeoRepository constructor.
	 */
	public function __construct()
	{
		$this->model = new Model;
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

	/**
	 * @return mixed
	 */
	public function getStatusAll()
	{
		$result = $this->model
			->where('status', 1)
			->get();

		return $result;
	}

	/**
	 * @param $paginate
	 * @return mixed
	 */
	public function getSeoAdminAll($paginate)
	{
		$columns = [
			'id',
			'title',
			'description',
			'keyword',
			'status',
		];

		$result = $this->model
			->select($columns)
			->orderBy('id', 'desc')
			->paginate($paginate);

		return $result;
	}
}