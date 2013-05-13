<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserData extends CI_Model {
	var $username   = '';
    var $email = '';
    var $dob    = '';
    var $first_name    = '';
    var $last_name    = '';
    var $gender = '';
    var $password = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function findUserByName($name) {
       	$query = $this->db->get_where('user', array('username' => $name));
        return $query->result();
    }

    function insert_entry() {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();
        $this->db->insert('entries', $this);
    }

    function update_entry() {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}