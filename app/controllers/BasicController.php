<?php

class BasicController extends \BaseController {

	protected $data;

	public function __construct(){
		$this->data['pagetitle'] = "Welcome";
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function contact(){
		$this->data['pagetitle'] = 'Contact Us';
		return View::make('index', $this->data);
	}

	public function register(){
		$this->data['pagetitle'] = 'Register';
		return View::make('index', $this->data);
	}

	public function show_sign_in(){
		$this->data['pagetitle'] = 'Sign In';
		return View::make('index', $this->data);
	}

	public function gallery(){
		$this->data['pagetitle'] = 'GALLERIES';
		return View::make('gallery', $this->data);
	}
	public function news(){
		$this->data['pagetitle'] = 'NEWS';
		return View::make('news', $this->data);
	}

}