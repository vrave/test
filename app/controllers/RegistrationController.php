<?php

class RegistrationController extends BaseController {

	public function create()
	{
        return View::make('registration.create');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $user = User::create(Input::only('username', 'email', 'password'));

        Auth::login($user);

        return Redirect::home();
    }

}