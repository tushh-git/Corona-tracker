<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Tracker</title>
    <!--Bootstrap-->   
<link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
   <!--Javascript-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

 <!--Google Fonta-->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

  <!--Font Awsome-->
  <script src="https://kit.fontawesome.com/405f439212.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Stylesheet-->
  <link rel="stylesheet" href="style.css">

  <!-- Javascript -->
  <link rel="stylesheet" href="index.js">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.png" />
<meta name="theme-color" content="#ffffff">

<?php
include "logic.php";
?>

</head>

<body>
<i class="fas fa-virus fa-5x fa-fw mt-2" style="color:red"  ></i>
    <div class="container-fluid bg-light p-2 text-center my-2">
        <h1>Covid19-Tracker</h1>
        <h5 class="text-muted"> Tracker for World wide Covid-19 Count </h5>
        
    </div>
    

    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-4 text-warning">
                <h6>Confirmed</h6>
                <?php echo $total_confirmed; ?>
            </div>
            <div class="col-4 text-success">
                <h6>Recovered</h6>
                <?php echo $total_recovered; ?>
            </div>
            <div class="col-4 text-danger">
                <h6>Deceased</h6>
                <?php echo $total_deaths; ?>
            </div>
        </div>
    </div>

    <div class="container bg-light p-3 my-5 text-center">
        <h6 class="text-info"> Always Wear Mask</h6>
        <h6 class="text-muted"> Sanitize you Hand in Every 1 Hour.</h6>
        <h6 class="text-muted">Stay home stay safe</h6>
    </div>

    <div class="container-fluid">
       <div class="table-responisve">
       <table class="table">
            <thead bgcolor="yellow" class="thead"> 
                <tr>
                    <th scope="col"> Countries </th>
                    <th scope="col"> Confirmed </th>
                    <th scope="col"> Recovered </th>
                    <th scope="col"> Deceased </th>
                </tr>
            </thead>
            <tbody>
<?php

foreach($data as $key => $value){
    $increase = $value[$days_count]["confirmed"] - $value[$days_count_prev]["confirmed"]
?>


<tr>
   <th> <?php echo $key;?></th>
   <td>
       <?php echo $value[$days_count]['confirmed'];?>
       <? if($increase != 0){?>
          <small class="text-danger"> <i class="fas fa-arrow-up"></i> <?php echo $increase;?></small>
         
   </td>
   <td>
       <?php echo $value[$days_count]['recovered'];?>
   </td>
   <td>
       <?php echo $value[$days_count]['deaths'];?>
   </td>
</tr>

<?php
}
?>
            </tbody>
        </table>
       </div>
    </div>

    <!-- up button -->
    
    <div class="container">
	<div class="row justify-content-center text-center">
		<div class="col-8 my-5">
			<p class="h5"></p>
			<img src="covidrules.jpeg" class="img-fluid rounded mb-3" alt="">		
		</div>
	</div>
</div>
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>


<!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark">
  <div class="container text-center">
    <span class="text-muted">Copyright &copy;,<a href="https://saralinfosoft.com/">Saralinfosoft</a>
  </div>
</footer>
    
</body>
</html>