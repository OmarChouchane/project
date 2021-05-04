

<style>
    
/*------------SECOND BAR START------------*/



.sticky {
      position: fixed;
      top: 0;
      width: 100%;
      opacity:0.5;
      transition: 0.5s;
      background:transparent;
      z-index: 100000;
    
    }

    .sticky:hover{
      opacity:1;
    }



    /* The Modal (background) */
    .second_bar .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .second_bar .modal-content {
      background-color: #fefefe;
      margin: 15% auto; /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .second_bar .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .second_bar .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }



    .second_bar .modal_btn{
      border: 0;
      background-color: transparent;
    }



    .second_bar .modal_btn {
      text-align: center;
      text-transform: uppercase;
      cursor: pointer;
      position: relative;
      background-color:  #9FFFE1;
      border: none;
      color: #141828;
      text-align: center;
      transition-duration: 0.4s;
      overflow: hidden;
      box-shadow:0 0 10px 0 rgb(0 0 0 / 20%);
      border-radius: 4px;
      padding: 5px;
    }

    .second_bar .modal_btn:hover {
      background:#141828;
      color: #9FFFE1;

    }



    .second_bar .modal_btn:active:after {
      padding: 0;
      margin: 0;
      opacity: 1;
      transition: 0s
    }


    .second_bar ul{
      list-style: none;

    }



    .second_bar ul li{
      float: left;
      border: none;
      background-color: transparent;
      display: inline;  
      margin: 0 10px;
    }


    .second_bar ul .icon{
      color: #9FFFE1;
      padding: 5px;
      font-size: 30px;
      margin: 0;
      transition: 0.5s;
    }

    .second_bar ul .icon:hover{
      color: white;
    }

    .second_bar ul {
      margin-right: 30px;

    }


    .second_bar .con {
      transition: all 0.25s linear;
      position: relative;
    }

    .second_bar .con:before {
      content: "";
      display: block;
      width: 100%;
      height: 2px;
      background-color: #9FFFE1;
      position: absolute;
      left: 0;
      bottom: -3px; /* this is to match where the border is */
      transform-origin: left; 
      transform: scale(0);
      transition: 0.25s linear;
    /*   will-change: transform; */
    }

    .second_bar .con:hover:before {
      transform: scale(1);
    }




    .second_bar a{
      color: #9FFFE1;
      transition: 0.5s;
      
    }


    .second_bar a:hover{
      color: white;
      text-decoration: none;
    }


    .second_bar .con{
      margin: 7px 20px;
    }


    .second_bar .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      right: 0;
      z-index: 1;
    }

/*------------SECOND BAR END------------*/

</style>



<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between second_bar" id="myHeader">


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
        <div class="dropdown text-end">
    <a href="#" class="d-block link-dark text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="far fa-bell icon"></i>
    </a>
    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</li>
<li>
<div class="dropdown text-end">
    <a href="#" class="d-block link-dark text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="far fa-user-circle icon"></i>
    </a>
    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div></li>
</ul>
</div>
</li>
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
    


    
        


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
