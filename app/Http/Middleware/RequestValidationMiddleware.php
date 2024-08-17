<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class RequestValidationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $fullyQualifiedNameOfModel): Response
    {
        $model = new $fullyQualifiedNameOfModel();

        if (count($request->all()) === 0) {
          return \App\Http\Controllers\Controller::emptyRequest();
        }
        $validator = Validator::make($request->all(), $model->rules);
        if ($validator->fails()) {
          return \App\Http\Controllers\Controller::errorResponse($validator->errors(), 'validationError');
        }
        $request->replace($validator->validated());
        return $next($request);
    }
}
