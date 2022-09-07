<?php include "./includes/db.php"; ?>
<?php global $connect; ?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="./css/rating_style.css">
  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;
        console.log("NEshto ", ab);


      document.getElementById('phprating').value = ab;


      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="./images/logo/star_pink.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="./images/logo/star_empty.png";
      }
   }
   function check (){
    let inputs = document.querySelectorAll()
   }
</script>
</head>

<body>

<h1>Star Rating System Using PHP and JavaScript</h1>

<?php
	
    $query = "SELECT * FROM test ";
    $rating_query = mysqli_query($connect, $query);
    $total=mysqli_num_rows($rating_query);
    echo $total;
  
    while($row=mysqli_fetch_assoc($rating_query))
    {
        $phpar[] = $row['php'];
    }
    $total_php_rating=(array_sum($phpar)/$total);
  
?>

<form method="post" action="./includes/insert_rating.php">
  <p id="total_votes">Total Votes:<?php echo $total;?></p>
  <div class="div">
	  <p>PHP (<?php echo $total_php_rating;?>)</p>
	  <input type="hidden" id="php1_hidden" name="rating[]" value="1">
	  <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php1" class="php">
	  <input type="hidden" id="php2_hidden" name="rating[]" value="2">
	  <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php2" class="php">
	  <input type="hidden" id="php3_hidden" name="rating[]" value="3">
	  <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php3" class="php">
	  <input type="hidden" id="php4_hidden" name="rating[]" value="4">
	  <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php4" class="php">
	  <input type="hidden" id="php5_hidden" name="rating[]" value="5">
	  <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php5" class="php">
  </div>

  <input type="hidden" name="phprating" id="phprating" value="0">
  <input type="submit" value="Submit" name="submit_rating">

</form> 

</body>
</html>