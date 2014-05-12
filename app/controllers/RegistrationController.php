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
        return View::make('registration.store');
    }

}