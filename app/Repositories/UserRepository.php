<?php

namespace App\Repositories;

use App\Models\User as Model;

class UserRepository implements RepositoryInterface
{
	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * UserRepository constructor.
	 * @param Model $model
	 */
	public function __construct(Model $model)
	{
		$this->model = $model;
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
	public function getCommentsList(){
		$columns = [
			'id',
			'name',
		];

		$result = $this->model
			->select($columns)
			->get();

		return $result;
	}

	public function getUserAdminAll($paginate)
	{
		$columns = [
			'id',
			'name',
			'email',
			'role_id',
		];

		$result = $this->model
			->select($columns)
			->orderBy('id', 'desc')
			->with('role:id,name')
			->paginate($paginate);

		return $result;
	}
}