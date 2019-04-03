<?php

namespace App\GraphQL\Inputs;

use App\Project;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProjectInput extends GraphQLType {
    protected $inputObject = true;

    protected $attributes = [
        'name' => 'ProjectInput',
        'description' => 'A project input',
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
            'tasks' => [
                'type' => Type::listOf(GraphQL::type('taskInput'))
            ],
            'users' => [
                'type' => Type::listOf(Type::int())
            ],
        ];
    }


}