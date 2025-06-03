<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/jobs', function(){
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Front End',
                'salary' => '$10,000'
            ],
            [
                'id' => 2,
                'title' => 'Back End',
                'salary' => '$20,000'
            ],
            [
                'id' => 3,
                'title' => 'Full Stack',
                'salary' => '$30,000'
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function($id){
    $jobs = [
        [
            'id' => 1,
            'title' => 'Front End',
            'salary' => '$10,000'
        ],
        [
            'id' => 2,
            'title' => 'Back End',
            'salary' => '$20,000'
        ],
        [
            'id' => 3,
            'title' => 'Full Stack',
            'salary' => '$30,000'
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});