<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 12:31
 */

namespace App\Http\Controllers;


class DirectionController extends Controller
{
    public function show($id)
    {
        return view('direction');
    }
}