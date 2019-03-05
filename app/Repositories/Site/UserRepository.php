<?php

namespace App\Repositories\Site;

use App\Models\User as Model;
use Illuminate\Support\Facades\Hash;

class UserRepository implements RepositoryInterface
{
	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * UserRepository constructor.
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
			'name' => $attributes['data']['name'],
			'email' => $attributes['data']['email'],
			'password' => Hash::make($attributes['data']['password']),
			'role_id' => $attributes['role']->id
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
}