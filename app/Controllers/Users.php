<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'admin_juan', 'full_name' => 'Juan Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'cashier_maria', 'full_name' => 'Maria Clara', 'role' => 'Cashier'],
            ['username' => 'mgr_ibarra', 'full_name' => 'Crisostomo Ibarra', 'role' => 'Manager'],
            ['username' => 'cashier_andres', 'full_name' => 'Andres Bonifacio', 'role' => 'Cashier'],
            ['username' => 'inv_sora', 'full_name' => 'Melchora Aquino', 'role' => 'Inventory Clerk'],
        ];

        return view('users/index', $data);
    }
}