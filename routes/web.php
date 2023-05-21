<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'page_title' => 'Hello World!',
        'nav_links' => [
            'home',
            'course',
            'students',
            'about'
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/course', function () {
    $data = [
        'nav_links' => [
            'home',
            'course',
            'students',
            'about'
        ],
        'teachers' => [
            'Clelia Fradella',
            'Marco Acciari',
            'Samuel Panicucci'
        ]
    ];
    $page_title = 'My Course';
    $course_name = 'Boolean';
    $course_type = 'Web Developer Full Stack';
    return view('course', $data, compact('page_title', 'course_name', 'course_type'));
})->name('course');

Route::get('/students', function () {
    $data = [
        $class_number = 'Classe 92',
        'students' => [
            'alessandro garganese',
            'alessandro pagliuca',
            'alessio logozzo',
            'anas hamimi',
            'andrea collura',
            'aniello rossi',
            'arianna drovandi',
            'chiara sucato',
            'christian paliotta moretti',
            'christian totaro',
            'daniele ceravolo',
            'davide caputo',
            'davide sberna',
            'emanuele rosella musico',
            'filippo giampapa',
            'filippo verrone',
            'francesco froechlich',
            'gaetano spampinato',
            'gerson membrillo',
            'gianmarco incocciati',
            'giorgio lumia',
            'giovanni jacopo speranza',
            'giuseppe indomenico',
            'giuseppe lucà',
            'jorge castillo tenasoa',
            'marco bione',
            'marika di blasio',
            'matteo aguiari',
            'michele libralato',
            'nicola di quinzio',
            'nicolò zibra',
            'raffaele capaldo',
            'taddeo neri',
            'vito de palma',
        ]
    ];
})->name('students');

Route::get('/about', function () {
    $description = "I'm a Web Developer based in Milan (Italy). I attend the Boolean course and I'm a student of class 92";
})->name('about');
