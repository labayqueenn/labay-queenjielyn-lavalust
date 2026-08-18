<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$config['middlewares'] = array(
    'student_access' => load_class('StudentMiddleware', 'middlewares'),
);