<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Exceptions\ModelErrorException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function createSuccessResponse($model = false)
    {
        if (is_object($model)) {
            /** @var \Illuminate\Database\Eloquent\Model $model */
            $model = $model->toArray();
        }

        $responseJSON = ['status' => true];

        if ($model || empty($model)) {
            $responseJSON['data'] = $model;
        }

        return response()->json($responseJSON);
    }

    /**
     * @param array $errors
     */
    protected function createErrorResponse($errors = [])
    {
        throw ModelErrorException::withErrors($errors);
    }
}
