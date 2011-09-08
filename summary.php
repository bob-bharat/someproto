<?php
session_start();
require_once 'app/model/dao/movie/MovieDAO.php';

$dao = new MovieDAO();

$result = $dao->get_movie_details($_GET['movieid']);
$row = $result[0];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <meta name="Generator" content="iWeb 3.0.4" />
    <meta name="iWeb-Build" content="local-build-20110904" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="viewport" content="width=700" />
    <title>HummingTown</title>
    <link rel="stylesheet" type="text/css" media="screen,print" href="About_Me_files/About_Me.css" />
    <!--[if lt IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='About_Me_files/About_MeIE.css'/><![endif]-->
    <!--[if gte IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Media/IE8.css'/><![endif]-->
    <style type="text/css"> <!--
	@import "Scripts/Widgets/YouTube/YouTube.css";
--></style>
    <script type="text/javascript" src="Scripts/iWebSite.js"></script>
    <script type="text/javascript" src="Scripts/Widgets/SharedResources/WidgetCommon.js"></script>
    <script type="text/javascript" src="Scripts/Widgets/Navbar/navbar.js"></script>
    <script type="text/javascript" src="Scripts/iWebImage.js"></script>
    <script type="text/javascript" src="Scripts/iWebMediaGrid.js"></script>
    <script type="text/javascript" src="Scripts/Widgets/YouTube/YouTube.js"></script>
    <script type="text/javascript" src="Scripts/Widgets/YouTube/localizedStrings.js"></script>
    <script type="text/javascript" src="About_Me_files/About_Me.js"></script>
  </head>
  <body style="background: rgb(101, 101, 101); margin: 0pt; " onload="onPageLoad();" onunload="onPageUnload();">
    <div style="text-align: center; ">
      <div style="margin-bottom: 10px; margin-left: auto; margin-right: auto; margin-top: 10px; overflow: hidden; position: relative; word-wrap: break-word;  background: rgb(255, 255, 255); text-align: left; width: 700px; " id="body_content">
        <div style="margin-left: 0px; position: relative; width: 700px; z-index: 0; " id="nav_layer">
          <div style="height: 0px; line-height: 0px; " class="bumper">�</div>
          <div class="com-apple-iweb-widget-navbar flowDefining" id="widget0" style="margin-left: 20px; margin-top: 0px; opacity: 1.00; position: relative; width: 660px; z-index: 1; ">
    
            <div id="widget0-navbar" class="navbar">

      
              <div id="widget0-bg" class="navbar-bg">

        
                <ul id="widget0-navbar-list" class="navbar-list">
 <li></li> 
</ul>
                
      
</div>
              
    
</div>
          </div>
          <script type="text/javascript"><!--//--><![CDATA[//><!--
new NavBar('widget0', 'Scripts/Widgets/Navbar', 'Scripts/Widgets/SharedResources', '.', {"path-to-root": "", "navbar-css": ".navbar {\n\tfont-family: 'Helvetica Neue', Arial, sans-serif;\n\tfont-size: .8em;\n\tcolor: #666666;\n\tline-height: 30px;\n\tborder-bottom: 3px solid #ccc;\n}\n\n.navbar-bg {\n\ttext-align: right;}\n\n.navbar-bg ul {\n\tlist-style: none;\n\tmargin: 0px;\n\tpadding: 0px;\n}\n\n\nli {\n\tlist-style-type: none;\n\tdisplay: inline;\n\tpadding: 0px 5px 0px 0px;\n}\n\n\nli a {\n\ttext-decoration: none;\n\tpadding: 10px;\n\tcolor: #666666;\n\tfont-weight: bold;\n}\n\nli a:visited {\n\ttext-decoration: none;\n\tpadding: 10px;\n\tcolor: #666666;\n\tfont-weight: bold;\n}\n\nli a:hover\r{\r\n \tcolor: #999999;\n\ttext-decoration: none;\r}\n\n\nli.current-page a\r{\r\t color: #66ABC5;\n\ttext-decoration: none;\r}", "current-page-GUID": "22E791EA-D1A1-433E-99C9-7203DE0F8616", "isCollectionPage": "NO"});
//--><!]]></script>
          <div style="clear: both; height: 0px; line-height: 0px; " class="spacer">�</div>
        </div>
        <div style="height: 414px; margin-left: 0px; position: relative; width: 700px; z-index: 10; " id="header_layer">
          <div style="height: 0px; line-height: 0px; " class="bumper">�</div>
          <div id="id1" style="height: 43px; left: 20px; position: absolute; top: 17px; width: 515px; z-index: 1; " class="style_SkipStroke shape-with-text">
            <div class="text-content style_External_515_43" style="padding: 0px; ">
              <div class="style">
                <p style="padding-bottom: 0pt; padding-top: 0pt; " class="Header"><?php echo $row['movie_name']?></p>
              </div>
            </div>
          </div>
          


          <div id="id2" style="height: 43px; left: 535px; position: absolute; top: 17px; width: 145px; z-index: 1; " class="style_SkipStroke_1 shape-with-text">
            <div class="text-content style_External_145_43" style="padding: 0px; ">
              <div class="style_1">
                <p style="padding-bottom: 0pt; padding-top: 0pt; " class="Heading_1"><?php echo $row['year']?></p>
              </div>
            </div>
          </div>
          <div class="com-apple-iweb-widget-YouTube aboveStrokesAndFrames stroke_0" id="widget1" style="height: 327px; left: 10px; opacity: 1.00; position: absolute; top: 86px; width: 391px; z-index: 1; ">
            <div id="widget1-youTube" class="youtube_widget"></div>
          </div>
          <script type="text/javascript"><!--//--><![CDATA[//><!--
new YouTubeWidget('widget1', 'Scripts/Widgets/YouTube', 'Scripts/Widgets/SharedResources', '.', {"movieURL": "<?php echo $row['link']?>", "lastNormalizedAddress": "<?php echo $row['link']?>", "address": "<?php echo $row['link']?>", "showRelatedVideos": true});
//--><!]]></script>
          <div id="id3" style="height: 331px; left: 411px; position: absolute; top: 83px; width: 284px; z-index: 1; " class="style_SkipStroke_2 shape-with-text">
            <div class="text-content style_External_284_331" style="padding: 0px; ">
              <div class="style_2">
                <p style="padding-top: 0pt; " class="Heading_2">Movie Details<br /></p>
                <p style="padding-top: 0px; " class="Sidebar_Body"><span class="Bold">name</span>�<?php echo $row['movie_name']?><br /></p>
                <p style="padding-top: 4px; " class="Sidebar_Body"><span class="Bold">year</span>� <?php echo $row['year']?></p>
                <p style="padding-top: 4px; " class="Sidebar_Body"><span class="Bold">Date of Release</span>� <?php echo $row['date_of_release']?><br /></p>
             <p style="padding-bottom: 0pt; padding-top: 4px; " class="Sidebar_Body"><span class="Bold">Crew</span>� </p> <br/>                
                <?php $result = $dao->get_movie_crew($_GET['movieid']); ?>
                <table>
<?php
foreach($result as $db_result) { ?>
<tr><td><?php echo $db_result['name'] ?> </td>
<td><?php echo $db_result['rollname']?> </td>
</tr>
<?php } ?>
</table>
              </div>
            </div>
          </div>
        </div>
        <div style="margin-left: 0px; position: relative; width: 700px; z-index: 5; " id="body_layer">
          <div style="height: 0px; line-height: 0px; " class="bumper">�</div>
          <div id="id4" style=" left: 11px; position: absolute; top: 37px; width: 390px; z-index: 1; " class="style_SkipStroke_3 shape-with-text">
              <div class="Normal">
                <p style="padding-bottom: 0pt; padding-top: 0pt; " class="Title">Top Reviews</p>
<?php  $result = $dao->get_movie_reviews($_GET['movieid']);
?>
<table>
<tr><th>Review</th><th>Rating</th><th>User</th></tr>
<?php
foreach($result as $db_result) { ?>
<tr><td><?php echo $db_result['review'] ?> </td>
<td><?php echo $db_result['rating']?> </td>
<td><?php echo $db_result['username']?> </td>
</tr>
<?php } ?>
</table>
<br/><br/>
<?php if (isset($_SESSION['user'])) {?>
<h3>Write a Review</h3>
<form name="review" action="review.php" method="post">
<textarea rows="4" cols="30" name="review"></textarea>
<select name="rating">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select><input type="hidden" value="<?php echo $_GET['movieid'] ?>" name="movieid" />
<input type="submit" value="Send" onclick="this.review.submit();"/>
</form> <?php }?>                       </div>
          </div>
          


          <div style="height: 160px; width: 260px;  height: 160px; left: 423px; position: absolute; top: 16px; width: 260px; z-index: 1; " class="tinyText stroke_1">
            <div style="position: relative; width: 260px; ">
              <img src="images/movies/<?php echo $row['movieid']?>_1.jpg" alt="" style="height: 160px; left: 0px; position: absolute; top: 0px; width: 260px; " />
            </div>
          </div>
          


          <div style="height: 335px; width: 260px;  height: 335px; left: 423px; position: absolute; top: 199px; width: 260px; z-index: 1; " class="tinyText stroke_2">
            <div style="position: relative; width: 260px; ">
              <img src="images/movies/<?php echo $row['movieid']?>_2.jpg" alt="" style="height: 335px; left: 0px; position: absolute; top: 0px; width: 260px; " />
            </div>
          </div>
          <div style="height: 480px; line-height: 480px; " class="spacer">�</div>
        </div>
        <div style="height: 75px; margin-left: 0px; position: relative; width: 700px; z-index: 15; " id="footer_layer">
          <div style="height: 0px; line-height: 0px; " class="bumper">�</div>
        </div>
      </div>
    </div>
  </body>
</html>


