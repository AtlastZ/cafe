
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- <link rel="stylesheet" href="css/customize.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link to icon n bootstrap -->
    <script src="https://kit.fontawesome.com/e28f4cb1ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/customize.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <style>
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: none; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
        ::-webkit-scrollbar-thumb {
            background: rgb(116, 116, 116); 
            border-radius: 5px;
        }
        body { overflow: overlay; }
        body {
  animation: fadeInAnimation ease 2s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}
@keyframes fadeInAnimation {
  0% {
      opacity: 0;
  }
  100% {
      opacity: 1;
  }
}
    </style>
</head>
<body>

<body style='background-color:#eae7e0'>

<div class="topnav fixed-top" id="myTopnav">
    <!-- centered nav item -->
    <div class="d-flex justify-content-around">
    <!-- logo -->
    <a class="btn active" href="homepage.php" >
    <i class="fas fa-coffee" ></i> 
    </a>
    <a href="homepage.php" >HOME</a>    
    <div class="dropdown">
        <button class="dropbtn">MENU
        <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content">
                        <a href="beverage.php">BEVERAGE</a>
                        <a href="dessert.php">DESSERT</a>
                        <a href="food.php">FOOD</a>
                        <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> -->
        </div>  </div>
    <a href="contact.html" >CONTACT</a> 
    <a class="btn" href="cart.php" >
        <i class="fas fa-shopping-basket" ></i>
    </a>



    <div id="main">
    <button class="openbtn" style="background-color:#714e3531 " onclick="openNav()"><i class="fas fa-user" ></i></button>  
    </div>




    </div>
    </div>
    <div id="mySidebar" class="sidebar">
 
 <!-- content -->
 <div class="p-5 container d-flex flex-wrap float-right " style="position: absolute;    padding-right: 0px !important;">
 
   <div class="m-2 cardd" style="width:40rem;; padding-top: 20px;">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  
     <img class="center" style="top:9rem;border-radius: 0% 0% 20% 20%; width: 17rem;" src="0.jpg">
   <div class="card-body" style="padding: 0rem 1rem;" >
         <i class="fas fa-star center" style="color: Tomato; font-size:12pt; display: inline-block;"> vip user   </i> 
     <h3 class="center uwuu" style="margin-top: 1rem;">NAH NHANG MAH</h3> 
     <h5 class="center uwu"> order : 10001   |   review : 3</h5>
     <br>
     <br>
  
 
     <h5 class="center uwu" style="background-color: white;"> 
     Thank you so much! <i class="far fa-kiss-beam"></i> </h5> <br>
     <h5 class="center uwu" style="background-color: white;"> 
     We appriciate your words. </h5> <br>
    <h5 class="center uwu" style="background-color: white;"> 
     Do you want to tell us more? </h5><br>
 
 <!-- <div> posted reviews</div> -->
 <a href="#"> <i class="fas fa-edit center p-3" style="color: Tomato; display: inline-block;" >  write more reviews </i></a>
 <br>
   <button class="buttonn buttonn2 center" style="margin: top 1rem;">check order</button> <br>
   <button class="buttonn buttonn2 center">log out</button>
 
   </div>
   </div>
   </div>
 
 
 
 </div>
 <script>
 function openNav() {
   document.getElementById("mySidebar").style.width = "40rem";
   document.getElementById("main").style.right = "40rem";
 }
 
 function closeNav() {
   document.getElementById("mySidebar").style.width = "0";
   document.getElementById("main").style.top= "0";
 }
 </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
            x.className += " responsive";
            } else {
              x.className = "topnav";
            }
        }
    </script>
    
</body>









<section class="header">
    <div class="header-content">
        <div class="container d-flex align-items-center">
            <div class="head-content">
            <div class="text-content">
            <?php include "cafe.php" ?>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quos unde eligendi hic porro omnis sequi. Placeat, nihil, minima voluptates magnam incidunt cumque numquam hic magni velit tenetur sed! Eius?
            </p>  
            <div class="box-2 d-flex align-item-start ">
            
            <a href="beverage.php" class="text-decoration-none ">
            <button class="btn1 btn-one border-0 bg-transparent ">
              <span style="color: white">ORDER NOW!</span>
            </button>
          </a>
               
            

          </div>
        </div>
        </div>
    </div>
</section>


<section class="reccommended my-5">
<h1 class="text-center h-topic link-page">RECOMMENDED FOOD</h1>
 </section> 

 
 <div class="container" >
    <div class="row">
    <?php
          include("config.php");
          $sql="SELECT * FROM food LEFT JOIN feedback ON feedback.ID = food.ID where feedback.Score > 4.5 LIMIT 3";
          $objQuery = mysqli_query($objCon,$sql);
          while($rows=mysqli_fetch_array($objQuery))
          {
            ?>
        <div class="col-md-4">
           <div class="card">
             <!-- <img src="assets/images/hamburger.png" alt="Avatar" style="width:100%">--><?php echo '<img src="data:image/jpg;base64,'.base64_encode($rows['Img']).'" class="card-img-top" />'; ?>
              <div class="container">
                <h4><?php echo $rows['Name']; ?></h4>
                <i class="fas fa-star menu" ><?php echo $rows['Score']; ?></i> 
                <i class="fas fa-tag menu "><?php echo $rows['Cost']; ?></i>
                <p><?php echo $rows['Review']; ?></p>
                <form action="add.php" method="post">
                <input type="hidden" name="id" value="<?=$rows['ID']?>">
                <input type="hidden" name="name" value="<?=$rows['Name']?>">
                <input type="hidden" name="cost" value="<?=$rows['Cost']?>">
                <button type="submit" class="border-0 bg-transparent">
                    <div class="fas fa-plus" style="color: Tomato;"> add to cart</div>
                </button>
            </form>
              </div>
            </div>
          </div>

          <?php } ?>



          <a href="food.php" class="text-decoration-none">
            <button class="btn1 btn-one border-0 bg-transparent">
              <span>SEE MORE</span>
            </button>
          </a>
  </div>

  <section class="reccommended my-5">
<h1 class="text-center h2-topic">RECOMENDED DESSERT</h1>
 </section> 
 <div class="container" >
    <div class="row">
    <?php
          
          $sql="SELECT * FROM dessert LEFT JOIN feedback ON feedback.ID = dessert.ID where feedback.Score > 4.5 limit 3";
          $objQuery = mysqli_query($objCon,$sql);
          while($rows=mysqli_fetch_array($objQuery))
          {
            ?>

        <div class="col-md-4">
           <div class="card">
           <?php echo '<img src="data:image/jpg;base64,'.base64_encode($rows['Img']).'" class="card-img-top" />'; ?>
              <div class="container">
                <h4><b><?php echo $rows['Name']; ?></b></h4>
                <i class="fas fa-star menu" ><?php echo $rows['Score']; ?> </i> 
                <i class="fas fa-tag menu "><?php echo $rows['Cost']; ?></i>
                <p><?php echo $rows['Review']; ?></p>
                <form action="add.php" method="post">
                <input type="hidden" name="id" value="<?=$rows['ID']?>">
                <input type="hidden" name="name" value="<?=$rows['Name']?>">
                <input type="hidden" name="cost" value="<?=$rows['Cost']?>">
                <button type="submit" class="border-0 bg-transparent">
                    <div class="fas fa-plus" style="color: Tomato;"> add to cart</div>
                </button>
            </form>
              </div>
            </div>
          </div>
            <?php } ?>


          <a href="dessert.php" class="text-decoration-none">
            <button class="btn1 btn-one border-0 bg-transparent">
              <span>SEE MORE</span>
            </button>
          </a>
  </div>

  <section class="reccommended my-5">
<h1 class="text-center h3-topic">RECOMENDED DRINK</h1>
 </section> 
 <div class="container" >
    <div class="row">

    <?php
          $sql="SELECT * FROM drinks LEFT JOIN feedback ON feedback.ID = drinks.ID where feedback.Score > 3.0 limit 3";
          $objQuery = mysqli_query($objCon,$sql);
          while($rows=mysqli_fetch_array($objQuery))
          {
            ?>

        <div class="col-md-4">
           <div class="card">
             <!-- <img src="assets/images/Mocca.jpg" alt="Avatar" style="width:100%"> --> <?php echo '<img src="data:image/jpg;base64,'.base64_encode($rows['Img']).'" class="card-img-top" />'; ?>
              <div class="container">
                <h4><b><?php echo $rows['Name']; ?></b></h4>
                <i class="fas fa-star menu" ><?php echo $rows['Score']; ?></i> 
                <i class="fas fa-tag menu "><?php echo $rows['Cost']; ?></i>
                <p><?php echo $rows['Review']; ?></p>
                <form action="add.php" method="post">
                <input type="hidden" name="id" value="<?=$rows['ID']?>">
                <input type="hidden" name="name" value="<?=$rows['Name']?>">
                <input type="hidden" name="cost" value="<?=$rows['Cost']?>">
                <button type="submit" class="border-0 bg-transparent">
                    <div class="fas fa-plus" style="color: Tomato;"> add to cart</div>
                </button>
            </form>
              </div>
            </div>
          </div>

          <?php } ?>

         

          <a href="beverage.php" class="text-decoration-none">
            <button class="btn1 btn-one border-0 bg-transparent">
              <span>SEE MORE</span>
            </button>
          </a>
  </div>
  <div class="bottom" >

             </div>
</body>
</html>

