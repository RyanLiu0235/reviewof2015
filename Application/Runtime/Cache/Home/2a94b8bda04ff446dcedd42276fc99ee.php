<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title>过去的一年，测测你是什么型？</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="过去的一年，测测你是什么型？">
    <meta name="author" content="liucheng">
    <meta name="browsermode" content="application">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="x5-fullscreen" content="true">
    <meta name="full-screen" content="yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-store, must-revalidate">
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>style.css">
</head>

<body>
    <div class="y-slide">
        <div class="container">
            <!-- lauch page -->
            <div class="page pause">
                <div class="para" data-animation="fadein-right"><span>过去的2015，已经过去了</span></div>
                <div class="para" data-animation="fadein-right_0_6"><span>2015的愿望，你是否已经实现？</span></div>
                <div class="para" data-animation="fadein-right_1_2"><span>2015的承诺，你是否已经兑现？</span></div>
                <div class="para" data-animation="fadein-right_1_8"><span>2015的努力，你是否已经付出？</span></div>
                <div class="button" data-animation="fadein-bottom_3">点击开始选择~</div>
            </div>
            <div class="page pause optionPage">
                <div class="title" data-animation="fadein-left"><span>学业工作那点事儿</span></div>
                <div class="option" data-animation="fadein-left_0_7">A 做了该做的的，旁门左道也学了一点儿</div>
                <div class="option" data-animation="fadein-left_0_9">B 兢兢业业于自己的工作，一片无悔</div>
                <div class="option" data-animation="fadein-left_1_1">C 顺利完成琅琊榜请闭眼芈月传的观看</div>
                <div class="option" data-animation="fadein-left_1_3">D 额。。。2015就过去了？</div>
            </div>
            <div class="page pause optionPage">
                <div class="title" data-animation="fadein-left"><span>男欢女爱那点事儿</span></div>
                <div class="option" data-animation="fadein-left_0_7">A 与TA感情稳定，相敬如宾</div>
                <div class="option" data-animation="fadein-left_0_9">B 顺利脱单，再见苍老师</div>
                <div class="option" data-animation="fadein-left_1_1">C 单身没理由，搞基来一波</div>
                <div class="option" data-animation="fadein-left_1_3">D 当知轮回爱为根本</div>
            </div>
            <div class="page pause optionPage">
                <div class="title" data-animation="fadein-left"><span>对待生活那点事儿</span></div>
                <div class="option" data-animation="fadein-left_0_7">A 八块腹肌马甲线什么的都有了</div>
                <div class="option" data-animation="fadein-left_0_9">B 作息规律身体倍棒儿</div>
                <div class="option" data-animation="fadein-left_1_1">C 饱尝青霉素红霉素白霉素</div>
                <div class="option" data-animation="fadein-left_1_3">D 三天三夜三更半夜巴拉巴拉</div>
            </div>
            <div class="page result">
                <div class="windmill" data-animation="rotate-infinite">
                    <div class="wing wing_top" >
                        <div class="triangle_big"></div>
                        <div class="triangle_small"></div>
                    </div>
                    <div class="wing wing_right" >
                        <div class="triangle_big"></div>
                        <div class="triangle_small"></div>
                    </div>
                    <div class="wing wing_bottom">
                        <div class="triangle_big"></div>
                        <div class="triangle_small"></div>
                    </div>
                    <div class="wing wing_left">
                        <div class="triangle_big"></div>
                        <div class="triangle_small"></div>
                    </div>
                </div>
                <div class="msg"></div>
                <div class="button">唔，朕知道了！</div>
            </div>
            <div class="page pause">
                <div class="para" data-animation="fadein-top"><span>夜空中缓缓升起好多天灯</span></div>
                <div class="para" data-animation="fadein-top_0_7"><span>我想还是可以温暖你对未来的热</span></div>
                <div class="para" data-animation="fadein-top_1_4"><span>被辜负的人们，你是否还在等</span></div>
                <div class="para" data-animation="fadein-top_2_1"><span>那纸灯，已经越飞越远再没有可能</span></div>
                <div class="para" data-animation="fadein-top-stay_6"><span>不管2015怎么样都已过去</span></div>
                <div class="para" data-animation="fadein-top-stay_6_5"><span>2016 更加努力</span></div>

                <div class="share"  data-animation="fadein-top-stay_7">点击右上角，分享给朋友吧</div>
                <div class="info">制作：刘成</div>
            </div>
        </div>
    </div>

    <script src="<?php echo (JS_URL); ?>jquery.js"></script>
    <script src="<?php echo (JS_URL); ?>yummySlide.js"></script>
    <script type="text/javascript">
    var type = function() {
        var optionList = [];
        $('.optionPage').each(function() {
            var _option = $(this).find('.option.selected').index();

            optionList.push(_option);
        });
        judge(optionList);
    }

    var judge = function(option) {
        var sentence = '';
        var rank = 0;
        for (var i = option.length - 1; i >= 0; i--) {
            switch (option[i]) {
                case 0:
                case 1:
                    rank++;
                    break;
                case 2:
                    rank = rank;
                    break;
                case 3:
                    rank--;
                    break;
            }
            if (i === 0) {
                switch (rank) {
                    case 3:
                    case 2:
                        sentence += '在过去的一年里，你的努力有目共睹。人生路漫漫，且行且珍惜。未来的你，会感谢现在如此努力的你！鉴于你在过去的一年里的努力，你被评为<strong>大神型</strong>，猴赛雷！';
                        break;
                    case 1:
                    case 0:
                    case -1:
                        sentence += '人生有起有伏，天空有晴有雨。抓住当下，你会发现原来你也能做到这么好。鉴于你在过去一年里的努力，你被评为<strong>勤奋型</strong>，干巴爹！';
                        break;
                    case -2:
                    case -3:
                        sentence += '你说说你去年到底干啥去了，啊。要媳妇儿媳妇儿没有要成绩成绩没有，整天high你到是挺厉害。鉴于你在过去一年的表现，给你评为<strong>潜力型</strong>，希望你能奋起直追，追到沈佳宜，追到林真心，哈哈~~看好你哦！';
                        break;
                }
                $('.result.page').find('.msg').html(sentence);
            }
        }
    }

    var getDevice = function() {
        var ua = navigator.userAgent;
        var userInfo = {};
        if (ua.match(/iPhone/)) {
            userInfo.phone = 'iPhone';
        } else if (ua.match(/Android/)) {
            userInfo.phone = 'Android';
        } else {
            userInfo.phone = 'others';
        }
        if (ua.match(/MicroMessenger/)) {
            userInfo.browser = 'weixin';
        } else if (ua.match(/MQQBrowser/)) {
            userInfo.browser = 'QQ';
        } else if (ua.match(/UC/)) {
            userInfo.browser = 'UC';
        } else {
            userInfo.browser = 'others';
        }
        userInfo.timeStamp = new Date();
        console.log(userInfo)
        var _url = '<?php echo (_ROOT_); ?>Home/Index/getInfo';
        $.ajax({
            url: _url,
            type: 'get',
            data: userInfo,
            success: function(msg) {
                console.log(msg);
            }
        });
    }

    $(function() {
        $('.y-slide').yummySlide({
            mode: 'fade',
            custom: [{ // 自定义滑动触发方法
                obj: $('.button, .option'),
                trigger: 'click'
            }],
            init: function() {
                $('.optionPage').eq(-1).on('click', type);
                $('.option').on('click', function() {
                    $(this).addClass('selected');
                })
            }
        });

        getDevice();
    })
    </script>
</body>

</html>