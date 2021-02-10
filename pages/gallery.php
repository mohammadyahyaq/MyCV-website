
<script type="text/javascript" src="../include/setImage.js"></script>
<?php
        include '../include/header.php';
?>
    <div class = "Heading">
        <h1> 
        Gallery
        </h1>
        <hr/>
    </div>
    <div class = "Images">
        <div class="BigImage">
              <img class="expandedImg" src="../images/MyCV.png" alt="CVImage"/>
              <br/>
              <button class = "nav" onclick="setPicture('-')">&larr;</button>
              <button class = "nav" onclick="setPicture('+')">&rarr;</button>
        </div>
        <div class="allImage">
              <div class="below">
                    <img id = "a" src="../images/MyCV.png" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "b" src="../images/View.jpg" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "c" src="../images/How_To_Write_CV.jpeg" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "d" src="../images/how_to_CV.jpg" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "e" src="../images/sample_cv_templates.jpg" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "f" src="../images/modern-template.png" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "g" src="../images/CV_2.jpg" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "h" src="../images/CV_Ways.png" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "i" src="../images/CV_3.jpg" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "j" src="../images/Example_How_To_MakeCV.png" alt="CVImage"/>
              </div>
              <div class="below">
                    <img id = "k" src="../images/exampleCV.jpg" alt="CVImage"/>
              </div>
              
        </div>
        
        <script type="text/javascript">

        </script>
    </div>
	<?php
        include '../include/footer.php';
    ?>