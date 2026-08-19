<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {
	public function index() {
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
		$_SESSION['student_access'] = true;

		$data = [
			'title' => 'Roy Jr. Bedoya | Student Home',
			'student_id' => '00008',
			'name' => 'Roy Jr. Bedoya',
			'course' => 'BSIT',
			'section' => '3F1',
			'program' => 'Bachelor of Science in Information Technology',
			'email' => 'royjr.bedoya@example.com'
		];

		$this->call->view('student_home', $data);
	}

	public function profile() {
		$student = [
			'student_id' => '00008',
			'name' => 'Roy Jr. Bedoya',
			'course' => 'BS Information Technology',
			'year' => '3rd Year',
			'section' => '3F1',
			'email' => 'prienceroyflauta@gmail.com',
			'address' => 'Sitio Proper, Big Tabinay, Puerto Galero, Oriental Mindoro, Philippines   ',
			'contact' => '+63 912 345 6789',
			'skills' => ['Web Development', 'Database Management', 'UI Design'],
			'hobbies' => ['Coding', 'Reading', 'Photography'],
			'description' => 'A focused and creative IT student who enjoys building practical web applications and improving technical skills.'
		];

		$this->call->view('student_profile', ['student' => $student]);
	}
}
?>
