<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function getInfo() {
    	$data['user_phone'] = I('get.phone');
    	$data['user_browser'] = I('get.browser');
    	$data['user_timeStamp'] = I('get.timeStamp');
       $m = M('user');
	 $rst = $m->data($data)->add();
  	 if ($rst) {
    		echo "success";
    	 } else {
    	 	echo "fail";
    	 }
    }
}
