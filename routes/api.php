<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$users = [
    [
        'id'           => 1,
        'name'         => 'Kalen Jordan',
        'handle'       => 'kalenjordan',
        'image_url'    => 'https://pbs.twimg.com/profile_images/959539398210547712/U5lQBX2N_400x400.jpg',
        'city'         => 'Austin',
        'tags'         => [
            [
                'id'    => 1,
                'tag'        => 'Bootstrapper',
                'count'      => 3,
                'is_upvoted' => 1,
            ],
            [
                'id'    => 2,
                'tag'        => 'Founder',
                'count'      => 1,
                'is_upvoted' => 0,
            ],
            [
                'id'    => 3,
                'tag'        => 'Magento',
                'count'      => 5,
                'is_upvoted' => 0,
            ],
            [
                'id'    => 4,
                'tag'        => 'Laravel',
                'count'      => 1,
                'is_upvoted' => 0,
            ],
            [
                'id'    => 5,
                'tag'        => 'Homeschool Dad',
                'count'      => 0,
                'is_upvoted' => 0,
            ],
            [
                'id'    => 6,
                'tag'        => 'PHP',
                'count'      => 1,
                'is_upvoted' => 0,
            ],
            [
                'id'    => 7,
                'tag'        => 'eCommerce',
                'count'      => 1,
                'is_upvoted' => 0,
            ],
        ],
        'headline'     => 'Magento fanboy. Small-time entrepreneur. Wannabe Youtuber. Not a recruiter. Founder @commercehero. Co-host @magetalk',
        'about'        => "Hey there! I'm Kalen! I'm a 
        [developer](https://github.com/kalenjordan), 
        [bootstrapped founder](https://founderland.io/kalenjordan),
        [connector](https://commercehero.io), 
        [podcaster](https://magetalk.com), 
        and [writer](https://kalenjordan.com). 

Glad you're here checking out my page on Founder Land. I'm building Founder Land because I love to connect people and I love the bootstrapped founder community.
        
Little about me…I've been in the Magento community for about 7 years, and I built an email software that was acquired, started a [podcast](https://magetalk.com) that I cohost with my buddy, and then built a [matchmaking platform](https://commercehero.io) to find Magento developers, which is doing great and I continue to run.
        ",
        'endorsements' => [
            [
                'id'      => 1,
                'user'    => [
                    'first_name'    => 'Joe',
                    'avatar_url' => 'http://i.pravatar.cc/300?img=1',
                ],
                'tag'     => 'Founder',
                'message' => "Kalen is the best, he's so awesome",
            ],
            [
                'id'      => 2,
                'user'    => [
                    'first_name'    => 'Joe',
                    'avatar_url' => 'http://i.pravatar.cc/300?img=1',
                ],
                'tag'     => 'PHP',
                'message' => "Kalen is really great when it comes to PHP - really knows his stuff"
            ]
        ]
    ],
    [
        'id'        => 2,
        'name'      => 'Andrew Culver',
        'handle'    => 'andrewculver',
        'image_url' => 'https://pbs.twimg.com/profile_images/976527971140845568/iniQmnYi_400x400.jpg',
        'city'      => 'Los Angeles',
        'tags'      => [
            [
                'id'    => 9,
                'tag'        => 'Bootstrapper',
                'count'      => 3,
                'is_upvoted' => 0,
            ],
            [
                'id'    => 10,
                'tag'        => 'Founder',
                'count'      => 1,
                'is_upvoted' => 0,
            ],
        ],
        'headline'  => 'Founder and Lead Developer at bullettrain.co . Founded and sold churnbuster.io . Bootstrapper. Remote. Canadian. Love️ Japan.',
        'about'     => 'test',
    ]
];

Route::get('/v1/users', function (Request $request) use ($users) {
    return $users;
});

Route::get('/v1/users/{id}', function (Request $request) use ($users) {
    return $users[0];
});

$tags = [
    [
        'tag'         => 'Bootstrapper',
        'slug'        => 'Bootstrapper',
        'description' => 'Lorem ipsum dolor set amen',
        'count'       => 15,
        'users'       => [
            [
                'name'       => 'Kalen',
                'avatar_url' => 'http://i.pravatar.cc/300?img=3'
            ],
            [
                'name'       => 'Bob',
                'avatar_url' => 'http://i.pravatar.cc/300?img=4'
            ],
        ]
    ],
    [
        'tag'         => 'Homeschool Dad',
        'slug'        => 'homeschool-dad',
        'description' => 'Lorem ipsum dolor set amen',
        'count'       => 3,
        'users'       => [
            [
                'name'       => 'Kalen',
                'avatar_url' => 'http://i.pravatar.cc/300?img=1'
            ],
            [
                'name'       => 'Bob',
                'avatar_url' => 'http://i.pravatar.cc/300?img=2'
            ],
        ]
    ],
    [
        'tag'         => 'Founder',
        'slug'        => 'founder',
        'description' => 'Lorem ipsum dolor set amen',
        'count'       => 13,
        'users'       => [
            [
                'name'       => 'Kalen',
                'avatar_url' => 'http://i.pravatar.cc/300?img=42'
            ],
            [
                'name'       => 'Kalen',
                'avatar_url' => 'http://i.pravatar.cc/300?img=43'
            ],
            [
                'name'       => 'Bob',
                'avatar_url' => 'http://i.pravatar.cc/300?img=44'
            ],
        ]
    ]
];

Route::get('/v1/tags', function (Request $request) use ($tags) {
    return $tags;
});

Route::get('/v1/tags/1', function (Request $request) use ($tags) {
    return $tags[0];
});
