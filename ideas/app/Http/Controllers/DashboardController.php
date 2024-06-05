<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        /* Inserting data into database
        $idea = new Idea([
            'content' => 'Hello Youtube'
        ]);
        $idea->save(); */

        /* dump(Idea::all()); */
        return view('dashboard', [
            /* 'ideas' => Idea::all() */
            'ideas' => Idea::orderBy('created_at', 'DESC')->get()
        ]);
    }

}
