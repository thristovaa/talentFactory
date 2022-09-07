<?php include "./db.php"; ?>
<?php global $connect; ?>


<script type="text/javascript">
$(document).ready(function(e) {
    $("#date").datepicker();
});
</script>

<?php 
if(isset($_POST['submit_rating']))
{  
  $php_rating=$_POST['phprating'];

  echo $php_rating;

  $query = "INSERT INTO test(php) ";
  $query .= "VALUES(
    '" . mysqli_real_escape_string($connect, $php_rating) . "'
    )";
  $insert=mysqli_query($connect, $query);
  if(!$insert){
    die("QUERY FAILED " . mysqli_error($connect) . ' ' . mysqli_errno($connect));
}
}

?>