
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


$proNum3 = $prodNum2
    


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LO Mark for Deletion</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles -->
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>

      
									<?
      
                                        echo $prodNum3;
      
      
                                        $link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

                                        // Check connection
                                        if($link === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }

                                        // Attempt insert query execution
                                        $sql = "UPDATE vendor_product SET marked_for_deletion = 'yes' WHERE id = '" . $proNum3 . "';
                                ";
                                        if(mysqli_query($link, $sql)){
                                            echo "<br><center><h3>Product is marked for deletion</h3><br></center>";
                                        } else{
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                        }

                                        // Close connection
                                        mysqli_close($link);


// Email Notification Start

    $email='jshort@landscapeonline.com';
    $subject = 'Product marked for Deletion';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has marked delete for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);


    $email='jvictor@landscapeonline.com';
    $subject = 'Details Uploaded';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has marked delete for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);


    $email='slopez@landscapeonline.com';
    $subject = 'Details Uploaded';
    $message = 'Vendor Web ID: ' . $venNum3 . ' has marked delete for product: ' . $prodNum3 . ' ';

    mail($email, $subject, $message);

// Email Notification End



												
												
									?>  
      
      
 
     
                                  <script type='text/javascript'>
                                      
                                    javascript:self.close();window.opener.location.reload(true);
                                      
                                  </script>      
      
      
      
      
  </body>
</html>
