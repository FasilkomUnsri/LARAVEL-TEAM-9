<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin()
    {
        $this->data['title'] = 'Halaman Admin';
        return view('page.admin', $this->data);
    }

    public function tamu()
    {
        $this->data['title'] = 'Halaman Tamu';
        return view('page.tamu', $this->data);
    }
}
