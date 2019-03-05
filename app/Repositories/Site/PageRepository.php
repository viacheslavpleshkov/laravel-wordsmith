<?php

namespace App\Repositories\Site;

use App\Models\Page as Model;

class PageRepository implements RepositoryInterface
{
	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * PageRepository constructor.
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
	public function getPageHome()
	{
		return $this->model->find(1);
	}

	/**
	 * @return mixed
	 */
	public function getPageBlog()
	{
		return $this->model->find(2);
	}

	/**
	 * @return mixed
	 */
	public function getPageAbout()
	{
		return $this->model->find(3);
	}

	/**
	 * @return mixed
	 */
	public function getPageContact()
	{
		return $this->model->find(4);
	}

	/**
	 * @return mixed
	 */
	public function getPagePrivacyPolicy()
	{
		return $this->model->find(5);
	}

	/**
	 * @return mixed
	 */
	public function getPageSearch()
	{
		return $this->model->find(6);
	}

}