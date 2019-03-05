<?php

namespace App\Repositories\Admin;

interface RepositoryInterface
{
	function getAll();

	function getById($id);

	function create(array $attributes);

	function update($id, array $attributes);

	function delete($id);
}