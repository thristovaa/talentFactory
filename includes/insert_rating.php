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

  $query = "UPDATE posts SET ";
  $query .= "create_rating = 
            '" . mysqli_real_escape_string($connect, $php_rating) . "' ";
  $query .= "WHERE create_id = {$p_id}" ;

  $insert = mysqli_query($connect, $query);
  if(!$insert){
    die("QUERY FAILED " . mysqli_error($connect) . ' ' . mysqli_errno($connect));
}
}

?>