<?php

namespace App\Http\Requests;

use App\Models\QueryStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateQueryStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('query_status_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
