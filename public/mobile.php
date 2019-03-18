<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f5f5f5">
    <link rel="stylesheet" href="mobile/css/global.css">
		<link rel="shortcut icon" type="img/png" href="img/favicon.png"/>
		<title>Mobile MixPix</title>
	</head>
  </head>
  <body>
    <!-- App root element -->
    <div id="app" class="framework7-root">
      

      <div class="views">
        <div class="view view-main">
          <div class="tabs-animated-wrap">
            <div class="tabs">
              <!-- Statusbar overlay -->
              <!-- <div class="statusbar"></div> -->
            
              <!-- Your main view, should have "view-main" class -->
              <div id="main-tab" class="tab tab-active">
                <!-- Initial Page, "data-name" contains page name -->
                <div data-name="home" class="page home-page">
                  <div class="main-title"><h4 class="logo"><span class="regular">Mix</span>Pix</h4> <a href="#order" class="tab-link checkout-link" data-panel="right"></a></div>
            
                  <div class="page-content medium">
                    <article class="text-center page-article arrow">
                      <h1>Add Free Tile</h1>
                      <p>You can upload pictures from your social networks</p>
                      <p>like <a href="#" class="text-info bold">instagram</a> or <a href="#" class="text-primary bold">facebook</a>.</p>
                    </article>
                    
                    <div class="upload_block" id="upload_block">
                      <a href="#" id="upload_link" class="sheet-open" data-sheet=".sheet-select"></a>
                    </div>​
                  </div>
                  
            
            
                </div>
              </div>
            
              <?php include "mobile/views/order_tab.php"; ?>
              <?php include "mobile/views/shipping_tab.php"; ?>
              <?php include "mobile/views/payment_tab.php"; ?>
              <?php include "mobile/views/congrats_tab.php"; ?>

              <?php include "mobile/views/sheet.php"; ?>
            </div>
          </div>
        </div>
      </div>


    </div>
	 <script src="mobile/js/app.js"></script>
  </body>
</html>