<?php

namespace App\GraphQL\Queries;

use App\User;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class UsersQuery extends Query {
    protected $attributes = [
        'name' => 'UsersQuery',
        'description' => 'Retrieves users',
    ];

    

    public function type() {
        return Type::listOf(GraphQL::type('user'));
    }

    public function resolve($root, $args) {
        return User::all();
    }


}