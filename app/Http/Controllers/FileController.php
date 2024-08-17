<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use App\Models\Element;
use App\Models\Document;
use App\Models\Product;
use App\Models\Dpu;
use App\Models\Letter;
use App\Models\LowerLevel;
use App\Models\Plk;
use App\Models\Server;
use App\Models\Software;
use App\Models\Order;
use App\Models\Contract;
use App\Models\OfficialNote;
use App\Models\Project;
use App\Models\Specification;
use App\Models\Suggestion;


class FileController extends Controller
{
  //
  protected $model;

  public function __construct(File $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\File', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with(['elements', 'products', 'documents', 'plks', 'servers', 'softwares'])->get();
  }
  public function all()
  {
    return $this->goodResponse(Storage::files('public'));
  }
  public function update(int $id, Request $request)
  {
    return $this->defaultUpdate($id, $this->model, $request->all());
  }

  public function store(Request $request)
  {
    if ($request->hasFile('file')) {
      $url = substr($request->file('file')->store('public'), 7);
      $to = json_decode($request['to']);
      $newName = json_decode($request['name']);
      $name = $newName !== null & $newName !== '' ? $newName : $request->file->getClientOriginalName();

      $model = File::create($this->valWithCreatedBy([
        'name' => $name,
        'size' => $request->file->getSize(),
        'url' => $url,
        'date' => json_decode($request['date']),
        'comment' => json_decode($request['comment'])
      ]));

      if ($to->table === 'elements') {
        Element::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'documents') {
        Document::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'products') {
        Product::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'dpus') {
        Dpu::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'plks') {
        Plk::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'servers') {
        Server::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'softwares') {
        Software::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'lower-levels') {
        LowerLevel::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'orders') {
        Order::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'official-notes') {
        OfficialNote::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'contracts') {
        Contract::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'letters') {
        Letter::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'applications') {
        Application::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'projects') {
        Project::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'specifications') {
        Specification::find($to->id)->files()->attach($model->id);
      }
      if ($to->table === 'suggestions') {
        Suggestion::find($to->id)->files()->attach($model->id);
      }
      return $this->goodResponse(true);
    }
  }

  public function delete($id) {
    if ($model = $this->model::find($id)) {
      $model->delete();
      Storage::disk('public')->delete($model->url);
      return $this->goodResponse(true);
    }
    return $this->emptyModel();
  }

}
