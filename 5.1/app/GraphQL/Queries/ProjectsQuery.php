<?php

namespace App\GraphQL\Queries;

use App\Project;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class ProjectsQuery extends Query {
    protected $attributes = [
        'name' => 'The projects queru',
        'description' => 'Retrieves projects',
    ];

    public function args() {
        return [
            'projectId' => [ 'type' => Type::int()]
        ];
    }

    public function type() {
        return Type::listOf(GraphQL::type('project'));
    }

    public function resolve($root, $args) {
        if (isset($args['projectId'])) {
            return Project::where('id', $args['projectId'])->get(); 
        }

        return Project::all();
    }


}