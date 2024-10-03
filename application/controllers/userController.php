<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
	public $name;
	public $last_name;
	public $email;
	public $password;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("UserModel");
	}

	public function index()
	{
		$data['users'] = $this->UserModel->showUsers();

		$this->load->view('userView', $data);
	}

	public function guardar()
	{
		$data = [
			'name' => $this->input->post('name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		];

		$this->UserModel->saveUser($data);

		redirect(base_url());
	}

	public function edit()
	{
		$id = $this->input->post("id");
		$data['user'] = $this->UserModel->getUser($id);

		$this->load->view('editUserView', $data);
	}

	public function update()
	{
		$data = [
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
		];

		$this->UserModel->update($data);

		redirect(base_url());
	}

	public function delete()
	{
		$id = $this->input->post("id");
		$this->UserModel->deleteUser($id);

		redirect(base_url());
	}
}
