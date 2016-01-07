<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title>过去的一年，测测你是什么型？</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
    <table>
      <thead>
	<th>终端类型</th>
	<th>浏览器</th>
	<th>登陆时间</th>
      </thead>
      <tbody>
        
      </tbody>
    </table>
    <div class="doc"></div>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
	$(function() {
	  $.ajax({
	    url: '<?php echo (_ROOT_); ?>Admin/Data/getData',
	    type: 'get',
	    success: function(msg) {
	$('.doc').text(msg);
	//	for (var l = msg.length - 1; l >= 0; l--) {
		  //$()
	//	}
	    }
	  })
	})
    </script>
</body>