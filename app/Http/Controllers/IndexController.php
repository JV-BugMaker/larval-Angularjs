<?php
/**
 * Created by PhpStorm.
 * User: JV
 * Date: 16/9/19
 * Time: 下午10:34
 */
namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index');
    }
}