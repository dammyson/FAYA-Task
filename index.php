<?php 


$strMain ="";
  $url = "nul";
if(isset($_POST["url"]))
{
    $url = $_POST["url"];
    if(!empty($_POST["url"])){
    $data = file_get_contents($url);
    $strMain = htmlentities($data);
    }
}

?><!DOCTYPE html>


<html dir="ltr" lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>task</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.offcanvas.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


</script>
  </head>
  <body>
    <div class="who">
      <div class="container">
           <div class="row">
                <div class="col-sm-1">
                    </div>
                        <div class="col-sm-10 text-center">
                            <h4>FAYA Task</h4>
                        </div>
                    <div class="col-sm-1">
                  
                </div>
           </div>
          
          
          
          <div class="row">
              <div class="col-sm-8">
                 <h3>Code with tags</h3>
                   <form class="form-horizontal" action="index.php" method="POST" enctype="multipart/form-data">
                            <input type="text" class="form-control" name="url" required placeholder="enter Url" />
                            <input type="Submit" value="GO" id="submit" name="submit" class="btn btn-large btn-primary" />
    
                    </form>
                
                 <hr class="linedot">
                     
                     
                     <div id="div1">
                         <?php 
                            echo $strMain;

                         ?>
                  
                  </div>
                  
              </div>
              <div class="col-sm-4">
                                   <h3>Summary</h3>
                                 <hr class="linedot">

                 
              </div>

          </div>
      </div>
    </div>
      
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.offcanvas.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>