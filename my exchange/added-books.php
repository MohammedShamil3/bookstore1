<?php
require_once 'process.php';
$output="";
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Added Books</title>
    <style>
        body{
            background: rgb(238, 238, 238);
        }
       .info
       {
           height:40%;
           width:100% ;
           background:dimgray;
      
           margin-right:20px;
           color:white;
       }
       .sidebar 
       {
           width:100%;
           height:39px;
           text-align:center;
           border-collapse:collapse;
           color:white;
       }


    </style>
</head>
<body>
    <header class="" style="position: fixed; width: 100%; z-index: 1; background: linear-gradient(45deg, green,rgb(223, 148, 50));">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-11 col-9 p-3 pl-5">
               <H2>Added Books</H2>
              </div>
              <div class="col-md-1 col-3 p-3 pl-5">
              <a href="my-exchange.php"class="btn btn-success">Back</a>
              </div>
              </div>
              </div>
    </header>
    <section class="" >
    <div class="container " style="padding-top:5rem";>
   
        <div class="row ">
    
    
            <div class="col-sm-12">
              
                <div class="row mt-4">
                <?php
$c_id = $_SESSION['customerid'];

 


   $mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
   $RESULT = $mysqli->query("SELECT * FROM exchange WHERE userid='$c_id'") or die(mysqli_error($mysqli));
   while($row = $RESULT->fetch_assoc()):?>
        
            
            <div class="col-md-3 pb-3">
                    <div class="card">
                    <div class="card-body">
                    <img src="<?php echo $row['image'];?>" height="200px" width="100%">
                    <h5 style="font-size:x-smaller"> <?php echo $row['name']; ?> </h5>
          <h5 style="font-size:medium">by <?php echo $row['author']; ?> </h5>  
          <h5 style="font-size:medium"> <?php echo $row['description']; ?> </h5>  
           
          <h5 style="font-size:larger; color:red;"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['price']; ?> </h5> 
          <h5 style="font-size:medium">To Buy <br> contact : <?php echo $row['mobile']; ?> </h5>  
          <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE THIS AD</a>
                        </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>  
</section>    
<footer class=" mt-5" style=" width: 100%;   background:linear-gradient(45deg,
#b91eda,
#a02ae0,
#8234e5,
#5d3be8,
#c012eb    

); width:100% margin-top:10rem" >
  
    <div class="row">
      <div class="col-md-12 text-center mt-5 text-white" >
        <h6>Follow Me Here</h6>
    



      </div>
    </div>
  </div>


</footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>