<?php

namespace App\GraphQL\Inputs;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TaskInput extends GraphQLType {
    protected $inputObject = true;

    protected $attributes = [
        'name' => 'TaskInput',
        'description' => 'A task input',
    ];

    public function fields() {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'The project\'s ID',
            ],
            'title' => [
                'type' => Type::nonNull(Type::string())
            ],
            'description' => [
                'type' => Type::nonNull(Type::string())
            ],
            'statusCode' => [
                'type' => Type::nonNull(Type::string())
            ],
            'userId' => [
                'type' => Type::nonNull(Type::int())
            ],
        ];
    }
}