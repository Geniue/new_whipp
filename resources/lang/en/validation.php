<?php

return [
    'required' => 'The :attribute field is required.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
        'unique' => 'We already have a record with this field in our databases!'
    ],
    // Add other validation rules as needed
];