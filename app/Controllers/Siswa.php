<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index(): string
    {
        return view('siswas/index');
    }

    public function show(): string
    {
        return view('siswas/show');
    }
}
