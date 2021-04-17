
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="../../css/mob_nav.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 481px)" href="../../css/desk_nav.css" />
    

 
</head>
<body>




</head>  
<body>

<cool-ad>


<!----------------MOBILE NAVBAR start---------------->


<template class="ad__mobile">
  </form>
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

  <div class="navbar">
  <span style="font-size:3rem;cursor:pointer; margin-left:3vw;color:white;" onclick="openNav()">&#9776;</span>
  <span onclick="dropSearch()" style="color:white; font-size:2rem;margin-right:3vw;" ><i class="fas fa-search"></i></span>
  </div>


  <div class="input-group" id="searchBar" style="width:0;">
  <div class="form-outline" id="searchBar" style="width:0;">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary" id="searchBar" style="width:0;">
    <i class="fas fa-search"></i>
  </button>
</div>



</template>


<!----------------MOBILE NAVBAR end---------------->




<!----------------DESKTOP NAVBAR start---------------->


<template class="ad__desktop">

  <div class="topnav">
    <a href="accueil.php" class="logo">TITLE</a>
    <div class="topnav-right">
    
    <form action="search.php" autocomplete="on" class="search">
      <input id="search" name="search" type="text" placeholder="Chercher votre gym" class="searchbar">
      <button class="searchbtn" type="submit"><i class="fas fa-search"></i></button>
  </form>
      <a href="#" class="active">Nav</a>
      <a href="#">Nav</a>
      <a href="#">Nav</a>
      <a href="#">Nav</a>
      <a href="#">Nav</a>
    </div>
  </div>
  
</template>


<!----------------DESKTOP NAVBAR end---------------->


</cool-ad>


</body>





<script>



class AdComponent extends HTMLElement {
  connectedCallback() {
    const isMobile = matchMedia('(max-width: 500px)').matches;    
    const ad = document.currentScript.closest('.ad');
    const content = this
      .querySelector(isMobile ? '.ad__mobile' : '.ad__desktop')
      .content;
    
    this.appendChild(document.importNode(content, true));
  }
}

customElements.define('cool-ad', AdComponent);



function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function dropSearch() {
  document.getElementById("searchBar").style.width  = "100%";
  document.getElementById("searchBar").style.transition = "1s";
}

function hideSearch() {
  document.getElementById("searchBar").style.width = "0";
}
</script>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html> 