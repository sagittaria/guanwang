<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" name="viewport" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>纽蓝科技</title>
<!--nav css-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--banner css-->
<script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.plugin.min.js') }}" type="text/javascript"></script>
<!--nl css-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/new_index.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/'.$cssname) }}"/>
</head>

<body>
<!--top-->
<div id="top">	
	<div class="down">
	    <div class="center">
	        <div class="logo fl">
	            <a href="index.html"><img class="logo1" src="{{ asset('images/logo.jpg') }}" /></a>
	            <h2>杭州纽蓝科技有限公司</h2>
	        </div>
	        <div class="menu fr">
	            <div class="navbox">
	  				<div class="nav">
	      				<li class="drop-menu-effect"><a href="/"><span>首页</span></a></li>
	      				<li class="drop-menu-effect"><a href="{{ url('/solution') }}"><span>解决方案</span></a>
	        				<div class="submenu" style="left:-100px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                  							<a href="{{ url('/solution') }}">生命科学</a><br />
	                  							<a href="{{ url('/solution/1') }}">化工与环境</a><br />
	                  							<a href="{{ url('/solution/2') }}">食品安全</a><br />
	                  							<a href="{{ url('/solution/3') }}">能源</a><br />
	                  							<a href="{{ url('/solution/4') }}">研究</a><br />
	                  							<a href="{{ url('/solution/5') }}">制药</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic2.jpg') }}" /><br />
	                					<font>解决方案</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>      
	      				<li class="drop-menu-effect"><a href="{{ url('/product') }}"><span>产品与服务</span></a>
	        				<div class="submenu" style="left:-113px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt" style="float: left;margin-right: 20px;">
	                  							<a href="#">化学分析仪器</a><br />
	                  							<a href="#">光学仪器</a><br />
	                  							<a href="#">物性测试</a><br />
	                  							<a href="#">行业专用仪器</a><br />
	                  							<a href="#">生命科学仪器</a>
	                						</div>
	                						<div class="mj_menu_li_txt" style="float: left;">
	                							<a href="#">环境监测仪器</a><br />
	                							<a href="#">实验室常用设备</a><br />
	                  							<a href="#">试剂/耗材</a><br />
	                  							<a href="#">技术服务</a><br />
	                  							<a href="#">纽蓝产品</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic.jpg') }}" /><br />
	                					<font>产品与服务</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>
	      				<li class="drop-menu-effect"> <a href="{{ url('/news') }}"><span>新闻中心</span></a>
	      					<div class="submenu" style="left:-222px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                							<a href="{{ url('/news') }}">公司动态</a><br />							                 	
							                  	<a href="{{ url('/news/1') }}">活动信息</a><br />
							                  	<a href="{{ url('/news/2') }}">行业动态</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic3.jpg') }}" /><br />
	                					<font>新闻中心</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>
	      				<li class="drop-menu-effect"> <a href="{{ url('/about') }}"><span>关于纽蓝</span></a>
	        				<div class="submenu" style="left:-320px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                							<a href="{{ url('/about') }}">公司简介</a><br />							                 	
							                  	<a href="{{ url('/about/2') }}">组织结构</a><br />
							                  	<a href="{{ url('/about/3') }}">人才战略</a><br />
							                  	<a href="{{ url('/about/5') }}">联系我们</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic3.jpg') }}" /><br />
	                					<font>关于纽蓝</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>	      				     
	      				<li class="drop-menu-effect"> <a href="{{ url('/members') }}"><span class="buy">纽蓝成员</span></a>
	      					<div class="submenu" style="left:-415px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                  							<a href="{{ url('/member/1') }}">晶百检测</a><br />
	                  							<a href="{{ url('/member/2') }}">晶佰生物</a><br />
							                  	<a href="{{ url('/member/3') }}">爱科学商城</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic1.jpg') }}" /><br />
	                					<font>纽蓝成员</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>
	    			</div>
				</div>
				<script src="{{ asset('js/jquery.min.js') }}"></script>
				<script>
				$(function(){
					lanrenzhijia(".drop-menu-effect");
				});
				function lanrenzhijia(_this){
					$(_this).each(function(){
						var $this = $(this);
						var theMenu = $this.find(".submenu");
						var tarHeight = theMenu.height();
						theMenu.css({height:0});
						$this.hover(
							function(){
								$(this).addClass("mj_hover_menu");
								theMenu.stop().show().animate({height:tarHeight},400);
							},
				function(){
					$(this).removeClass("mj_hover_menu");
						theMenu.stop().animate({height:0},400,function(){
						$(this).css({display:"none"});
								});
							}
						);
					});
				}
				</script>
	        </div>
	    </div>
	</div>
</div>
<!--top end-->

<!--banner-->

<!--banner end-->

<!--content-->
@yield('content')

<!--content end-->

<!--footer-->
<div id="footer">	
	<div class="up">
		<div class="center">
			<div class="left fl">
				<div class="box">
					<a href="About.html" class="title">关于纽蓝</a>
					<a href="About.html">公司简介</a>					
					<a href="About2.html">组织结构</a>
					<a href="About3.html">人才战略</a>
					<a href="About5.html">联系我们</a>
				</div>
				<div class="box">
					<a href="Solution.html" class="title">解决方案</a>
					<a href="Solution.html">生命科学</a>
					<a href="Solution1.html">化工与环境</a>
					<a href="Solution2.html">食品安全</a>
					<a href="Solution3.html">能源</a>
					<a href="Solution4.html">研究</a>
					<a href="Solution5.html">制药</a>
				</div>
				<div class="box">
					<a href="Member.html" class="title">纽蓝成员</a>
					<a href="http://www.gbiotest.com/">晶百检测</a>
					<a href="http://igeneseq.com/">晶佰生物</a>
					<a href="http://www.iscimart.com/">爱科学商城</a>
				</div>
				<div class="box" style="margin-right: 0;">
					<a href="About5.html" class="title">联系我们</a>
					<li>地址：杭州市西湖区振华路210号2幢2楼</li>
					<li>公司电话-0571-86800217</li>
					<li>热线：40-0717-168</li>
				</div>
			</div>
			<div class="right fr">
				<img src="{{ asset('images/about_03.jpg') }}"/>
				<li>官方微信</li>
			</div>
		</div>	
	</div>
	<div class="down">
		<div class="center">
			<div class="left fl">
				<li><a href="About5.html">联系我们</a><span>丨</span>客服电话:400-0717-168</li>
			</div>
			<div class="right fr">
				<li>杭州纽蓝科技有限公司--版权所有 浙ICP备11030739号</li>
			</div>
		</div>		
	</div>
</div>
<!--footer end-->
</body>
</html>