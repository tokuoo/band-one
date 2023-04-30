<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:400',
            'post.place' => 'required|string|max:400',
            'post.recruit_nummbers' => 'required|string|max:400',
            'post.recruit_part' => 'required|string|max:400',
            'post.genre' => 'required|string|max:400',
            
        ];
    }
}
