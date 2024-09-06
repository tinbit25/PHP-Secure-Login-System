<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>double_opening accessories</title>
  </head>
  <link rel="stylesheet" type="text/css" href="css/4.css">
  <body>
  <div class="main">
    
    <header>
        <br><br><br><br><br><br>
        <h1>King Steel</h1>
        
      </header>
 
<div class="container">
<?php
if(isset($_GET['msg'])){
$msg=$_GET['msg'];
echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>

    
    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">materials</th>
      <th scope="col">quantity</th>
      <th scope="col">remark</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "conn.php";
    $sql="SELECT *FROM `doubleopen`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
    
    ?>
   
    <tr>
    <td style="color: black;"><?php echo $row['id']?></td>
      <td style="color: black;"><?php echo $row['materials']?></td>
      <td style="color: black;"><?php echo $row['quantity']?></td>
      <td style="color: #f685a2;"><?php echo $row['remark']?></td>
      
     
    </tr>
    <?php
    }
    ?>
    
  </tbody>
</table>
</div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </body>
</div>
</html>
