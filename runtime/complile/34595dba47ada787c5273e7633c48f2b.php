<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<meta name="format-detection" content="telephone=no">
<title>{pboot:if('{sort:title}'=='')}{pboot:pagetitle}{else}{sort:title}{/pboot:if}</title>
<meta name="keywords" content="{pboot:if('{sort:keywords}'=='')}{pboot:pagekeywords}{else}{sort:keywords}{/pboot:if}">
<meta name="description" content="{pboot:if('{sort:description}'=='')}{pboot:pagedescription}{else}{sort:description}{/pboot:if}">
<link href="{pboot:sitedomain}/m/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{pboot:sitedomain}/m/css/swiper.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/m/css/animate.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/m/css/iconfont.css">
<link rel="stylesheet" href="{pboot:sitedomain}/m/css/drawer.min.css">
<script src="{pboot:sitedomain}/m/js/jquery.min.js"></script>
<script type="text/javascript" src="{pboot:sitedomain}/m/js/m.js"></script>
<script src="{pboot:sitedomain}/m/js/swiper.min.js"></script>
<script src="{pboot:sitedomain}/m/js/swiper.animate.min.js"></script>
<script type="text/javascript" src="{pboot:sitedomain}/m/js/iscroll.js"></script>
<script type="text/javascript" src="{pboot:sitedomain}/m/js/jquery.drawer.min.js"></script>
<script type="text/javascript" src="{pboot:sitedomain}/m/js/op.js"></script>
<script type="text/javascript" src="{pboot:sitedomain}/m/js/97zzw.js"></script>
<script type="text/javascript" src="{pboot:sitedomain}/m/js/tot.js"></script>
</head>
<body class="drawer drawer-right">
<!--导航-->
<div class="drawer-main drawer-default">
  <div class="drawer-nav">
    <div class="pa1">
      <div class="nav">
        <ul>
          <li><a href="{pboot:sitedomain}/">首页 Home<i class="icon iconfont icon-jiantou1"></i></a></li>
          {pboot:nav}
          <li><a href="[nav:link]">[nav:name] [nav:subname]<i class="icon iconfont icon-jiantou1"></i></a></li>
          {/pboot:nav}
        </ul>
      </div>
    </div>
  </div>
</div>
<!--/导航--> 
<!--头部-->
<header class="topk">
  <div class="topp wbt he1" id="header">
    <div class="tom"><a href="{pboot:sitedomain}/"><img src="{pboot:sitelogo}" alt="" /></a></div>
    <div class="tor"> <a href="javascript:void(0)"><i class="icon iconfont icon-fenlei js-trigger"></i></a> </div>
  </div>
</header>
<!--/头部-->
<div class="he1"></div>
<section id="banner">
  <div class="swipe">
    <ul id="slider">
      {pboot:slide gid=2 num=10}
      <li><img src="[slide:src]" alt="" /></li>
      {/pboot:slide}
    </ul>
    <div id="pagenavi"> <a href="javascript:void(0);" class="active"></a> <a href="javascript:void(0);"></a> </div>
  </div>
  <script type="text/javascript" src="{pboot:sitedomain}/m/js/touchScroll.js"></script> 
  <script type="text/javascript" src="{pboot:sitedomain}/m/js/touchslider.dev.js"></script> 
  <script type="text/javascript" src="{pboot:sitedomain}/m/js/banner.js"></script> 
</section>

<section class="pa1">
    <div class="menu2">
	{pboot:nav parent={sort:tcode}}
    <a {pboot:if('[nav:scode]'=='{sort:scode}')}class="cuh"{/pboot:if} href="[nav:link]">[nav:name]</a>
    {/pboot:nav}
</div>
    <ul class="pros oveh">
        {pboot:list num=10 order=sorting}
        <li>
            <a href="[list:link]" target="_blank">
                <p><img src="[list:ico]" alt="[list:title]" /></p>
                <h3>[list:subtitle]&nbsp;<i>￥:[list:ext_price]</i></h3>
            </a>
        </li>
        {/pboot:list}
    </ul>
    <div class="ym">
        <a href="{page:pre}">上一页</a>
        {page:numbar}
        <a href="{page:next}">下一页</a>
        <div class="clear"></div>
        <div class="clear"></div>
    </div>
</section>
<div class="foot">{pboot:sitecopyright}</div>
<footer class="down">
    <ul>
        <li>
            <a href="{pboot:sitedomain}/">
                <i class="icon iconfont icon-ai-home"></i>
                <span>首页</span>
            </a>
        </li>
        <li>
            <a href="tel:{pboot:companymobile}">
                <i class="icon iconfont icon-dianhua"></i>
                <span>电话</span>
            </a>
        </li>
        <li>
            {pboot:sort scode=7}<a href="[sort:link]">
                <i class="icon iconfont icon-address"></i>
                <span>联系</span>
            </a>{/pboot:sort}
        </li>
        <li class="dos">
            <a href="javascript:void(0)" id="totop">
                <i class="icon iconfont icon-4fanhuidingbucheng"></i>
            </a>
        </li>
    </ul>
</footer>

</body>
</html><?php return array (
  0 => '/www/wwwroot/maitest.com/template/default/wap/comm/top.html',
  1 => '/www/wwwroot/maitest.com/template/default/wap/comm/inav.html',
  2 => '/www/wwwroot/maitest.com/template/default/wap/comm/foot.html',
); ?>