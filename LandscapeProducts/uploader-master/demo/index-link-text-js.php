
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];



										// Vendor Start

                                        $servername = "localhost";
                                        $username = "land_patchew";
                                        $password = "59q2GB6k$3";
                                        $dbname = "land_landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 


										// start article from table
							
											$key2 = $_GET['number'];
											$key22 = $_GET['prodNum'];							
	
											//$key2 = "28909";

											$sql = "select * from vendor_product where id='" . $key22 . "' ORDER BY series_product ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
												
											$prodCount=mysqli_num_rows($result);
												
												
										      $xlistNum = $row['xlist'];
												
										      $prodTop = $row['series_product'];
												
										      $parentName = $row['product_name'];	
                                                
										      $desCript = $row['description'];	
                                                




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LO Cad PDF Upload</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="../dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>
	  
	  <form method="post" action="index-words-link.php?prodNum=<? echo $prodNum2; ?>&venNum=<? echo $vendNum2; ?>">
		  <input type="hidden" name="prodNum" value="<? echo $_GET['prodNum'] ?>" >

    <main role="main" class="container">

      <h3>Product Name and Description</h3>
        
   
            <p><strong>Edit Your Direct Web Link</strong></p>
			<p><input type="text" name="web_photo" value="<? echo $row['web_photo'] ?>" style="width: 350px" placeholder="Enter Web Link"></p>
                                        
            
        
        
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>
            
	  </form>
          
          
          <?
                                            
                 }
                                            
           ?>
            

<script>
    
    function timedRefresh(timeoutPeriod) {
        setTimeout("location.reload(true);",timeoutPeriod);
    }

    window.onload = timedRefresh(100000);    
    
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
    
    function close_window() {
      
        close();
    }
    
    
    
</script>


        
        
        
        
        

    </main> <!-- /container -->


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script src="../dist/js/jquery.dm-uploader.min.js"></script>
    <script src="demo-ui.js"></script>
	<script type="text/javascript">var dog = "<?= $prodNum2 ?>" + "&venNum=" + "<?= $vendNum2 ?>";</script>
    <script src="demo-config10.js"></script>

    <!-- File item template -->
    <script type="text/html" id="files-template">
      <li class="media">
        <div class="media-body mb-1">
          <p class="mb-2">
            <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
          </p>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
              role="progressbar"
              style="width: 0%" 
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
          <hr class="mt-1 mb-1" />
        </div>
      </li>
    </script>

    <!-- Debug item template -->
    <script type="text/html" id="debug-template">
      <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
    </script>
  </body>
</html>
