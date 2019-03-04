<?php

namespace App\Repositories\Site;

use App\Models\BlogArticle as Model;
use App\Models\Seo;
use App\Models\Setting;
use App\Repositories\RepositoryInterface;

class BlogArticleRepository implements RepositoryInterface
{
	/**
	 * @var $model
	 */
	private $model;
	/**
	 * @var
	 */
	private $seo;
	/**
	 * @var
	 */
	private $setting;

	/**
	 * EloquentTask constructor.
	 *
	 * @param App\Task $model
	 */
	public function __construct(Model $model, Seo $seo, Setting $setting)
	{
		$this->model = $model;
		$this->seo = $seo;
		$this->setting = $setting;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * Get task by id.
	 *
	 * @param integer $id
	 * @return App\Task
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}

	/**
	 * Create a new task.
	 *
	 * @param array $attributes
	 * @return App\Task
	 */
	public function create(array $attributes)
	{
		return $this->model->create($attributes);
	}

	/**
	 * Update a task.
	 *
	 * @param integer $id
	 * @param array $attributes
	 * @return App\Task
	 */
	public function update($id, array $attributes)
	{
		return $this->model->find($id)->update($attributes);
	}

	/**
	 * Delete a task.
	 *
	 * @param integer $id
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	public function getArticlesAll()
	{
		$paginate = $this->setting->first()->paginate_site;
		return $this->model->select(
			'id',
			'title',
			'url',
			'images',
			'category_id',
			'seo_id',
			'status',
			'user_id'
		)->where(
			'status', 1
		)->orderBy(
			'id', 'desc'
		)->paginate($paginate);
	}

	public function getPreviousPost($id)
	{
		return $this->model->select(
			'id',
			'title',
			'url',
			'status'
		)->where(
			'id', '<', $id
		)->orderBy(
			'id', 'desc'
		)->first();
	}

	public function getNextPost($id)
	{
		return $this->model->select(
			'id',
			'title',
			'url',
			'status'
		)->where(
			'id', '>', $id
		)->orderBy(
			'id'
		)->first();
	}

	public function getArticle($url)
	{
		return $this->model->where('status', 1)->where('url', $url)->first();
	}

	public function setView($data)
	{
		return $data->increment('views');
	}


	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeStatus($query)
	{
		return $query->where('status', 1);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeSlide($query)
	{
		return $query->where('slide', 1);
	}

	/**
	 * @param $query
	 * @param $search
	 * @return mixed
	 */
	public function scopeSearch($query, $search)
	{
		return $query->where('title', 'like', "%$search%");
	}

	/**
	 * @param $query
	 * @param $url
	 * @return mixed
	 */
	public function scopeFindUrl($query, $url)
	{
		return $query->where('url', $url);
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopeFindCategory($query, $id)
	{
		return $query->where('category_id', $id);
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopeNextPost($query, $id)
	{
		return $query->where('id', '>', $id)->orderBy('id');
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeDesc($query)
	{
		return $query->orderBy('id', 'desc');
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeViews($query)
	{
		return $query->orderBy('views', 'desc');
	}
}