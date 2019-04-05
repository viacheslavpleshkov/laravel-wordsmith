<?php

namespace App\Repositories;

use App\Models\Article as Model;

class ArticleRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	protected $model;

	/**
	 * ArticleRepository constructor.
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
	public function getArticlesAll($paginate)
	{
		$columns = [
			'id',
			'title',
			'url',
			'images',
			'category_id',
			'status',
			'created_at'
		];

		$result = $this->model
			->select($columns)
			->where('status', 1)
			->orderBy('id', 'desc')
			->with('category:id,name,url')
			->paginate($paginate);

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
			'title',
			'url',
			'category_id',
			'seo_id',
			'status',
			'views',
		];

		$result = $this->model
			->select($columns)
			->orderBy('id', 'desc')
			->with('category:id,name')
			->with('seo:id,title')
			->paginate($paginate);

		return $result;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getPreviousPost($id)
	{
		$columns = [
			'id',
			'title',
			'url',
			'status'
		];

		$result = $this->model
			->select($columns)
			->where('id', '<', $id)
			->orderBy('id', 'desc')
			->first();

		return $result;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getNextPost($id)
	{
		$columns = [
			'id',
			'title',
			'url',
			'status'
		];

		$result = $this->model
			->select($columns)
			->where('id', '>', $id)
			->orderBy('id')
			->first();

		return $result;
	}

	/**
	 * @param $url
	 * @return mixed
	 */
	public function getArticle($url)
	{
		$result = $this->model
			->where('status', 1)
			->where('url', $url)
			->first();

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function getPopularArticles()
	{
		$columns = [
			'id',
			'title',
			'url',
			'images',
			'status',
			'user_id',
			'created_at'
		];

		$result = $this->model
			->select($columns)
			->where('status', 1)
			->orderBy('views', 'desc')
			->limit(6)
			->with('user:id,name')
			->get();

		return $result;
	}

	/**
	 * @return mixed
	 */
	public function getSlideAll()
	{
		$columns = [
			'id',
			'title',
			'url',
			'images',
			'status',
			'category_id',
			'user_id',
			'created_at'
		];

		$result = $this->model
			->select($columns)
			->where('status', 1)
			->where('slide', 1)
			->with(['user:id:name', 'category:id,name,url'])
			->get();

		return $result;
	}

	/**
	 * @param $data
	 * @return mixed
	 */
	public function setView($data)
	{
		return $data->increment('views');
	}

	/**
	 * @param $search
	 * @param $paginate
	 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
	 */
	public function getSearch($search, $paginate)
	{
		$result = $this->model
			->search($search)
			->paginate($paginate);

		return $result;
	}

	/**
	 * @param $id
	 * @param $paginate
	 * @return mixed
	 */
	public function getCategoryId($id, $paginate)
	{
		$columns = [
			'id',
			'title',
			'url',
			'images',
			'category_id',
			'status',
			'created_at'
		];

		$result = $this->model
			->select($columns)
			->where('status', 1)
			->where('category_id', $id)
			->orderBy('id', 'desc')
			->with('category:id,name,url')
			->paginate($paginate);

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
	 * @return mixed
	 */
	public function getCommentsList(){
		$columns = [
			'id',
			'title',
			'status',
		];

		$result = $this->model
			->select($columns)
			->where('status', 1)
			->get();

		return $result;
	}
}