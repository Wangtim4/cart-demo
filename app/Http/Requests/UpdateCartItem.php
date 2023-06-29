<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// 子
class UpdateCartItem extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // 跟授權驗證有關
    public function authorize()
    {
        // 跟授權驗證有關，現在未用到先改true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    // 驗證邏輯
    public function rules()
    {
        return [
            'quantity' => 'required | integer | between:1,10', 
        ];
    }
    // 訊息回傳轉換成中文
    public function messages()
    {
        return [
            'quantity.between' => '數量必須小於10', 
        ];
    }
}
