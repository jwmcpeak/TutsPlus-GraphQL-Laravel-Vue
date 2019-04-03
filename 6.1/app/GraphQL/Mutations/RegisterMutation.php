<?php

namespace App\GraphQL\Mutations;
use Auth;

use App\User;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Illuminate\Support\Str;
use Rebing\GraphQL\Support\Mutation;

class RegisterMutation extends Mutation {
    protected $attributes = [
        'name' => 'RegisterMutation',
    ];

    public function args() {
        return [
            'displayName' => [ 'type' => Type::string()],
            'email' => [ 'type' => Type::string()],
            'password' => [ 'type' => Type::string()],

        ];
    }

    public function type() {
        return Type::string();
    }

    public function resolve($root, $args) {
        $user = User::create([
            'name' => $args['displayName'],
            'email' => $args['email'],
            'password' => bcrypt($args['password']),
            'api_token' => Str::random(60)
        ]);

        return $user->api_token;
    }


}