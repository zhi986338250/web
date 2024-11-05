<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{pboot:if('{sort:title}'=='')}{pboot:pagetitle}{else}{sort:title}{/pboot:if}</title>
<meta name="keywords" content="{pboot:if('{sort:keywords}'=='')}{pboot:pagekeywords}{else}{sort:keywords}{/pboot:if}">
<meta name="description" content="{pboot:if('{sort:description}'=='')}{pboot:pagedescription}{else}{sort:description}{/pboot:if}">
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
<!--中间-->
<div class="wik pa1 oveh">
    <!--左边-->
<div class="wfl wk1">
  <div class="fenk oveh"> {pboot:sort scode={sort:tcode}}
    <div class="fent">[sort:name] <br />
      <span>[sort:subname]</span></div>
    {/pboot:sort}
    <div class="fenm">
      <ul>
        {pboot:if({sort:tcode}==3)}
        {pboot:nav parent={sort:tcode}}
        <li {pboot:2if([nav:scode]=={sort:scode})}class="cuh"{/pboot:2if}><a href="[nav:link]">[nav:name]</a></li>
        {/pboot:nav}
        {else}
        <li><a href="{sort:link}">{sort:name}</a></li>
        {/pboot:if}
      </ul>
    </div>
    <div class="fend">
      <div class="fendt">联系我们 <span>Contact Us</span></div>
      <div>
        <table width="197" border="0" cellspacing="0" cellpadding="0" class="ke-zeroborder">
          <tbody>
            <tr>
              <td valign="top"><span>手机：</span></td>
              <td valign="top"> {pboot:companymobile}<span><br />
                </span></td>
            </tr>
            <tr>
              <td valign="top"><span>电话：</span></td>
              <td valign="top"><span>{pboot:companyphone}</span></td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td width="43" valign="top"><span>传真：</span></td>
              <td width="154" valign="top"><span>{pboot:companyfax}</span></td>
            </tr>
            <tr>
              <td valign="top"><span>地址：</span></td>
              <td valign="top"><span>{pboot:companyaddress}</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--左边end-->
    <!--右边-->
    <div class="wfr wk2">
        <div class="lmt oveh">
            <p class="lmt_1">{sort:name}</p>
            <p class="lmt_2">您的位置：{pboot:position separator=' > '}</p>
        </div>
        <div class="wk2">
            <ul class="pro">
                {pboot:list num=9 order=sorting}
                <li class="anm2">
                    <a href="[list:link]" target="_blank">
                        <p class="oveh"><img src="[list:ico]" alt="[list:title]" /></p>
                        <h3>[list:subtitle]&nbsp;&nbsp;<i>￥[list:ext_price]</i></h3>
                    </a>
                </li>
                {/pboot:list}
            </ul>
        </div>
        <div class="ym">
            <a href="{page:index}">首页</a>
            <a href="{page:pre}">上一页</a>
            {page:numbar}
            <a href="{page:next}">下一页</a>
            <a href="{page:last}">尾页</a>
            <a>{page:status}</a>
            <div class="clear"></div>
            <div class="clear"></div>
        </div>
    </div>
    <!--右边end-->
</div>
<!--中间end-->
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
  1 => '/www/wwwroot/maitest.com/template/default/comm/left.html',
  2 => '/www/wwwroot/maitest.com/template/default/comm/foot.html',
); ?>