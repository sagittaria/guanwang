<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" name="viewport" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>首页</title>
<!--nl css-->
<link href="{{ asset('css/index.css') }}" type="text/css" rel="stylesheet" />
</head>

<body>
<!--top-->
<div id="top">	
	<div class="down">
	    <div class="center">
	        <div class="logo fl">
	            <a href="/"><img class="logo1" src="{{ asset('images/logo.jpg') }}" /></a>
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
	              						<div class="mj_menu_news_img"><img src="{{ asset('images/case_menu_pic4.jpg') }}" /><br />
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
				};
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
                    <h2>测定基因序列，预测疾病患病风险</h2>
                    <p>
					重大疾病风险预测.<br />
					新生儿疾病筛查.<br />
					药物开发.<br />
					法医基因组学.
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
                    <h2>关注空气和水质，改善生活环境</h2>
                    <p>
					PM2.5浓度监测方案.<br />
					污染源烟尘烟气检测.<br />
					水质COD全自动检测.<br />
					Ph/氟离子全自动检测.<br />
					水中重金属、微生物检测.
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
                    <h2>聚焦食品安全，享受健康生活</h2>
                    <p>
					食品微生物检测.<br />
					农兽药残留检测.<br />
					营养素含量检测.<br />
					包装材料安全检测.<br />
					重金属等有毒有害物质检测.
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
                    <h2>电池行业品质检测，助力电池行业的发展</h2>
                    <p>
					正负极材料表征检测.<br />
					浆料流变性、触变性研究.<br />
					极片、粉料形貌分析.<br />
					膈膜性能检测.<br />
					隔膜、电解液中水分含量检测.<br />
					电解液有机物、阴阳离子含量分析.
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
                    <h2>创新基因测序技术，造福人类</h2>
                    <p>
					食品微生物研究.<br />
					农业育种研究.<br />
					肿瘤研究.
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
                    <h2>监控药物质量，维护生命安全</h2>
                    <p>
					药品安全检测.<br />
					药物成分检测.<br />
					药物特性检测.<br />
					药品重金属检测.
                    </p>
                    <a href="#" target="_blank">了解详细&gt;</a>
                </div>
                <div class="ad_img">
                    <img src="{{ asset('images/20120830015651273.png') }}" width="406" height="304" alt="制药" />
                </div>
            </div>
        </li>
        <li class="item7">
            <div class="wrapper">
                <div class="ad_txt">
                    <h2>NeoLab智能恒温水箱</h2>
                    <p>
					采用PID温控技术，高精度温控，高稳定性.<br />
					4.3寸高清触摸屏，实时显示温度控制曲线.<br />
					程序控温，满足个性化控温需求.<br />
					支持温控数据输出.<br />
					具备防干烧、高低温报警功能.<br />
					具备网口、WIFI，实现手机APP远程监控、故障报警.<br />
					支持远程软件升级、故障诊断.
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
            <li>化工与环境</li>
            <li>食品安全</li>
            <li>能源</li>
            <li>研究</li>
            <li>制药</li>
            <li>最新专题</li>
            <li class="last-item">网站设计</li>
        </ul>
        <div id="drag_arrow"></div>
    </div>
</div>
<script src="{{ asset('js/fashionfoucs.js') }}"></script>
<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.plugin.min.js') }}"></script>
<!--banner end-->

<!--footer-->
<div id="footer">
	<div class="center">
		<div class="left fl">
			<li><a href="{{ url('/about/5') }}">联系我们</a><span>丨</span>客服电话:400-0717-168</li>
		</div>
		<div class="right fr">
			<li>杭州纽蓝科技有限公司--版权所有 浙ICP备11030739号</li>
		</div>
	</div>
</div>
<!--footer end-->
</body>
</html>