<?php

class UsersController
{
	public function index()
	{
		$users = App::get('database')->selectAll('users');

		return view('users', [
			'users' => $users
		]);
	}
	public function store()
	{
		App::get('database')->store('users', [
			'name' => $_POST['name'],
			'age' => $_POST['age'],
		]);

		redirect('/users');
	}
}