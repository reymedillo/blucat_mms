<?php

namespace App\Http\Requests;

use App\Http\Validation\NewsCustomValidator;
use App\Http\Requests\Request;

class NewsEditRequest extends Request
{
    protected $validator;

    public function __construct(NewsCustomValidator $validator){
        $this->validator = $validator;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->validator->UpdateRules;
    }

    public function messages()
    {
        return $this->validator->UpdateMessages;
    }
}
