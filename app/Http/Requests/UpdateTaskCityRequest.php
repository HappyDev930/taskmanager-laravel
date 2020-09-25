<?php

namespace App\Http\Requests;

use App\TaskCity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateTaskCityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('task_city_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
