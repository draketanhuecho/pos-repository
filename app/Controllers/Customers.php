<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Maria Clara', 'email' => 'maria@example.com', 'phone' => '09182345678'],
            ['full_name' => 'Crisostomo Ibarra', 'email' => 'ibarra@example.com', 'phone' => '09193456789'],
            ['full_name' => 'Andres Bonifacio', 'email' => 'andres@example.com', 'phone' => '09204567890'],
            ['full_name' => 'Melchora Aquino', 'email' => 'tandangsora@example.com', 'phone' => '09215678901'],
        ];

        return view('customers/index', $data);
    }
}