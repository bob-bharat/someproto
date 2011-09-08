<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="Generator" content="iWeb 3.0.4" />
<meta name="iWeb-Build" content="local-build-20110904" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="viewport" content="width=700" />
<title>Movie Search</title>
<link rel="stylesheet" type="text/css" media="screen,print" href="MovieSearch_files/MovieSearch.css" />
<!--[if lt IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='MovieSearch_files/MovieSearchIE.css'/><![endif]-->
<!--[if gte IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Media/IE8.css'/><![endif]-->
<script type="text/javascript" src="Scripts/iWebSite.js"></script>
<script type="text/javascript" src="Scripts/Widgets/SharedResources/WidgetCommon.js"></script>
<script type="text/javascript" src="Scripts/Widgets/Navbar/navbar.js"></script>
    <script type="text/javascript" src="Scripts/iWebImage.js"></script>
    <script type="text/javascript" src="MovieSearch_files/MovieSearch.js"></script>
  </head>
<?php
require_once 'app/model/dao/movie/MovieSearchDAO.php';

$dao = new MovieSearchDAO();
$result = $dao->search_movie_by_name($_GET['movie']);

?>
 

  <body style="background: rgb(101, 101, 101); margin: 0pt; " onload="onPageLoad();" onunload="onPageUnload();">
    <div style="text-align: center; ">
      <div style="margin-bottom: 10px; margin-left: auto; margin-right: auto; margin-top: 10px; overflow: hidden; position: relative; word-wrap: break-word;  background: rgb(255, 255, 255); text-align: left; width: 700px; " id="body_content">
        <div style="margin-left: 0px; position: relative; width: 700px; z-index: 0; " id="nav_layer">
          <div style="height: 0px; line-height: 0px; " class="bumper"> </div>
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
new NavBar('widget0', 'Scripts/Widgets/Navbar', 'Scripts/Widgets/SharedResources', '.', {"path-to-root": "", "navbar-css": ".navbar {\n\tfont-family: 'Helvetica Neue', Arial, sans-serif;\n\tfont-size: .8em;\n\tcolor: #666666;\n\tline-height: 30px;\n\tborder-bottom: 3px solid #ccc;\n}\n\n.navbar-bg {\n\ttext-align: right;}\n\n.navbar-bg ul {\n\tlist-style: none;\n\tmargin: 0px;\n\tpadding: 0px;\n}\n\n\nli {\n\tlist-style-type: none;\n\tdisplay: inline;\n\tpadding: 0px 5px 0px 0px;\n}\n\n\nli a {\n\ttext-decoration: none;\n\tpadding: 10px;\n\tcolor: #666666;\n\tfont-weight: bold;\n}\n\nli a:visited {\n\ttext-decoration: none;\n\tpadding: 10px;\n\tcolor: #666666;\n\tfont-weight: bold;\n}\n\nli a:hover\r{\r\n \tcolor: #999999;\n\ttext-decoration: none;\r}\n\n\nli.current-page a\r{\r\t color: #66ABC5;\n\ttext-decoration: none;\r}\n", "current-page-GUID": "C04EA8EA-898B-410D-8D72-389C6C005473", "isCollectionPage": "NO"});
//--><!]]></script>
          <div style="clear: both; height: 0px; line-height: 0px; " class="spacer"> </div>
        </div>
        <div style="height: 75px; margin-left: 0px; position: relative; width: 700px; z-index: 10; " id="header_layer">
          <div style="height: 0px; line-height: 0px; " class="bumper"> </div>
          <div id="id1" style="height: 43px; left: 20px; position: absolute; top: 16px; width: 515px; z-index: 1; " class="style_SkipStroke shape-with-text">
            <div class="text-content Normal_External_515_43" style="padding: 0px; ">
              <div class="Normal">
                <p style="padding-bottom: 0pt; padding-top: 0pt; " class="Header">Movie Search</p>
              </div>
            </div>
          </div>
        </div>

            
    

<table>
<?php
foreach($result as $db_result) {  ?>
<tr><td><img src="MovieSearch_files/<?php echo $db_result['movieid'] ?>.jpg" alt="" style="border: none; height: 93px; width: 67px; " /> </td>
<td><a href="summary.php?movieid=<?php echo $db_result['movieid'] ?>"><?php echo $db_result['movie_name']." (".$db_result['year'].")";?></a> </td>
</tr>
<?php } ?>
</table>
      
</div>
</div>
          




  </body>
</html>


