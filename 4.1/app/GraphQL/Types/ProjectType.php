<?php

namespace App\GraphQL\Types;

use App\Project;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProjectType extends GraphQLType {
    protected $attributes = [
        'name' => 'Project',
        'description' => 'A project',
        'model' => Project::class,
    ];

    public function fields() {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The project\'s ID',
            ],
            'title' => [
                'type' => Type::nonNull(Type::string())
            ],
            'description' => [
                'type' => Type::nonNull(Type::string())
            ],
            // 'manager' => [
            //     'type' => Type::nonNull(Type::int())
            // ],
            // 'tasks' => [
            //     'type' => Type::nonNull(Type::int())
            // ],
        ];
    }


}