<?php

namespace App\GraphQL\Queries;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class CheckAuthQuery extends Query {
    protected $attributes = [
        'name' => 'UserAuthQuery',
        'description' => 'Checks the user auth',
    ];

    public function type() {
        return Type::string();
    }

    public function resolve($root, $args) {
        return '';
    }


}