<?php
include("header.php");




$story = "One day, I was walking through the #adjective_1# part of #city# when I ran into a huge stack of #plural_noun#! It was the most #adjective_2# sight I had ever seen. I tried to call my best friend, #proper_noun#, to tell #name# about it but all of the #number# phone circuits were busy.";

if (isset($_POST["do"])) 

{
    foreach($field as $value) {
        $find = array('#adjective_1#', 
                 '#city#', 
                 '#plural_noun#', 
                 '#adjective_2#', 
                 '#proper_noun#', 
                 '#name#', 
                 '#number#');
        
        $replace = array( 
        '$_SESSION["adjective_1"]',
        '$_SESSION["city"]',
        '$_SESSION["plural_noun"]',
        '$_SESSION["adjective_2"]',
        '$_SESSION["proper_noun"]',
        '$_SESSION["name"]',
        '$_SESSION["number"]');
        
          

                                    }
    
};

 /*
$adjective_1 = $_SESSION['adjective_1'];
$adjective_2 = $_SESSION['adjective_2'];
$city = $_SESSION['city'];
$plural_noun = $_SESSION['plural_noun'];
$proper_noun = $_SESSION['proper_noun'];
$name = $_SESSION['name'];
$number = $_SESSION['number'];
*/
"<div>";        
echo "<p style= 'background-color: hsla(0, 4%, 100%, 0.78);
margin: 30px;
align-content: center;
padding: 30px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'> " . "One day, I was walking through the $adjective_1 part of $city when I ran into a huge stack of $plural_noun ! It was the most $adjective_2 sight I had ever seen. I tried to call my best friend, $proper_noun,to tell $name about it but all of the $number phone circuits were busy." . "</p><br><br>";

"</div>";
      
 



     
?>


 <!--
/*Using the $fields array create a loop that will replace all the placeholders in $story (defined as #variable#) with the corresponding saved values from the session 
    oFor example, #adjective_1# will be replaced with the content of$_SESSION[“adjective_1”]   

print "<br><br>". "<p  style= 'background-color: white' > " . $story . "</p>";
Print the modified contents of $story to the browser.   */ -->




