<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OcAccountUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'month' => 'required|max:12|min:1',
            'day' => 'required|min:1|max:31',
            'month_cnt' => 'required|min:1|max:4',
            'auto_revoke' => 'required|boolean',
            'is_paid' => 'required|boolean',
            'description' => 'max:255'
        ];
    }
}
