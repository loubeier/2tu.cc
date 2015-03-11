<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/header.css" />
    <link rel="stylesheet" type="text/css" href="/Application/Home/Public/Css/footer.css" />
    <script src="/Application/Home/Public/Js/dynamicLoading.js" ></script>
</head>
<body>
<div id="header">
    <div class="head">
        <div class="top">
            <span>欢迎来到私人影院,我们为大家免费提供好看的电影</span>
            <p>
                <a onclick="setHome()" href="javascript:void(0);">设为首页</a> -
                <a onclick="addFavorite();" href="javascript:void(0)">加入收藏</a> -
                <a class="wp" target="_blank" href="">留言求片</a> -
                <a target="_blank" href="">RSS订阅</a> -
                <a class="desk" target="_blank" href="">将迅播放到桌面</a>
            </p>
        </div>
        <div class="logo"></div>
        <div class="plus">
            <a class="ph">排行榜</a>
            <a class="dq">影视大全</a>
        </div>
        <div id="search">
            <div class="ser">
                <p>
                <form>
                    <input class="search-input" type="text" name="search" value="在此处输入影片名或演员名称"/>
                    <input class="sub" type="submit" name="submit" value="搜索"/>
                </form>
                </p>
            </div>
        </div>
        <div class="history">
            <a class="gk">播放记录</a>
            <div class="drop-box" style="display: none;">
                <div class="lookedlist">
                    <p>
                        <a href="javascript:;" class="closehis">关闭</a>
                        <a onclick="javascript:setEmpty()" id="emptybt" href="javascript:void(0);">清空全部播放记录</a>
                    </p>
                    <ul id="playhistory" class="highlight">
                        <div class="histodo" id="morelog">您的观看历史为空。</div>
                    </ul>
                </div>
            </div>
        </div>
        <div id="menu">
            <div class="m">
                <p>
                    <a class="curr" href="http://www.2tu.cc">首页</a>
                    <a class="menu15" href="/GvodHtml/dy.html">电影</a>
                    <a class="menu16" href="/GvodHtml/tv.html">电视</a>
                    <a class="menu7" href="/GvodHtml/7.html">动画片</a>
                    <a class="menu8" href="/GvodHtml/8.html">综艺片</a>
                    <a class="menu21" href="/GvodHtml/21.html">3D电影</a>
                    <a class="menu18" href="/GvodHtml/18.html">影视预告</a>
                </p>
                <span>
                    <a href="/top/toplist.html">排行榜</a>
                    <a href="/top/lastupdate.html">最近更新</a>
                </span>
            </div>
            <p class="s">热门分类：
                <a href="/GvodHtml/1.html">动作片</a>
                <a href="/GvodHtml/2.html">喜剧片</a>
                <a href="/GvodHtml/3.html">爱情片</a>
                <a href="/GvodHtml/4.html">科幻片</a>
                <a href="/GvodHtml/5.html">恐怖片</a>
                <a href="/GvodHtml/6.html">剧情片</a>
                <a href="/GvodHtml/13.html">战争片</a>
                <a href="/GvodHtml/14.html">其它片</a>
                <a href="/GvodHtml/9.html">国产剧</a>
                <a href="/GvodHtml/10.html">港台剧</a>
                <a href="/GvodHtml/11.html">欧美剧</a>
                <a href="/GvodHtml/12.html">日韩剧</a>
                <a href="/GvodHtml/17.html">新马泰</a>
            </p>
        </div>
    </div>

</div>

<div id="main" class="main" >
    
<div class="view">
    <div class="wz">
        当前位置:
        <a href="/">首页</a>&nbsp;&nbsp;»&nbsp;&nbsp;
        <a href="/GvodHtml/15.html">电影</a>&nbsp;&nbsp;»&nbsp;&nbsp;
        <a href="/GvodHtml/3.html">爱情片</a>&nbsp;&nbsp;»&nbsp;&nbsp;微爱之渐入佳境
    </div>
    <div class="pic">
        <img src="/Public/Img/20141217225926737.jpg"/>
        <p>
            <a href="#kan">立即播放</a>
        </p>
    </div>
    <div class="info">
        <h1><?php echo ($mdetail["movie_name"]); ?></h1>
        <ul>
            <li>
                <span>上映年代:</span>
                <?php echo ($mdetail["releasedate"]); ?>
                <span>状态</span>
                <?php echo ($mdetail["status"]); ?>
            </li>
            <li>
                <span>类型:</span>
                <a>剧情</a>
                <a>爱情</a>
                <a>喜剧</a>
            </li>
            <li>
                <span>主演:</span>
                <?php if(is_array($actors)): $i = 0; $__LIST__ = $actors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a><?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>

            </li>
            <li>
                <span>地区:</span>
                大陆
            </li>
            <li>
                <div class="fl">
                    <span>更新日期:</span>
                    2015-1-11 14:04:40
                </div>
                <a class="fr" style="text-align:right;" href="#pl">
                    <img width="90" height="22" alt="查看评论" src="/Public/Img/90x22.gif"/>
                </a>
            </li>
        </ul>
        <div class="textdesc">
            <span>剧情:</span>
            <?php echo (substr($mdetail["storyline"],0,200)); ?>
            <a href="#desc">详细</a>
            ]
        </div>
        <div class="pfen">
            <p>影片评价</p>
            <div class="starscore">
                <div id="fileStar" class="starA fl">
                    <div id="start" class="starB s10"></div>
                    <div id="starTC" class="starC">
                        <a></a>
                    </div>
                </div>
                <span id="filmStarScore" class="no c1">
                    10
                    <i>.0</i>
                </span>
            </div>
            <div id="filmStarScoreTip" class="fen">棒极了</div>
        </div>
    </div>
</div>
<div class="infoad">

</div>
<div class="endpage clearfix">
    <div class="ulike">
        <div class="title">
            <span>猜你喜歡</span>
        </div>
        <ul class="img-list imglist clearfix">
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
            <li>
                <a class="play-img">
                    <img src="/Public/Img/20120313111119706.jpg"/>
                    <i></i>
                    <em>1280高清</em>
                </a>
                <h5>
                    <a>晚秋</a>
                </h5>
            </li>
        </ul>
    </div>
    <div class="mox">
        <div class="title">
            <span>百度影音</span>
            <p>
                <a>下载百度影音</a>
            </p>
        </div>
        <div class="play-list">
            <a>1024高清中英双子MKV版</a>
        </div>
    </div>
    <div class="mox">
        <div class="title">
            <span>
                <img src=""/>
            </span>
        </div>
        <div class="downlist"></div>

    </div>
</div>
<script>
    dynamicLoading.css('/Application/Home/Public/Css/detail.css');
</script
</div>
<div id="footer">
    <p>免责声明:如果侵犯了你的权益，请发邮件至：xunbocc@foxmail.com，我们会及时删除侵权内容，谢谢合作！</p>
    <p>Copyright &copy; 2014 2tu.cc. All Rights Reserved.
        <a title="站长统计" target="_blank" href="http://www.cnzz.com/stat/website.php?web_id=1908774">站长统计</a>
        <a target="_blank" href="http://tongji.baidu.com/hm-web/welcome/ico?s=56d36efc1d26755102490a81574f120d">网站统计</a>
    </p>
</div>
</body>
</html>