<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article as Model;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
	use HandlesAuthorization;

	public function own(User $user, Model $article)
	{
		return $article->user_id == 222;
	}
}
