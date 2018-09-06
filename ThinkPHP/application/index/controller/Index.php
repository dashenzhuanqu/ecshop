<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
       return view('index');
    }
    public function main()
    {
        return view('index_main');
    }
    public function menu()
    {
        return view('index_menu');
    }
    public function top()
    {
        return view('index_top');
    }
}