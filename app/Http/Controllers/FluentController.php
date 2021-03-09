<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('Welcome to my new Laravel Project')->after('Welcome to');
        echo $slice . "<br>";

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . "<br>";

        $String = Str::of('Hello ')->append('World!');
        echo $String . "<br>";

        $result = Str::of('LARAVEL 8')->lower();
        echo $result. "<br>";

        $result2 = Str::of('Laravel 8')->upper();
        echo $result2 . "<br>";

        $replaced = Str::of('Laravel 7.0')->replace('7.0', '8.0');
        echo $replaced. "<br>";

        $converted = Str::of('This is a ttile')->title();
        echo $converted. "<br>";

        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug  . "<br>";

        $str = Str::of('Laravel Framework')->substr(8,5);//it will return the word after the first parameter and second parameter is for how many char do you want to show.
        echo $str . "<br>";

        $str2 = Str::of('/Laravel/8')->trim('/');
        echo $str2;

        

    }
}
