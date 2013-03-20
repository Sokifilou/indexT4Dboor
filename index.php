<?php
include("config.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $generalInfo['name'] ?></title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content="description" content="Master the art of ancient tactics as Roman, Gaul or Teuton!" />
    <link rel="stylesheet" type="text/css" href="gpack/travian_homepage/lang/en/compact.css"/>
	<meta name="content-language" content="en"/>
	<meta http-equiv="imagetoolbar" content="no"/>
	<script type="text/javascript" src="crypt.js@1323348692"></script>
	<style type="text/css">
	<![CDATA[*/
		div.c1 {left: 274px; top: 100px; display: block; visibility: visible}
    /*]]>
    </style>
<center></head><center/>
<body class=" LTR">
    <div id="backgroundLeft"></div>
    <div id="backgroundRight"></div>
	<div id="background">
		<div id="navigation-wrapper">
	    	<div id="navigation-container">
	        	<div id="country_select">
					<div id="flags"></div>
                    <script src="flags.js" type="text/javascript"></script>
				</div>
	            <div id="top-nav">
                    <div id="top-nav-menu">
                        <div id="logo">
                            <a href="index.php"><img src="img/x.gif" class="logo" alt="" /></a>
                        </div>
                        <ul id="top-navigation">
						<li><a href="contact.php" class="popcon"><font color="FF00D8">Contact</a></li>
                            <li><a href="#tutorial" class="popcon">Game Tour</a></li>
				<?php if ($generalInfo['forum']=='on')
				echo "<li><a href=\"".$generalInfo['forumURL']."\" target=\"blank\" id=\"forum\">Forum</a></li>	"
				?>                           
                            <li><a href="#serverRegister" class="popcon" id="register">Register</a></li>
                        </ul>
                    </div>
                    <div id="top-nav-login">
                        <div id="login">
                            <div class="btn-green">
                                <div class="btn-green-l"></div>
                                <div class="btn-green-c"><a class="npage popcon" href="#serverLogin">Login</a></div>
                                <div class="btn-green-r"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <div id="content-container">
	    	<div id="content-menu">
				<div id="statistics">
                   	<div id="stat-top"></div>
                    <div id="stat_bottom"></div>
                	</div>
					<div id="news">
    <div id="news-head"></div>
    <div id="news-content">
        <h3 class="news bold">News</h3>
        <div class="news-items"><div class="news">
		<?php $file = fopen('news1.txt', 'r+');
    $counter = fgets($file);
    echo $counter; ?>
		<br /><br /><center>
		-----------------------------------------
		<br /><br /></center>
		<?php $file = fopen('news2.txt', 'r+');
		$counter = fgets($file);
		echo $counter; ?>
		<br /><br /><center>
		-----------------------------------------
		<br /><br /></center>
		<?php $file = fopen('news3.txt', 'r+');
    $counter = fgets($file);
    echo $counter; ?>
		<br /><br />
		</div></div></div>
    <div id="news-bottom"></div>
</div>
                    <div id="shop"><a href="contact.php" class="popcon">
	                	<div class="article">&nbsp;&nbsp;&nbsp;Shop &nbsp;&nbsp;&nbsp;<?php echo $generalInfo['name'] ?></div>
	                	<div class="link">
							<img class="ticker-btn" alt="" src="img/x.gif">
						</div></a>
	                </div>
                   
				</div>
	            <div id="content-main">
	            	<div id="wit">
                    	<div id="wit-top"></div>
                        <div id="wit-content" class="with-button">
                        	<div id="hero"></div>
                            <h1 class="wit bold"><?php echo $generalInfo['name']; ?> - the multiplayer strategy game with 2 New Tribe
  </h1>
                            <div class="wit-info">
                            	<?php echo $generalInfo['name']; ?> is one of the most popular browser games in the world. As a player in <?php echo $generalInfo['name']; ?>, you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.                            	<div class="playnow playnow-button">
                                	<div class="playnow-start">
                                    	<h1 class="play white bold">
                                        <a class="popcon play" href="#serverRegister" title="Register Here For Free">Register Here For Free</a>
                                        </h1>
									</div>
                                    <div class="playnow-end"></div>
                                    <div class="clear"></div>
								</div>
							</div>
                            <div id="stage_space"></div>
                            <div id="stage">
                            	<div id="frame">
									<div class="stage-content stage-content0 shown" style="background-image: url(img/big1.png)">
                                    	<div style="position:absolute; right:10px; top:170px;">
                                        	<img alt="" class="bbArrow" src="img/x.gif" />
                                            <span style="color:black;"><span style="font-weight:bold;">Register For Free </span></span>
										</div>
                                        <div style="position:absolute; right:15px; top:12px;">
                                            <h3>Welcome To <?php echo $generalInfo['name']; ?>! </h3>
                                            <br />
                                            <span style="font-weight:bold;"> <br /></span>
                                        </div>
                                        <div class="stage-arrow stage-arrow-0"></div>
									</div>
                                    <div class="stage-content stage-content1" style="background-image: url(img/big2.png)">
                                    	<div style="position:absolute; right:15px; top:170px;">
                                        	<img alt="" class="bbArrow" src="img/x.gif" />
                                            <span style="color:black;"><span style="font-weight:bold;">Register For Free </span></span>
                                        </div>
                                        <div style="position:absolute; right:15px; top:12px;">
                                        	<h3> With 5 Tribe</h3>
                                            <br />
                                            <span style="font-weight:bold;">V.36<br /><br /> <br /><br /> </span>
										</div>
										<div class="stage-arrow stage-arrow-1"></div>
									</div>
									<div class="stage-content stage-content2" style="background-image: url(img/big3.png)">
                                    	<div style="position:absolute; right:15px; top:170px;">
                                        	<img alt="" class="bbArrow" src="img/x.gif" />
                                            <span style="color:black;"><span style="font-weight:bold;">Register For Free </span></span>
										</div>
                                        <div style="position:absolute; right:15px; top:12px;">
                                            <h3>Community </h3>
                                            <br />
                                            <span style="font-weight:bold;"><br /><br /><br />Become a part of community</span>
                                        </div>
										<div class="stage-arrow stage-arrow-2"></div>
									</div>
                                    <div id="stage-nav">
                                        <ul id="buttons">
                                            <li class="b0 act0" style="background-image: url(img/small1.png)">&nbsp;</li>
                                            <li class="b1" style="background-image: url(img/small2.png)">&nbsp;</li>
                                            <li class="b2" style="background-image: url(img/small3.png)">&nbsp;</li>
                                        </ul>
                                    </div>
								</div>
								<div id="stage-bg"></div>
								<div id="stage-fg">
                                	<div class="stage-links">
                                    	<a class="stage-link stage-link1 shown" href="#serverRegister"></a>
                                        <a class="stage-link stage-link2" href="#serverRegister"></a>
                                        <a class="stage-link stage-link3" href="#serverRegister"></a>
									</div>
                                    <div id="stage-nav-click">
                                    	<ul id="buttons-click">
											<li class="b0 act0">&nbsp;</li>
											<li class="b1">&nbsp;</li>
											<li class="b2">&nbsp;</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div id="wit-bottom"></div>
					</div>
					<div id="moreabttravian">
						<div id="find-out-more">
							<div id="strip-head">
                            	<div>Learn More </div>
                            </div>
							<div id="strip">
								<ul id="strips">
					                <li class="stip0">&nbsp;</li>
                					<li class="stip1">&nbsp;</li>
                					<li class="stip2">&nbsp;</li>
                					<li class="stip3">&nbsp;</li>
                					<li class="stip4">&nbsp;</li>
                					<li class="stip5">&nbsp;</li>
            					</ul>
    					    </div>
                            <div id="strip-details">
                                <div class="details">
                                    <div class="details-top"></div>
                                    <div class="details-l-top"></div>
                                    <div class="details-r-top"></div>
                                    <div class="details-body">
                                        <div class="details-body-l" id="strip-c1"></div>
                                        <div class="details-body-r">Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers. <br /><br />
                                            <div class="btn-green">
                                                <div class="btn-green-l"></div>
                                                <div class="btn-green-c"><a class="npage popcon" href="#tutorial">Game Tour</a></div>
                                                <div class="btn-green-r"></div>
                                            </div>
                                        </div>
								</div>
								<div class="details-l-bottom"></div>
								<div class="details-r-bottom"></div>
								<div class="details-bottom"></div>
							</div>
							<div class="details">
								<div class="details-top"></div>
								<div class="details-l-top"></div>
                                <div class="details-r-top"></div>
								<div class="details-body">
									<div class="details-body-l" id="strip-c2"></div>
									<div class="details-body-r">Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops. <br /><br />
										<div class="btn-green">
											<div class="btn-green-l"></div>
											<div class="btn-green-c"><a class="npage popcon" href="#tutorial">Game Tour</a></div>
											<div class="btn-green-r"></div>
										</div>
									</div>
								</div>
								<div class="details-l-bottom"></div>
                                <div class="details-r-bottom"></div>
								<div class="details-bottom"></div>
							</div>
							<div class="details">
								<div class="details-top"></div>
								<div class="details-l-top"></div>
                                <div class="details-r-top"></div>
								<div class="details-body">
									<div class="details-body-l" id="strip-c3"></div>
									<div class="details-body-r">View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger <br /><br />
									<div class="btn-green">
										<div class="btn-green-l"></div>
										<div class="btn-green-c"><a class="npage popcon" href="#tutorial">Game Tour</a></div>
										<div class="btn-green-r"></div>
									</div>
								</div>
							</div>
							<div class="details-l-bottom"></div>
                            <div class="details-r-bottom"></div>
							<div class="details-bottom"></div>
						</div>
						<div class="details">
							<div class="details-top"></div>
							<div class="details-l-top"></div>
                            <div class="details-r-top"></div>
							<div class="details-body">
								<div class="details-body-l" id="strip-c4"></div>
								<div class="details-body-r">Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.<br /><br />
									<div class="btn-green">
										<div class="btn-green-l"></div>
										<div class="btn-green-c"><a class="npage popcon" href="#tutorial">Game Tour</a></div>
										<div class="btn-green-r"></div>
									</div>
								</div>
							</div>
							<div class="details-l-bottom"></div>
                            <div class="details-r-bottom"></div>
							<div class="details-bottom"></div>
						</div>
						<div class="details">
							<div class="details-top"></div>
							<div class="details-l-top"></div>
                            <div class="details-r-top"></div>
							<div class="details-body">
								<div class="details-body-l" id="strip-c5"></div>
								<div class="details-body-r">Receive detailed reports about your adventures, trades and battles. Don't forget to check the brand new reports about the happenings taking place in your surroundings.<br /><br />
									<div class="btn-green">
										<div class="btn-green-l"></div>
										<div class="btn-green-c"><a class="npage popcon" href="#tutorial">Game Tour</a></div>
										<div class="btn-green-r"></div>
									</div>
								</div>
							</div>
							<div class="details-l-bottom"></div>
                      		<div class="details-r-bottom"></div>
							<div class="details-bottom"></div>
						</div>
						<div class="details">
							<div class="details-top"></div>
							<div class="details-l-top"></div>
                            <div class="details-r-top"></div>
							<div class="details-body">
								<div class="details-body-l" id="strip-c6"></div>
								<div class="details-body-r">Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.<br /><br />
									<div class="btn-green">
										<div class="btn-green-l"></div>
										<div class="btn-green-c"><a class="npage popcon" href="#tutorial">Game Tour</a></div>
										<div class="btn-green-r"></div>
									</div>
								</div>
							</div>
							<div class="details-l-bottom"></div>
                            <div class="details-r-bottom"></div>
							<div class="details-bottom"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="ssc-bg">
				<div id="ss-head">
					<div id="ss-head-left"></div>
					<div id="ss-head-right"></div>
					<h3 class="ss bold white">ScreenShots</h3>
				</div>
				<div id="ss-container">
					<div id="g-widget">
                    	<a class="browse next"></a>
						<div id="gallery">
							<div id="g-items">
								<img src="img/x.gif" class="screen1" alt="" />
                                <img src="img/x.gif" class="screen2" alt="" />
                                <img src="img/x.gif" class="screen3" alt="" />
                                <img src="img/x.gif" class="screen4" alt="" />
                                <img src="img/x.gif" class="screen5" alt="" />
                                <img src="img/x.gif" class="screen6" alt="" />
                                <img src="img/x.gif" class="screen7" alt="" />
                                <img src="img/x.gif" class="screen8" alt="" />
							</div>
						</div>
						<a class="browse prev"></a>
					</div>
				</div>
			</div>
			<script type="text/javascript">
                window.addEvent('domready', function()
                {
                    //stage
                    var stagewidget = new stageWidget({
                        stagebg:$('stage-bg'),
                        stageduration: {
                            0:5000,
                            1:5000,
                            2:5000	        },
                        stagecon:$$(".stage-content"),
                        stagenav:$$("#buttons-click li"),
                        stagelink:$$(".stage-link"),
                    });
            
                    //tooltip
                    var tooltipwidget = new tooltipWidget({
                        tips: $$("#strips li"),
                        details:$$(".details")
                    });
                    //slider
                    var sliderwidget = new sliderWidget({
                        container: $$('#g-widget'),
                        pimgwidth:520,
                        head:$('prev_head'),
                        desc:$('prev_desc'),
                        prev_bg:$('overlaybg'),
                        prev_container:$('preview_container'),
                        prev_stage_container:$$('#preview_stage'),
                        prev_items:$('preview_items'),
                        close:$('close')
                    });
            
                    //slideshow [footer]
                    $('screenshotp').addEvents(
                    {
                        'click': function(e) {
                            e.stop();
                            this.fireEvent('show');
                        },
                        'show':function(e){
                            new sliderWidget({
                                container: $$('#g-widget'),
                                preview: false,
                                inpreview:true,
                                pimgwidth:520,
                                head:$('prev_head'),
                                desc:$('prev_desc'),
                                prev_bg:$('overlaybg'),
                                prev_container:$('preview_container'),
                                prev_stage_container:$$('#preview_stage'),
                                prev_items:$('preview_items'),
                                close:$('close'),
                                directcall:true
                            });
            
                        }
                    });
            
                    //popup anchor
                    var url = new URI();
                    var anchor = url.get('fragment');
                    if (anchor && anchor == 'screenshots')
                    {
                        $('screenshotp').fireEvent('show');
                    }
                });
            </script>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer-container">
		<div id="footer">
			<a class="flink popcon" href="support.php">Support</a>&nbsp;|&nbsp;
			<a class="flink popcon" href="tutorial.php">Game Tour</a>&nbsp;|&nbsp;
            <a target="blank" class="flink" href="#screenshots" id="screenshotp">ScreenShots</a>
			<br />
			<a target="blank" class="flink" href="#"></a><br />
          <strong>&copy; <a href="http://www.travonline.net" target="_blank"><span style="color:red;">Travonline.net</span></a> made for <?php echo $generalInfo['adminEmail']; ?> - All rights reserved - 2013 </strong></a><font color="FF00D8" size=2><br />
			<br />
	  </div>
	</div>
	<div id="preview_container">
		<div id="p-top"></div>
		<div id="p-bg"></div>
		<div id="p-bottom"></div>
		<a class="close"></a>
		<div id="p-content">
			<div id="prev_head">
				<h3>Screenshots</h3>
			</div>
			<div id="preview_stage">
			<a class="browse next"></a>
			<div id="preview_img">
				<div id="preview_items"></div>
			</div>
			<a class="browse prev"></a>
			<div class="clear"></div>
		</div>
		<div id="prev_desc"></div>
	</div>
</div>
<div id="popup">
	<div id="popup-top"><a class="pclose"></a></div>
	<div id="popup-content">
		<div class="loading"></div>
	</div>
	<div id="popup-bottom"></div>
</div>
<div id="overlaybg"></div>
<script type="text/javascript">
	var screenshots = [
		{'img':'screenBig screenBig1','hl':'Village centre', 'desc':'Your village could like this one day, becoming the starting point for your vast empire.'},
		{'img':'screenBig screenBig2','hl':'Village overview', 'desc':'Lumber, clay, iron and crop are the vital resources which will fuel the economy of your village and feed your people; they will provide you with the materials necessary for construction and war. With these valuable resources, you can train a powerful conquering army.'},
		{'img':'screenBig screenBig3','hl':'The hero', 'desc':'You can send your hero to adventures, where he will have to face great danger and pass difficult challenges. If your hero is successful, he stands a chance of bringing something valuable home.'},
		{'img':'screenBig screenBig4','hl':'Building information', 'desc':'For it to become powerful and productive, your village will need a great number of buildings. At the beginning, choose well what you want to construct first, as resources are scarce.'},
		{'img':'screenBig screenBig5','hl':'Surrounding territories', 'desc':'Explore your surrounding territories in order to get to know your neighbors; you can opt for a path of peace, creating alliances and confederacies, or you can wage war and conquer the surrounding lands. There may be rich oases in your vicinity; conquer them to gain various valuable bonuses, but always be aware of the dangerous wild animals that inhabit them.'},
		{'img':'screenBig screenBig6','hl':'Battle report', 'desc':'It is wise to train your army early on, so you can defend yourself and attack others. This way, you can raid more resources and build up your empire more quickly.'},
		{'img':'screenBig screenBig7','hl':'Medals system', 'desc':'At the end of every week, the very best 10 players and alliances will be elected, topping in different categories; as a reward for their prowess they will receive medals, celebrating their achievements.'},
		{'img':'screenBig screenBig8','hl':'Task system', 'desc':'To assist you when you first start managing your empire, we have sent the Taskmaster; he will guide you with tips and advice in order to help you build up your village. Just click on the image of the Taskmaster to your left to activate him'}
	];
</script>
</div>
</body>
</html>