<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
///use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanControler extends Controller
{
  public function index()
  {
      return view('admin.pages.plans.index');
  }
}
