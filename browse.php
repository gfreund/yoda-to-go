<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
  <style>
    .pull-right {
  float: right !important;
}
  </style>
  
 <!-- Latest compiled and minified CSS BOOTSTRAP3 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme BOOTSTRAP 3 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript BOOTSTRAP3 -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 

   <!------------------ --------------------- ----------------- -------------------------------->
  
  <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="codiqa.ext.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

  <!-- Extra Codiqa features -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>
   
</head>
<body>
<div data-role="page2" id="page2">
    <div data-theme="a" data-role="header" data-position="fixed">
        <h3>
            YODA to go
        </h3>
        <div data-role="navbar" data-iconpos="left">
            <ul>
                <li>
                    <a href="graph-app.html" data-transition="pop" data-theme="c" data-icon="" class="ui-btn-active ui-state-persist">
                        My Dash
                    </a>
                </li>
                <li>
                    <a href="#page2" data-transition="fade" data-theme="c" data-icon="">
                        Browse
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div data-role="content">
        <div style="width: 100%; height: 55px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
            <img src="tp-logo.gif" alt="Travelport Logo" style="margin-left:10px; margin-right:auto; height: 80%">
        </div>

<form id="form1" name="form1" method="post" action="">
 <label>Enter 4 char segment name
 <input type="text" name="msg" id="msg" />
 </label>
  <p>
 <label>Submit
 <input type="submit" name="submit" id="submit" value="Submit" />
 </label>
 </p>
 </form>

<?php 
$msg = $_POST[msg];
?> 
            <h3><?php echo "$msg"?></h3>
			<div class="ui-grid-c">

				<div class="ui-block-a">
				  <p>Segment</p>
				</div>
				<div class="ui-block-b">
				  <p>Created</p>
				</div>
				<div class="ui-block-c">
				  <p>SERRCs/Month</p>
				</div>
				<div class="ui-block-d">
				  <p>Affects</p>
				</div>			
			
				<div class="ui-block-a">
				  <p><?php echo "$msg"?>AA</p>
				</div>
				<div class="ui-block-b">
				  <p>01JUL2004</p>
				</div>
				<div class="ui-block-c">
				  <p style="text-align:center;">3</p>
				</div>
				<div class="ui-block-d">
				  <p>Email</p>
                                </div>

				<div class="ui-block-a">
				  <p><?php echo "$msg"?>BB</p>
				</div>
				<div class="ui-block-b">
				  <p>17JAN2006</p>
				</div>
				<div class="ui-block-c">
				  <p style="text-align:center;">0</p>
				</div>
				<div class="ui-block-d">
				  <p>Email</p>
				</div>

				<div class="ui-block-a">
				  <p><?php echo "$msg"?>CC</p>
				</div>
				<div class="ui-block-b">
				  <p>23APR2008</p>
				</div>
				<div class="ui-block-c">
				  <p style="text-align:center;">14</p>
				</div>
				<div class="ui-block-d">
				  <p>Email</p>
				</div>			

				<div class="ui-block-a">
				  <p><?php echo "$msg"?>DD</p>
				</div>
				<div class="ui-block-b">
				  <p>04MAY2008</p>
				</div>
				<div class="ui-block-c">
				  <p style="text-align:center;">1</p>
				</div>
				<div class="ui-block-d">
				  <p>Email</p>
				</div>

				<div class="ui-block-a">
				  <p><?php echo "$msg"?>EE</p>
				</div>
				<div class="ui-block-b">
				  <p>17FEB2011</p>
				</div>
				<div class="ui-block-c">
				  <p style="text-align:center;">4</p>
				</div>
				<div class="ui-block-d">
				  <p>Email</p>
				</div>	

				<div class="ui-block-a">
				  <p><?php echo "$msg"?>FF</p>
				</div>
				<div class="ui-block-b">
				  <p>28NOV2011</p>
				</div>
				<div class="ui-block-c">
				  <p style="text-align:center;">7</p>
				</div>
				<div class="ui-block-d">
				  <p>Email</p>
				</div>				

				<div class="ui-block-a">
				  <p><?php echo "$msg"?>GG</p>
				</div>
				<div class="ui-block-b">
				  <p>12MAR2013</p>
				</div>
				<div class="ui-block-c">
				  <p style="text-align:center;">16</p>
				</div>
				<div class="ui-block-d">
				  <p>Email</p>
				</div>

				
				  
			</div>
		    </form>
		
		
	</div>
</div>
</body>
</html>	
