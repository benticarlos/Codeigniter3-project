<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config = array(
    'valid_login' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|valid_email|required|min_length[2]|max_length[150]'
        ),
        array(
            'field' => 'pass',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[8]|max_length[16]|callback_check_password_strength'
        )
    ),
);