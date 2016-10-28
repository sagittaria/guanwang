<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" name="viewport" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>关于纽蓝</title>
<!--nav css-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--banner css-->
<script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.plugin.min.js') }}" type="text/javascript"></script>
<!--nl css-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}"/>
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
	      				<li class="drop-menu-effect"><a href="index.html"><span>首页</span></a></li>
	      				<li class="drop-menu-effect"><a href="#"><span>解决方案</span></a>
	        				<div class="submenu" style="left:-100px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                  							<a href="#">生命科学</a><br />
	                  							<a href="#">化工与环境</a><br />
	                  							<a href="#">食品安全</a><br />
	                  							<a href="#">能源</a><br />
	                  							<a href="#">研究</a><br />
	                  							<a href="#">制药</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic.jpg') }}" /><br />
	                					<font>解决方案</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>      
	      				<li class="drop-menu-effect"><a href="#"><span>产品与服务</span></a>
	        				<div class="submenu" style="left:-125px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                  							<a href="#">公司新闻</a><br />
	                  							<a href="#">行业新闻</a><br />
	                  							<a href="#">行业新闻</a><br />
	                  							<a href="#">行业新闻</a><br />
	                  							<a href="#">展会信息</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic.jpg') }}" /><br />
	                					<font>服务支持</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>      
	      				<li class="drop-menu-effect"> <a href="About.html"><span>关于纽蓝</span></a>
	        				<div class="submenu" style="left:-220px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                							<a href="About.html">公司简介</a><br />	                  							
							                  	<a href="#">公司动态</a><br />
							                  	<a href="#">组织结构</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic.jpg') }}" /><br />
	                					<font>关于纽蓝</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>      
	      				<li class="drop-menu-effect"> <a href="Contact.html"><span>联系我们</span></a>	        				
	      				</li>      
	      				<li class="drop-menu-effect"> <a href="Member.html"><span class="buy">纽蓝成员</span></a>
	      					<div class="submenu" style="left:-415px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                  							<a href="#">晶百检测</a><br />
	                  							<a href="#">晶佰生物</a><br />
							                  	<a href="#">爱科学</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic.jpg') }}" /><br />
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
					<a href="#" class="title">关于纽蓝</a>
					<a href="#">公司简介</a>
					<a href="#">公司动态</a>
					<a href="#">组织结构</a>
				</div>
				<div class="box">
					<a href="#" class="title">解决方案</a>
					<a href="#">生命科学</a>
					<a href="#">化工与环境</a>
					<a href="#">食品安全</a>
					<a href="#">能源</a>
					<a href="#">研究</a>
					<a href="#">制药</a>
				</div>
				<div class="box">
					<a href="#" class="title">纽蓝成员</a>
					<a href="#">晶百检测</a>
					<a href="#">晶佰生物</a>
					<a href="#">爱科学</a>
				</div>
				<div class="box" style="margin-right: 0;">
					<a href="#" class="title">联系我们</a>
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
				<li><a href="#">联系我们</a><span>丨</span>客服电话:400-0717-168</li>
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