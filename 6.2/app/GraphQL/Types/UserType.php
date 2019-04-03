<?php

namespace App\GraphQL\Types;

use App\User;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType {
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user',
        'model' => User::class,
    ];

    public function fields() {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The user\'s ID',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string())
            ],
            'name' => [
                'type' => Type::nonNull(Type::string())
            ],
        ];
    }


}