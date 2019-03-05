<?php

namespace App\Repositories\Site;

interface RepositoryInterface
{
	function getAll();

	function getById($id);

	function delete($id);
}