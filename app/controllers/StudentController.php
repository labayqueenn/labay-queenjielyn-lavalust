<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $data = [
            'title' => 'My Student Home',
            'message' => 'Welcome to my Student Information Page!'
        ];

        // Load the student home view
        $this->call->view('student/index', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => '2024-00209',
            'name'       => 'Queenjielyn E. Labay',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F5',
            'email'      => 'labayqueenjielyn@gmail.com'
        ];

        // Load the profile view
        $this->call->view('student/profile', $student);
    }
}