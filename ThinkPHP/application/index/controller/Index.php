<?php
namespace app\index\controller;
use think\Request;
use think\Validate;
use app\index\controller\Base;
use think\Db;
use think\Session;
/**
 * Class Index
 * @package app\index\controller
 */
class Index extends Base
{
    public function __construct()
    {
        parent::__construct();
        $Session = Session::get('data');
        return $Session;
    }
    
    /**
     * @return \think\response\View
     */
    public function index()
    {
       return view('index');
    }

    /**
     * @return \think\response\View
     */
    public function main()
    {
        return view('index_main');
    }

    /**
     * @return \think\response\View
     */
    public function menu()
    {
        return view('index_menu');
    }

    /**
     * @return \think\response\View
     */
    public function top()
    {
        return view('index_top');
    }

    /**
     * @return \think\response\View|void
     */
    public function success_(){
        return view('success');
    }
}
