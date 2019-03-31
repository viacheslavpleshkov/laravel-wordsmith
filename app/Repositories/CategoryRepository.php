<?php

namespace App\Repositories;

use App\Models\Category as Model;

class CategoryRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	protected $model;

	/**
	 * CategoryRepository constructor.
	 */
	public function __construct()
	{
		$this->model = new Model;
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

	public function getCategoryUrl($url)
	{
		$result = $this->model
			->where('status', 1)
			->where('url', $url)
			->first();

		return $result;
	}

	/**
	 * @param $limit
	 * @return mixed
	 */
	public function getStatusAndDesckAndLimit($limit)
	{
		$result = $this->model
			->where('status', 1)
			->orderBy('id', 'desc')
			->limit($limit)
			->get();

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function getStatusAndDesckAndFirst()
	{
		$result = $this->model
			->where('status', 1)
			->orderBy('id', 'desc')
			->first();

		return $result;
	}

	/**
	 * @param $paginate
	 * @return mixed
	 */
	public function getArticlesAdminAll($paginate)
	{
		$columns = [
			'id',
			'name',
			'url',
			'seo_id',
			'status',
		];

		$result = $this->model
			->select($columns)
			->where('status', 1)
			->orderBy('id', 'desc')
			->with('seo:id,title')
			->paginate($paginate);

		return $result;
	}
}