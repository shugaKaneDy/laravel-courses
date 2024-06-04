<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
          [
            'name' => 'Kane',
            'age' => 21,
          ],
          [
            'name' => 'Sherwin',
            'age' => 23,
          ],
          [
            'name' => 'John',
            'age' => 17,
          ]
        ];

        return view(
          "dashboard",
          [
            'users' => $users
          ]
        );
    }

}
