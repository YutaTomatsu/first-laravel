<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class TestController extends Controller
  {
    public function index(Request $request)
    {
          $item = [
             'txt' => 'テキスト',
             'content' => '本文',
             'param' => $request->text
         ];
         return view('index', $item);
    }
}