<?php

namespace App\Repositories;

interface RepositoryInterface
{
	function getAll();

	function getById($id);

	function create($attributes);

	function update($id, $attributes);

	function delete($id);
}