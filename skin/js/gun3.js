window.onload=function(){
new Marquee(
"scroll",  //容器ID<br />
0,  //向上滚动(0向上 1向下 2向左 3向右)<br />
1,  //滚动的步长<br />
1195,  //容器可视宽度<br />
446,  //容器可视高度<br />
45,  //定时器 数值越小，滚动的速度越快(1000=1秒,建议不小于20)<br />
0,  //1000,间歇停顿时间(0为不停顿,1000=1秒)<br />
0,  //开始时的等待时间(0为不等待,1000=1秒)<br />
239//间歇滚动间距(可选)<br />
);
};