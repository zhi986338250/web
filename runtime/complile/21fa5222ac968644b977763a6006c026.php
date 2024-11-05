<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
<meta name="author" content="www.pb2345.com"/>
<link href="{pboot:sitedomain}/skin/css/css.css" rel="stylesheet" type="text/css" />
<link href="{pboot:sitedomain}/skin/css/nav_menu.css" rel="stylesheet" type="text/css" />
<link href="{pboot:sitedomain}/skin/css/banner.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{pboot:sitedomain}/skin/css/aos.css" />
<link rel="stylesheet" href="{pboot:sitedomain}/skin/css/iconfont.css">
<link rel="stylesheet" href="{pboot:sitedomain}/skin/css/swiper.min.css">
<script type="text/javascript" src="{pboot:sitedomain}/skin/js/jquery.min.js"></script>
<script type="text/javascript" src="{pboot:sitedomain}/skin/js/nav.js"></script>
<!--[if IE 6]><script src="{pboot:sitedomain}/skin/js/iepng.js" type="text/javascript"></script><![endif]-->
<!--图片滚动通用脚本-->
<script src="{pboot:sitedomain}/skin/js/swiper.min.js"></script>
<script src="{pboot:sitedomain}/skin/js/swiperb.js"></script>
<!--/图片滚动通用脚本-->
</head>

<body>
<!--头部--> 
<div class="tok oveh">
  <div class="wik">
    <div class="tot1">{label:top}</div>
    <div class="tot2"> 咨询电话： {pboot:companyphone} </div>
  </div>
</div>
<div class="wik">
  <div class="logo"><a href="{pboot:sitedomain}/"><img src="{pboot:sitelogo}"></a></div>
  <div class="nav">
    <div class="nav_menu">
      <ul>
        <li><a href="{pboot:sitedomain}/" {pboot:if(0=='{sort:scode}')}class="nah"{/pboot:if}>首页<br />
          <span>Home</span></a></li>
        {pboot:nav}
        <li><a {pboot:if('[nav:scode]'=='{sort:tcode}')}class="nah"{/pboot:if} href="[nav:link]">[nav:name]<br />
          <span>[nav:subname]</span></a> {pboot:if([nav:soncount]>0)}
          <ul>
            {pboot:2nav parent=[nav:scode]}
            <li><a href="[2nav:link]">[2nav:name]</a></li>
            {/pboot:2nav}
          </ul>
          {/pboot:if} </li>
        {/pboot:nav}
      </ul>
    </div>
  </div>
</div>
<div class="bak oveh">
  <div class="flexslider">
    <ul class="slides">
      {pboot:slide gid=1 num=10}
      <li style="background:url([slide:src]) no-repeat top center;"><a href="[slide:link]"></a></li>
      {/pboot:slide}
    </ul>
  </div>
  <script src="{pboot:sitedomain}/skin/js/jquery.flexslider-min.js"></script> 
  <script>
        $(function() {
            $('.flexslider').flexslider({
                directionNav: true,
                pauseOnAction: false,
                slideshow: true,
                slideshowSpeed: 4000,
            });
        });
        </script> 
</div> 
<!--/头部--> 
<!--1-->
<div class="wb1 pa2">
  <div class="wik">
    <div class="tti"> <em class="t3">我们的发展目标是，创出源自中国的世界品牌！</em>
      <p></p>
      <span class="t1">- <i>关于我们</i> -</span> </div>
    <div class="abk">
      <div class="abu"> {pboot:sort scode=5} <a href="[sort:link]"><img src="{pboot:sitedomain}/skin/images/ab1.png" alt="" class="anm1"></a> {/pboot:sort}
        {pboot:sort scode=2} <a href="[sort:link]"><img src="{pboot:sitedomain}/skin/images/ab2.png" alt="" class="anm1"></a> {/pboot:sort}
        {pboot:sort scode=3} <a href="[sort:link]"><img src="{pboot:sitedomain}/skin/images/ab3.png" alt="" class="anm1"></a> {/pboot:sort} </div>
      <div class="abn">
        <p> 主营产品：冲击夯，夯实机，压路机，切割机，抹光机，铣刨机 </p>
        <p> 适用行业：高等级公路，边疆建设，基础建设，出口援建项目等 </p>
        <p>选择优势：先进设备、科学管理、专家级团队、国际先进技术、良好的售后</p>
      </div>
      <div class="abtu"> 
      {pboot:pics id=18 num=3}<img src="[pics:src]" alt=""> 
      {/pboot:pics}
       </div>
    </div>
  </div>
</div>
<!--/1--> 
<!--2-->
{pboot:sort scode=3}
<div class="wb2 pa1">
  <div class="wik">
    <div class="tti"> <em class="t2">[sort:subname]</em>
      <p></p>
      <span class="t2">- <i>[sort:name]</i> -</span> </div>
    <div class="wik" id="pro_list">
      <ul class="pros he2">
        {pboot:list scode=[sort:scode] num=8 order=sorting}
        <li class="anm2"> <a href="[list:link]" target="_blank">
          <p class="oveh"><img src="[list:ico]" alt="[list:title]" /></p>
          <h3>[list:subtitle]&nbsp;&nbsp;<i>￥[list:ext_price]</i></h3>
          </a> </li>
        {/pboot:list}
      </ul>
    </div>
    <script type="text/javascript" src="{pboot:sitedomain}/skin/js/gun.js"></script> 
    <a href="[sort:link]" class="bu bu1 bory">更多 MORE</a> </div>
</div>
{/pboot:sort}
<!--/2--> 
<!--3-->
{pboot:sort scode=5}
<div class="wik pa1">
  <div class="tti"> <span class="t1">- <i>[sort:name]</i> -</span>
    <p></p>
    <em class="t4">[sort:subname]</em> </div>
  <script type="text/javascript" src="{pboot:sitedomain}/skin/js/gun2.js"></script>
  <div class="prol" id="scroll">
    <ul>
      {pboot:list scode=[sort:scode] num=12 order=sorting}
      <li class="anm2"> <a href="[list:link]" target="_blank">
        <p class="oveh"><img src="[list:ico]" alt="[list:description lencn=10]"></p>
        </a> </li>
      {/pboot:list}
    </ul>
  </div>
  <script type="text/javascript" src="{pboot:sitedomain}/skin/js/gun3.js"></script> 
  <a href="[sort:link]" class="bu bu3 bory">更多 MORE</a> </div>
<!--/3--> 
{/pboot:sort}
<!--底部-->
<div class="dwb oveh">
  <div class="wik">
    <div class="dw1"> <img src="{pboot:companyweixin}" width="128" height="128" alt="" /><br />
    </div>
    <div class="dw2">
      <div class="dw3"> <a href="{pboot:sitedomain}/">首页</a> {pboot:nav num=7} <span>/</span> <a href="[nav:link]">[nav:name]</a> {/pboot:nav} </div>
      <div class="dw4">
        <p> {pboot:sitecopyright} </p>
        <p><a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">{pboot:siteicp}</a> <a href="{pboot:sitedomain}/index.php/sitemap.xml" target="_blank">XML地图</a> 技术支持：<a href="https://www.pb2345.com/" target="_blank">PB2345</a> {pboot:sitestatistical}</p>
      </div>
    </div>
  </div>
</div>
<!--/底部--> 
<!--浮动-->
<div class="suspension">
  <div class="suspension-box"> <a href="javascript:;" class="a a-top"><i class="i"></i></a> </div>
</div>
<script type="text/javascript" src="{pboot:sitedomain}/skin/js/ce.js"></script> 
<!--浮动--> 
<!--动画脚本--> 
<script src="{pboot:sitedomain}/skin/js/scrollReveal.js"></script> 
<script>
(function() {
    window.scrollReveal = new scrollReveal({ reset: true, move: '50px' });
})();
</script> 
<script type="text/javascript" src="{pboot:sitedomain}/skin/js/aos.js"></script> 
<script type="text/javascript">
AOS.init({
    easing: 'ease-out-back',
    duration: 1000
});
</script> 
<script>
$('.hero__scroll').on('click', function(e) {
    $('html, body').animate({
        scrollTop: $(window).height()
    }, 1200);
});
</script> 
<!--/动画脚本--> 


</body>
</html><?php return array (
  0 => '/www/wwwroot/maitest.com/template/default/comm/top.html',
  1 => '/www/wwwroot/maitest.com/template/default/comm/foot.html',
); ?>