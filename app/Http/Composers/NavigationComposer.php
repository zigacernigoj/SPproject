<?php namespace App\Http\Composers;

/**
 * Created by PhpStorm.
 * User: ziga
 * Date: 27.12.2015
 * Time: 18:35
 */
class NavigationComposer
{
    public function __construct() // NewsRepository $news ... Laravel ga potem ustvari sam
    {

    }

    public function compose($view){
        // $view->with('latest', \App\News::latest()->first());
    }

}