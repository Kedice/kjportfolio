<?php
include("header.php");


    
 



?>
      
    
 <form   action="story.php"   method="POST">
    

<?php
    foreach($field as $key=>$value) {
        print "<label>" . $value . "</label><br><br>";
        print "<input  type=\"text\" name=\"" . $key . "\" ><br><br>";
    }
 
     
    ?>
     
    
     
     
     
     
     
     
     
     
     
     

    <!--
    <label>Adjective 2:</label><br> 
    <br><input  type="text" name="adjective_2" ><br><br>  

    <label>Noun (plural):</label><br> 
    <br><input  type="text" name="plural_noun" ><br><br>   
     
    <label>Proper Noun:</label><br> 
    <br><input  type="text" name="proper_noun" ><br><br>
     
    <label>A Name:</label><br> 
    <br><input  type="text" name="name" ><br><br>

    <label>A city:</label><br> 
    <br><input  type="text" name="city" ><br><br>
        
    <label>A number:</label><br> 
    <br><input  type="text" name="number" ><br><br> -->
    
     
     
     
    <br>
    <br>
    <button type="submit"   name="submit"  value="submit" style="background-color:lightblue"   >submit</button>
   <!-- the do statements says does do exist? if so attain value from input boxes -->  
     <input type="hidden" name="do" value="1"    style="color: green;">
    </form>    

</body>

 </html> 
