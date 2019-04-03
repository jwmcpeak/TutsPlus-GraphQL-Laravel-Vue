<?php

namespace App\GraphQL\Mutations;
use Auth;

use App\User;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class LoginMutation extends Mutation {
    protected $attributes = [
        'name' => 'Login',
    ];

    public function args() {
        return [
            'email' => [ 'type' => Type::string()],
            'password' => [ 'type' => Type::string()],

        ];
    }

    public function type() {
        return Type::string();
    }

    public function resolve($root, $args) {
        $credentials = [
            'email' => $args['email'],
            'password' => $args['password'],
        ];

        if (Auth::guard('web')->attempt($credentials)) {
            return Auth::guard('web')->user()->api_token;
        }

        return null;
    }


}