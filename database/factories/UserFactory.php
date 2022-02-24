<?php

use App\User;
use App\Post;
use App\Group;
use App\Member;
use App\Comment;
use App\Message;
use App\Follower;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'              => $faker->name,
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token'    => Str::random(10),
    ];
});

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1, 11),
        'description'       => $faker->paragraphs(2, true),
    ];
});

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1, 11),
        'post_id'           => $faker->numberBetween(1, 50),
        'description'       => $faker->paragraphs(2, true),
    ];
});

$factory->define(Follower::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1, 11),
        'follower_id'       => $faker->numberBetween(1, 11),
    ];
});

$factory->define(Group::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1, 11),
        'name'              => $faker->name,
    ];
});

$factory->define(Message::class, function (Faker $faker) {
    return [
        'sender_id'         => $faker->numberBetween(1, 11),
        'receiver_id'       => $faker->numberBetween(1, 11),
        'group_id'          => $faker->numberBetween(1, 50),
        'description'       => $faker->paragraphs(2, true),
    ];
});

$factory->define(Member::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->numberBetween(1, 11),
        'group_id'          => $faker->numberBetween(1, 50),
    ];
});
