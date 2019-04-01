<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use Illuminate\Support\Facades\Hash;

class RegisterController extends BaseController
{
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';
	/**
	 * @var UserRepository
	 */
	private $userRepository;
	/**
	 * @var RoleRepository
	 */
	private $roleRepository;

	/**
	 * RegisterController constructor.
	 * @param UserRepository $userRepository
	 * @param RoleRepository $roleRepository
	 */
	public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
	{
		$this->middleware('guest');
		$this->userRepository = $userRepository;
		$this->roleRepository = $roleRepository;

	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array $data
	 * x@return \App\User
	 */
	protected function create(array $data)
	{
		$role = $this->roleRepository->getRoleUser();

		$attributes = [
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
			'role_id' => $role
		];

		return $this->userRepository->create($attributes);
	}
}
