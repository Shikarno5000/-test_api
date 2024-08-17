<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
  protected $model;

  public function __construct(Project $model)
  {
    $this->model = $model;
  }

  public function index()
  {
    return $this->goodResponse($this->model::with(['status', 'totalEntranceAndExpenditure','directions', 'contract'])->get());
  }

}
