<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

// 需使用HttpResponseException
use Illuminate\Http\Exceptions\HttpResponseException;

// 父
class APIRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        // 當出現驗證錯誤時,回傳400
        throw new HttpResponseException(response(['errors' => $validator -> errors()], 400 ));
    }
}