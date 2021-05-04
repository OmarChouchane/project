

<body>




<cool-ad>


<!----------------MOBILE NAVBAR start---------------->


  <template class="ad__mobile">
  
  <header style="first_nav" id="navbar">
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <i id="myBtn" class="fas fa-search my-4 nav_search" style="font-size: 30px; color:#9FFFE1;"></i>

      <!-- The Modal -->
      <div id="myModal" class="search_bar modal mt-5 pt-4">

        <!-- Modal content -->
        <div class="modal-content p-3">
          <form class="d-flex">
          <span class="close mt-1 mr-3" style="color:#141828 !important;">&times;</span>
        <input class="form-control me-2" type="search" placeholder="Chercher" aria-label="Search">
        <button class="btn" type="submit"> <i id="myBtn" class="fas fa-search" style="font-size: 20px; color:#141828;"></i></button>
      </form>
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
           

        

            <div class="nav-btn mt-3 ">
       <div class="nav-links mt-2">

           <ul>

           <li class="nav-link " style="--i: .5s">
         <a href="#">NOTIFICATIONS</a>
     </li>     
     <li class="nav-link " style="--i: .6s">
         <a href="#">ACCUEIL</a>
     </li>
     <li class="nav-link pt-3" style="--i: .7s">
         <a href="#">CONTACT</a>
     </li>
     <li class="nav-link pt-3" style="--i: .8s">
         <a href="#">A PROPOS</a>
     </li>
     <li class="nav-link pt-3" style="--i: .9s">
         <a href="#">CHERCHER<i class="fas fa-caret-down"></i></a>
         <div class="dropdown">
             <ul>
             <li class="dropdown-link">
                     <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                     <div class="dropdown second">
                         <ul>
                             <li class="dropdown-link">
                                 <a href="#">Link 1</a>
                             </li>
                             <li class="dropdown-link">
                                 <a href="#">Link 2</a>
                             </li>
                             <li class="dropdown-link">
                                 <a href="#">Link 3</a>
                             </li>
                             <div class="arrow"></div>
                         </ul>
                     </div>
                 </li>
                 <li class="dropdown-link">
                     <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                     <div class="dropdown second">
                         <ul>
                             <li class="dropdown-link">
                                 <a href="#">Link 1</a>
                             </li>
                             <li class="dropdown-link">
                                 <a href="#">Link 2</a>
                             </li>
                             <li class="dropdown-link">
                                 <a href="#">Link 3</a>
                             </li>
                             <div class="arrow"></div>
                         </ul>
                     </div>
                 </li>
                 <li class="dropdown-link">
                     <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                     <div class="dropdown second">
                         <ul>
                             <li class="dropdown-link">
                                 <a href="#">Link 1</a>
                             </li>
                             <li class="dropdown-link">
                                 <a href="#">Link 2</a>
                             </li>
                             <li class="dropdown-link">
                                 <a href="#">Link 3</a>
                             </li>
                             <div class="arrow"></div>
                         </ul>
                     </div>
                 </li>
                 <div class="arrow"></div>
             </ul>
         </div>
     </li>
    
     <li class="nav-link" style="--i: 1s">
         <a href="#">LOG IN / OUT</a>
               </li>
           </ul>
           <div class="text-center mt-4 mb-5 logs" style="--i: 1.1s !important;">
           <a href="" class="nav_logs" style="--i: 1.1s !important;"><button class="btn btn-circle m-1 fb"><i class="fab si fa-facebook-f"></i></button></a>
           <a href="" class="nav_logs" style="--i: 1.1s !important;"><button class="btn btn-circle m-1 ins"><i class="fab si fa-instagram"></i></button></a>
           </div>
            </div>
                </div>
          

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>

      <!--------------navbar end-------------->



      <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar");
var sticky = header.offsetTop ;

function myFunction() {
  if (window.pageYOffset > sticky+16) {
    header.classList.add("radius");
  } else {
    header.classList.remove("radius");
  }
}
</script>


  
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
            <a class="nav-link " style="color: #9FFFE1;" href="#" data-bs-toggle="dropdown">  CHERCHER  </a>
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





  </template>


<!----------------DESKTOP NAVBAR end---------------->


</cool-ad>











