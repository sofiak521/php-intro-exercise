 <html>
 <body>
 
 <?php
 //-- dbase for movies
$movies = array(
  "drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),
	"comedy" => array("The Hangover","Knocked Up","Due Date"),
	"horror" => array("Halloween","The Conjuring","The Shining")
	); 
 
$result=""; 
//-- get title  and type from form 
$title = $_POST['title'];
$category =$_POST['category'];

if($title !=="")  {
  $title = strtolower($title);
  $len = strlen($title);
  foreach($movies[$category] as $each_movie)   {
     //echo "<br/>" . $each_movie . "----" ;
     if (stristr($title, substr($each_movie, 0, $len))){
           if ($result === "")   {
                  $result = $each_movie; } 
           else {
                 $result .= ", $each_movie" ;
           } //-- else
     } //-- if 
  } //-- foreach 
} //-- if 
echo "<br/>"; 
echo $result ==="" ? "no movie" : $result; 

?>
</body>
</html>

