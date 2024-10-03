<?php
class UserModel extends CI_Model
{

    public $name;
    public $last_name;
    public $email;
    public $password;

    public function __construct()
    {
        parent::__construct();
        $this->load->database("data");
    }

    public function showUsers()
    {
        return $this->db->query("SELECT * FROM users")->result();
    }

    public function getUser ($id) {
        return $this->db->query("SELECT * FROM users WHERE id = ?", $id)->row();
    }

    public function saveUser($data)
    {
        $this->name = $data["name"];
        $this->last_name = $data["last_name"];
        $this->email = $data["email"];
        $this->password = $data["password"];

        $this->db->query("INSERT INTO users 
        (name, last_name, email, password) VALUES 
        (?, ?, ?, ?)", array($this->name, $this->last_name, $this->email, $this->password));
    }

    public function update($data)
    {
        $this->name = $data["name"];
        $this->last_name = $data["last_name"];
        $this->email = $data["email"];

        $id = $data["id"];

        $this->db->query("UPDATE users SET name = ?, last_name = ?, email = ?, password = ? 
        WHERE id = ?", array($this->name, $this->last_name, $this->email, $this->password, $id));
    }

    public function deleteUser($id)
    {
        $this->db->query("DELETE FROM users WHERE id = ?", $id);
    }
}
