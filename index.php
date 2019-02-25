<!DOCTYPE html>


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

  function sendAjaxRequest(element, fulltext) {
             var clickedButton = element;
             var fulltex = fulltext;
                  $.ajax({type: "POST",
                          url:  "ajax_page.php",
                          data: { name: clickedButton, alltex:fulltex},
                          success:function(result){
                              $("#div1").html(result);
                          },
                         error:function(result)
                          {
                                alert('error');
                         }
                 });
     }
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
                    <p>  <?php 


$strMain ="";
  $url = "nul";
if(isset($_POST["url"]))
{
    if(!empty($_POST["url"])){
        $url = $_POST["url"];
              if (@file_get_contents($url) === false) {
                            echo 'URL Not Found';
                            
               }else{

                            $data = file_get_contents($url);
                            $strMain = htmlentities($data);

                 }

                }
}

?></p>
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
                  
                  
                  <?php 


  $url = "nul";
if(isset($_POST["url"]))
{
    if(!empty($_POST["url"])){
        $url = $_POST["url"];
              if (@file_get_contents($url) === false) {
                            echo 'Enter a valid url and summary apears';
                            
               }else{
?>          
                  <?php $arr = array("html", "a ", "abbr", "h1", "h2", "h3", "h4", "h5", "acronym", "address", "applet", "area", "article", "aside", "audio", "b ", "base", "basefont", "bdi", "big", "blockquote", "body", "br", "button", "canvas", "caption", "center", "cite", "code", "col", "colgroup", "data ", "datalist", "dd", "del", "details", "dfn", "dialog", "dir", "div", "dt", "dl", "em ", "embed", "fieldset", "figcaption", "figure", "font", "footer", "form", "frame ", "frameset", "head ", "header", "hr", "i", "iframe", "img", "input", "ins", "kbd", "label", "legend", "li ", "link", "main", "map", "meta", "meter", "nav", "noframes", "noscript", "object", "ol", "optgroup", "option", "output", "p ", "param", "picture", "pre", "progress", "q", "rp", "rt", "ruby", "s ", "samp", "script", "section", "select", "smal", "source", "span", "strike", "strong", "style", "sub", "summary", "sup", "svg", "table", "tbody", "td", "template", "textarea", "tfoot", "th ", "thead", "time", "title", "tr", "track", "tt", "u", "ul", "var", "video", "wbr");
                                foreach ($arr as &$value) { 
                         if(substr_count($strMain,  "&lt;". $value) > 0){
                  
                  ?>

     <li><a onclick="sendAjaxRequest('<?php echo $value; ?>','<?php echo $url; ?>');"><code>&lt;<?php echo $value; ?>&gt;</code></a>  <?php echo substr_count($strMain,  "&lt;". $value) + substr_count($strMain,  $value. "&gt;"); ?></li>

                                <?php }
                                
                                }?>


                    <?php 
                 }

                }
}

?>
                  
                  
                  
                

                 
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
