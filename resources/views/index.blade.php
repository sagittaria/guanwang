<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" name="viewport" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>首页</title>
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
        <![endif]-->
<!--nav css-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--banner css-->
<script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.plugin.min.js') }}" type="text/javascript"></script>
<!--nl css-->
<link href="{{ asset('css/index.css') }}" type="text/css" rel="stylesheet" />
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
	      				<li class="drop-menu-effect"><a href="Solution.html"><span>解决方案</span></a>
	        				<div class="submenu" style="left:-100px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                  							<a href="Solution.html">生命科学</a><br />
	                  							<a href="Solution1.html">化工与环境</a><br />
	                  							<a href="Solution2.html">食品安全</a><br />
	                  							<a href="Solution3.html">能源</a><br />
	                  							<a href="Solution4.html">研究</a><br />
	                  							<a href="Solution5.html">制药</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic2.jpg') }}" /><br />
	                					<font>解决方案</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>      
	      				<li class="drop-menu-effect"><a href="Product.html"><span>产品与服务</span></a>
	        				<div class="submenu" style="left:-125px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt" style="float: left;margin-right: 20px;">
	                  							<a href="http://www.iscimart.com/">化学分析仪器</a><br />
	                  							<a href="http://www.iscimart.com/">光学仪器</a><br />
	                  							<a href="http://www.iscimart.com/">物性测试</a><br />
	                  							<a href="http://www.iscimart.com/">行业专用仪器</a><br />
	                  							<a href="http://www.iscimart.com/">生命科学仪器</a>
	                						</div>
	                						<div class="mj_menu_li_txt" style="float: left;">
	                							<a href="http://www.iscimart.com/">环境监测仪器</a><br />
	                							<a href="http://www.iscimart.com/">实验室常用设备</a><br />
	                  							<a href="http://www.iscimart.com/">试剂/耗材</a><br />
	                  							<a href="http://www.iscimart.com/">技术服务</a><br />
	                  							<a href="http://www.iscimart.com/">纽蓝产品</a>
	                						</div>
	              						</div>
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic.jpg') }}" /><br />
	                					<font>产品与服务</font></div>
	              						<div style="clear:both; height:0px; overflow:hidden;"></div>
	            					</div>
	          					</div>
	        				</div>
	      				</li>
	      				<li class="drop-menu-effect"> <a href="News.html"><span>公司动态</span></a>	        				
	      				</li>
	      				<li class="drop-menu-effect"> <a href="About.html"><span>关于纽蓝</span></a>
	        				<div class="submenu" style="left:-320px;">
	          					<div class="mj_menu_news_bg">
	            					<div class="mj_menu_news_main">
	              						<div class="mj_menu_news_li">
	                						<div class="mj_menu_li_txt">
	                							<a href="About.html">公司简介</a><br />							                 	
							                  	<a href="About2.html">组织结构</a><br />
							                  	<a href="About3.html">人才战略</a><br />
							                  	<a href="About5.html">联系我们</a>
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
<div id="banner">
    <ul id="banner_img">
        <li class="item1">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>互联网品牌传播解决方案</h2>
                    <p>
					成都顶级品牌网站建设公司-锐狐网络。<br />
					基于互联网的品牌行销策略的策划与执行。<br />
					品牌形象挖掘、梳理、包装、表现与传播。<br />
					辅助企业实现品牌战略目标的互联网解决方案。
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120905092323647.png') }}" width="406" height="304" alt="互联网品牌传播解决方案" />
                </div>
            </div>
        </li>
        <li class="item2">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>Web应用(B/S)定制开发</h2>
                    <p>
					自主研发、完善的开发框架。<br />
					详细的需求调研及解决方案。<br />
					实施项目经验丰富的项目团队。
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120830015430148.png') }}" width="406" height="304" alt="Web应用(B/S)定制开发" />
                </div>
            </div>
        </li>
        <li class="item3">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>互联网时代的整合营销</h2>
                    <p>
					基于互联网的品牌营销策略的定制与执行。<br />
					品牌形象挖掘、梳理、包装、表现与传播。<br />
					坐拥着最为丰富的行业经验与优势资源。
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120830015446637.png') }}" width="406" height="304" alt="互联网时代的整合营销" />
                </div>
            </div>
        </li>
        <li class="item4">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>您的网站全职管家</h2>
                    <p>
					成熟的监控与报警机制。<br />
					丰富的整合营销的能力和经验。<br />
					专业数据分析、开发和维护部门。
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120830015615324.png') }}" width="406" height="304" alt="您的网站全职管家" />
                </div>
            </div>
        </li>
        <li class="item5">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>智慧点亮网络(RUIFOX-LAB)</h2>
                    <p>
					互联网改变世界，我们改变互联网。<br />
					精彩前沿技术演练场。<br />
					锐狐新产品尝鲜体验。
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120830015726137.png') }}" width="406" height="304" alt="智慧点亮网络(RUIFOX-LAB)" />
                </div>
            </div>
        </li>
        <li class="item6">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>全新的学术会议体验</h2>
                    <p>
					工作更高效，主办方更轻松。<br />
					线上报名，让主办方不再为报名的事而费尽脑筋。<br />
					线上投稿、审稿，为主办方提高收寄、审稿效率。<br />
					酒店预订，会议行程更加轻松。
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120830015651273.png') }}" width="406" height="304" alt="全新的学术会议体验" />
                </div>
            </div>
        </li>
        <li class="item7">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>NeoLab智能恒温水箱</h2>
                    <p>
					采用PID温控技术，高精度温控，高稳定性<br />
					4.3寸高清触摸屏，实时显示温度控制曲线<br />
					程序控温，满足个性化控温需求<br />
					支持温控数据输出<br />
					具备防干烧、高低温报警功能<br />
					具备网口、WIFI，实现手机APP远程监控、故障报警；<br />
					支持远程软件升级、故障诊断
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120830015711808.png') }}" width="406" height="304" alt="医院网站管理系统(HMS)" />
                </div>
            </div>
        </li>        
    </ul>
    <div id="banner_ctr">
        <div id="drag_ctr"></div>
        <ul>
            <li class="first-item">网站建设</li>
            <li>生命科学</li>
            <li>应用系统开发</li>
            <li>网络整合营销</li>
            <li>网络运维托管</li>
            <li>手机APP开发</li>
            <li>学术会议系统</li>
            <li>医院网站系统</li>
            <li class="last-item">网站设计</li>
        </ul>
        <div id="drag_arrow"></div>
    </div>
</div>
<script src="{{ asset('js/fashionfoucs.js') }}"></script>
<!--banner end-->

<!--footer-->
<div id="footer">
	<div class="center">
		<div class="left fl">
			<li><a href="About5.html">联系我们</a><span>丨</span>客服电话:400-0717-168</li>
		</div>
		<div class="right fr">
			<li>杭州纽蓝科技有限公司--版权所有 浙ICP备11030739号</li>
		</div>
	</div>
</div>
<!--footer end-->
</body>
</html>