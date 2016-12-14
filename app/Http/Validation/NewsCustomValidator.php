<?php
namespace App\Http\Validation;

use App\Http\Validation\Classes\Validator;

class NewsCustomValidator extends Validator {

    public $CreateRules = [
        'content' => 'required|max:1000',
    ];

    public $CreateMessages = [
        'content.required' => 'Content Required!'
    ];

    public $UpdateRules = [
        'content' => 'required|max:1000',
    ];

    public $UpdateMessages = [
        'id.exists' => 'News does not exist!',
        'content.required' => 'Content Required!'
    ];
}