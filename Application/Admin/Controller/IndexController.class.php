<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
//        echo "1231";
        $this->display('Index/index');

    }
    public function top()
    {
        $this->display();
    }
    public function menu()
    {
        $this->display();
    }
    public function main()
    {
        $this->display();
    }
}