<?php 
if(isset($_REQUEST))
{
mysql_connect("localhost","root","");
mysql_select_db("darts");
#error_reporting(E_AiLL && ~E_NOTICE);

$p1Score=$_GET['p1'];
$p2Score=$_GET['p2'];
$sql="INSERT INTO games(game, score_p1, p1, score_p2, p2) VALUES ('1', '$p1Score', '1','$p2score', '2')";
$result=mysql_query($sql);
if($result){
echo "You have been successfully subscribed.";
}
}
?>
