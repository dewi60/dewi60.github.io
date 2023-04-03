<?
// Dynazon - Dynamic & Responsive Amazon Landing Page
// by C#7 STÒÓDIO2.com - an Internet Marketing Agency
// http://stoodio2.com/dynazon
// @CharlieNumber7
$asin= $_GET[asin];
$opr = 'Lookup';
include('function.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$judul;?> | <?=$storeName;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	background-color: #E1E6E8;
	background: top center url('http://i.imgur.com/jygPgt1.png') repeat #414852;	
      }
      #jojon {
        padding-top:20px;text-align:center;text-decoration:none;font-weight:bold;font-size:16px;
      }      
      #jojon a:hover {
        text-decoration:none;
      }
    </style>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

<script type="text/javascript">
        (function() {
            $("[rel=popover]").popover();
        })();
    </script>

  </head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"><div class="span8 offset2">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Online Shopping - United Kingdom</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a data-toggle="modal" href="#about">About</a></li>
              <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>
            </ul><div style="float:right;margin-right:30px;"><a href="<?=$linkazon;?>" target="_blank" class="btn btn-warning" title="Buy NOW"><font color="black">Buy NOW!</font></a></div>
          </div><!--/.nav-collapse --></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
      <div class="span8 offset2">
      <!-- Main hero unit for a primary marketing message or call to action -->
      
      <div class="hero-unit" style="background-color:white;"> 
        <center><img src="../amz.png" alt="Amazon.co.uk" border="0" /></a></center><br /><br />     
        <h1 style="font-size:25px;"><?php echo mb_substr($judul, 0, 80); ?></h1><hr>
      <div class="row">
        <div class="span2">
        <a data-toggle="<?=$linkazon;?>" href="<?=$linkazon;?>"><img src="<?=$gambarproduk;?>" title="&laquo; Click to Enlarge and to Go Amazon &raquo;"></a>
        </div>
        <div class="span4">
         <p><?=$vendor;?> offer <?=$judul;?>. This awesome product currently limited units, you can buy it now for <del><strong><span style="color:red"><?=$hargalist;?></span></strong></del> <?=$harga;?>, You save <?=$diskon;?> </p>
        <p><a class="btn btn-warning btn-large" href="<?=$linkazon;?>" target="_blank"><font color="black">Buy NOW from Amazon &raquo;</a></a></p>
        <div style="width:150px; float:right;">
        <div style="width:50px; float:left;">
	
        </div>
        </div>       
        </div>        
      </div>
        <center><b>BUY NOW:</b><br /><iframe src="//rcm-na.amazon-adsystem.com/e/cm?o=1&p=20&l=ur1&category=outlet&banner=1B7T0RGK4KGSKPH1E3G2&f=ifr&linkID=f0f21be0ddb93db2e2d9e1d41b0900f6&t=melissasha059-20&tracking_id=melissasha059-20" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe> <iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=2&p=20&l=ur1&category=amazongeneric&banner=0QRVKBK1RAAP24RAXXG2&f=ifr&linkID=fec34416e5737a428a45b6e33ef05b0d&t=melissasharpe-21&tracking_id=melissasharpe-21" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe> <iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=3&p=20&l=ur1&category=amazongeneric&banner=14N12EJN1X2K75A58M82&f=ifr&linkID=6b970a6780d0b978545cb6987d1e7ac8&t=melissashar06-21&tracking_id=melissashar06-21" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe> <iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=20&l=ur1&category=amazongeneric&banner=038MZRCNRX2ND9B9XZ02&f=ifr&linkID=96ddeb9a7a598a4d2d51ae1914967925&t=melissashar0e-21&tracking_id=melissashar0e-21" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe> <iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=8&p=20&l=ur1&category=amazongeneric&banner=0X5CF34MDV21N0SHARR2&f=ifr&linkID=ce0979ca51ca9614279f75342b8de537&t=melissashar0a-21&tracking_id=melissashar0a-21" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe> <iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=29&p=20&l=ur1&category=amazongeneric&banner=01JV2EAWC5CN2VAZ6HR2&f=ifr&linkID=f55dca812845fe49dd5c44a019b9e971&t=melissasha0d5-21&tracking_id=melissasha0d5-21" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0" sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe></center>

      <div id="jojon">
      <a href="http://www.amazon.co.uk/gp/goldbox/?tag=<?=$tagcouk;?>">Deal Of The Day</a> | <a href="http://www.Amazon.co.uk/gp/gc/?tag=<?=$tagcouk;?>">Gift Card</a> | <a href="http://www.Amazon.co.uk/gp/bestsellers/?tag=<?=$tagcouk;?>">Best Seller</a></div><hr>
	 
                  <p><?=$deskripsi;?></p> <br>
                  <hr>
                  <center><?=$multicart;?></center>
                  <hr>
                   <div class="row">

		<div class="span4">
		  <p><a class="btn btn-warning" href="<?=$linkazon;?>" title="View From Amazon.co.uk">Product Details &raquo;</a> </p>
     </div>            
     <div class="row">
                  <div class="span2">
		  <p><a class="btn btn-warning" href="<?=$linkazon;?>" title="View From Amazon.co.uk">Product Reviews &raquo;</a> </p>
                  </div>
	</div>
</div>
      </div>
      <footer>
        <p align="center">&copy; Online Shopping - United Kingdom 2015 </p>
      </footer>
    </div></div>
    </div> <!-- /container -->

		<div id="larger" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?=$judul;?></h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
				<p align="center">
			<img src="<?=$gambarproduk;?>"></p>
			</div>
			<div class="modal-footer">
			<a href="<?=$linkazon;?>" class="btn btn-warning" title="Buy NOW"><font color="black"><?=$harga;?></font></a>
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>

		<div id="detail" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?=$judul;?></h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">

			<?=$detail;?>
			</div>
			<div class="modal-footer">
			<a href="<?=$linkazon;?>" class="btn btn-warning" title="Buy NOW"><font color="black"><?=$harga;?></font></a>
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>
		
		<div id="review" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Review</h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
			<?=$reviewzon;?>
			</div>
			<div class="modal-footer">
			<a href="<?=$linkazon;?>" class="btn btn-warning" title="Buy NOW"><font color="black"><?=$harga;?></font></a>
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>
		

		<div id="about" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>About Online Shopping - United Kingdom</h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
			<p>This site is a participant in the Amazon Europe S.à r.l. Associates Programme, an affiliate advertising programme designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.co.uk/Javari.co.uk. Amazon, the Amazon logo, are trademarks of Amazon.co.uk .</p>
			<p>This Landing Page serve the products as Amazon Associates.</p>
			<p>Product prices and availability are accurate and served realtime from Amazon Services. Any price and availability information displayed on Amazon.co.uk at the time of purchase will apply to the purchase of this product.</p>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>

		<div id="privacy" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Privacy Policy</h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
			<p>We are committed to protecting your privacy. We will only use the information we collect about you lawfully (in accordance with the Data Protection Act 1998). Please read on if you wish to learn more about our privacy policy.</p>
<h4>What Information do we collect?</h4>

<p>We keep only the information about how you have navigated our website. We temporarily keep information on the products you have added to your basket. We do not keep any personal information that would identify you in the future. When processing your order at Amazon there are other details that will be required - see Amazon Privacy Policy for full details.</p>

<p>We also record usage data such as the pages visited. This information is completely anonymous.</p>

<p>Any information we hold is secured in accordance with our internal security policy.</p>

<h4>Do we use cookies?</h4>

<p>We use cookies to enable you to hold the content of your shopping basket between visits and to record anonymous traffic data. We do not store any personally identifying information in these cookies.</p>

<h4>Will we sell your information?</h4>

<p>We does not sell any information about their customers; as simple as that. We will not forward your details on to any third party at any time.</p>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>






    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap.min.js"></script>
	<script src="http://twitter.github.com/bootstrap/1.4.0/bootstrap-popover.js"></script>
	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>


  </body>
</html>
