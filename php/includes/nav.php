
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="../css/mob_nav.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 481px)" href="../css/desk_nav.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="../css/mob_footer.css" />
    

 
</head>
<body>

<style>
  body{
    background-color:#EEEEEE;
  }
</style>



<cool-ad>


<!----------------MOBILE NAVBAR start---------------->


  <template class="ad__mobile">
  
      <!--------------sidebar start-------------->


        <div id="mySidenav" class="sidenav">
          <div class="top">
          <ul class="d-flex justify-content-between">
              <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
              <li class="menuUser">user</li>
              <li> <a href="#" class="notif"><i class="far fa-bell fa-2x"></i></a></li>
          </ul>
        
          
          </div>
        
          <div class="items">
            <a href="#" class="item">Accueil</a>
            <a href="#" class="item">Nous Contacter</a>
            <a href="#" class="item">A Propos</a>
            <a href="#" class="item">Trouver</a>
            <a href="login.php" class="item">Login</a>
          </div>
        </div>


      <!--------------sidebar start-------------->




      <!--------------navbar start-------------->

        <div class="navbar">
        <span style="font-size:3rem;cursor:pointer; margin-left:3vw;color:#9FFFE1;" onclick="openNav()">&#9776;</span>
        <span onclick="dropSearch()" style="color:#9FFFE1; font-size:35px;margin-right:3vw;" ><i class="fas fa-search pr-2"></i></span>
        </div>

      <!--------------navbar end-------------->






  </template>


<!----------------MOBILE NAVBAR end---------------->









<!----------------DESKTOP NAVBAR start---------------->


  <template class="ad__desktop">


  <!----------------first navbar start---------------->





       
   <nav class="navbar navbar-expand-lg navbar-dark  first_bar "  style="background: #141828;">
      <div class="container-fluid">
      <a class="navbar-brand" href="#"><h1 style="color:#9FFFE1 ;">LOGO</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navs" id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" style="color: #9FFFE1;" href="#">HOME </a> </li>
          <li class="nav-item"><a class="nav-link" style="color: #9FFFE1;"  href="#"> CONTACT </a></li>
          <li class="nav-item"><a class="nav-link" style="color: #9FFFE1;" href="#"> A PROPOS </a></li>
          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle" style="color: #9FFFE1;" href="#" data-bs-toggle="dropdown">  CHERCHER  </a>
            <ul class="dropdown-menu " style="background:#141828;">
              <li> <a class="dropdown-item"   href="#"> Dropdown item 1 </a></li>
              <li> <a class="dropdown-item"  href="#"> Dropdown item 2 &raquo; </a>
                <ul class="submenu dropdown-menu" style="background:#141828;">
                  <li><a class="dropdown-item"  href="#">Submenu item 1</a></li>
                  <li><a class="dropdown-item"  href="#">Submenu item 2</a></li>
                  <li><a class="dropdown-item"  href="#">Submenu item 3 &raquo; </a>
                    <ul class="submenu dropdown-menu" style="background:#141828;">
                      <li><a class="dropdown-item"  href="#">Multi level 1</a></li>
                      <li><a class="dropdown-item"  href="#">Multi level 2</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item"  href="#">Submenu item 4</a></li>
                  <li><a class="dropdown-item"  href="#">Submenu item 5</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item"  href="#"> Dropdown item 3 </a></li>
              <li><a class="dropdown-item"  href="#"> Dropdown item 4 </a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- navbar-collapse.// -->
      </div>
      <!-- container-fluid.// -->
      </nav>





    <!----------------dropdown js start---------------->

        <script>

        document.addEventListener("DOMContentLoaded", function(){
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

          // close all inner dropdowns when parent is closed
          document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
            everydropdown.addEventListener('hidden.bs.dropdown', function () {
              // after dropdown is hidden, then find all submenus
                this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                  // hide every submenu as well
                  everysubmenu.style.display = 'none';
                });
            })
          });

          document.querySelectorAll('.dropdown-menu a').forEach(function(element){
            element.addEventListener('click', function (e) {
                let nextEl = this.nextElementSibling;
                if(nextEl && nextEl.classList.contains('submenu')) {	
                  // prevent opening link if link needs to open dropdown
                  e.preventDefault();
                  if(nextEl.style.display == 'block'){
                    nextEl.style.display = 'none';
                  } else {
                    nextEl.style.display = 'block';
                  }

                }
            });
          })
        }
        // end if innerWidth
        }); </script>


    <!----------------dropdown js end---------------->



    
  <!----------------first navbar end---------------->



  <!----------------second navbar start---------------->


    <!------sticky JS function start------->

        <script>
      window.onscroll = function() {myFunction()};

      var header = document.getElementById("second_bar");
      var sticky = header.offsetTop;

      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
      </script>

    <!------sticky JS function end------->

    
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between second_bar my-1" id="second_bar">


    <!------------MODAL START------------->

        <div class="d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none ">



          <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">

      <!-- Trigger/Open The Modal -->
      
      <button id="myBtn" class="modal_btn "  style="font-size: 18px; " > Chercher votre salle <i class="fas fa-search" style="font-size: 18px;"></i></button>

      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <p>Some text in the Modal..</p>
        </div>

      </div>

      <!------------modal js start-------------> 
        <script>
          // Get the modal
          var modal = document.getElementById("myModal");

          // Get the button that opens the modal
          var btn = document.getElementById("myBtn");

          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];

          // When the user clicks on the button, open the modal
          btn.onclick = function() {
            modal.style.display = "block";
          }

          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
            modal.style.display = "none";
          }

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
        </script>
      <!------------modal js end-------------> 

      </div>
      
    <!------------MODAL END-------------> 

      
        
  
  
    <!------------right items start-------------> 


      <!------------connected start-------------> 
        <div class="col-md-6 text-right"><div class="float-right">
          <ul>
            <li>
              <ul>
                <li><a href=""><i class="far fa-bell icon mx-2" style="font-size: 30px;"> </i></a></li>
          
                <li class="dropbtn"><div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fab fa-github icon" style="font-size: 30px;"></i>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
        </div></li>
                </ul>
      <!------------connected end-------------> 

      <!------------!connected start------------->
              <ul>
                <li class="con"><a href="">connexion</a></li>
                <li class="con"><a href="">creer un compte</a></li>
              </ul>
            </li>
          </ul>
      <!------------!connected start------------->

        </div>
        </div> 
            </div>

    <!------------right items end-------------> 


  <!----------------second navbar end---------------->




  </template>


<!----------------DESKTOP NAVBAR end---------------->


</cool-ad>











