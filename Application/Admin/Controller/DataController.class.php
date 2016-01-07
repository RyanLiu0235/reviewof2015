<?php
namespace Admin\Controller;

use Think\Controller;

class DataController extends Controller
{
  public function index() {
    $this->display();
  }
  public function getData() {
    $m = M('user');
    $rst = $m -> count();
    echo $rst;
  }
}
