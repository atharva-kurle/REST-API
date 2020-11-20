<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Info;

class InfoController extends Controller
{
    public function index()
    {
        $all = Info::all();
        return $all;
    }


    public function show(Info $id)
    {
        return $id;
    }

    public function store(Request $req)
    {
        $store = Info::create($req->all());
        return $store;
    }

    public function update(Request $req, $id)
    {
        $data = Info::find($id);
        $data->update($req->all());
        return $data;
    }

    public function delete($id)
    {
        $data = Info::find($id);
        $data->delete();
    }

}
