<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 12:31
 */

namespace App\Http\Controllers;


use App\Direction;

class DirectionController extends Controller
{
    public function show($id, Direction $model)
    {
        $direction = $model->where('url', $id)->firstOrFail();
        $links = $direction->links()->paginate(12);

        return view('direction', ['links' => $links]);
    }
}