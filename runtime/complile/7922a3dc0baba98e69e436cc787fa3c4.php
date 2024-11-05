<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<meta name="format-detection" content="telephone=no">
<title>{pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
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

<section class="wb1 pa1 oveh">
  <div class="tti"> <em class="t3">我们的发展目标是，创出源自中国的世界品牌！</em>
    <p></p>
    <span class="t1">- <i>关于我们</i> -</span> </div>
  <div class="abu pa2"> {pboot:sort scode=5} <a href="[sort:link]"><img src="{pboot:sitedomain}/m/images/ab1.png" alt="" class="anm1"></a> {/pboot:sort}
    {pboot:sort scode=2} <a href="[sort:link]"><img src="{pboot:sitedomain}/m/images/ab2.png" alt="" class="anm1"></a> {/pboot:sort}
    {pboot:sort scode=3} <a href="[sort:link]"><img src="{pboot:sitedomain}/m/images/ab3.png" alt="" class="anm1"></a> {/pboot:sort} </div>
  <div class="abn pa2"> <span>主营产品：冲击夯，夯实机，压路机，切割机，抹光机，铣刨机</span><span>适用行业：高等级公路，边疆建设，基础建设，出口援建项目等</span><span>选择优势：先进设备、科学管理、专家级团队、国际先进技术、良好的售后</span> </div>
  <div class="abtu pa2">
  {pboot:pics id=18 num=3}<img src="[pics:src]" alt=""> 
      {/pboot:pics}
  </div>
</section>
{pboot:sort scode=3}
<section class="wb2 pa1 oveh">
  <div class="tti"> <em class="t2">[sort:subname]</em>
    <p></p>
    <span class="t2">- <i>[sort:name]</i> -</span> </div>
  <ul class="pros oveh">
    {pboot:list scode=[sort:scode] num=4 order=sorting}
    <li> <a href="[list:link]" target="_blank">
      <p><img src="[list:ico]" alt="[list:title]" /></p>
      <h3>[list:subtitle]&nbsp;<i>￥:[list:ext_price]</i></h3>
      </a> </li>
    {/pboot:list}
  </ul>
   <a href="[sort:link]" class="bu bu1 bory">更多 MORE</a> </section>
 {/pboot:sort}
{pboot:sort scode=5}
<section class="pa1 oveh">
  <div class="tti"> <span class="t1">- <i>[sort:name]</i> -</span>
    <p></p>
    <em class="t4">[sort:subname]</em> </div>
  <div class="prol oveh">
    <ul>
      {pboot:list scode=[sort:scode] num=8 order=sorting}
      <li> <a href="[list:link]" target="_blank">
        <p><img src="[list:ico]" alt="[list:description lencn=10]"></p>
        </a> </li>
      {/pboot:list}
    </ul>
  </div>
   <a href="[sort:link]" class="bu bu2 bory">更多 MORE</a>  </section>
   {/pboot:sort}
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
  1 => '/www/wwwroot/maitest.com/template/default/wap/comm/foot.html',
); ?>