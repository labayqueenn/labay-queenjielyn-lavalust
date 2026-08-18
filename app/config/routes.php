<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
$router->get('/', 'StudentController::index');s

$router->get('/student', 'StudentController::index');

$router->get('/student/profile', 'StudentController::profile')
       ->middleware('student_access');