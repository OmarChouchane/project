<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1082px)" href="../css/mob_nav.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 1083px)" href="../css/desk_nav.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1082px)" href="../css/mob_footer.css" />
    <link rel="stylesheet" href="../css/home.css">

 
</head>

<?php 

include('includes/nav.php');

?>


</head>
<body>

<div class="top_home">



<cool-ad>
<template class="ad__desktop">
    <?php 

    include('includes/second_nav.php');

    ?>
</template>
</cool-ad>



<div class="text-center">
    <h1>INCIDIDUNT LABORIS LABORIS SINT OFFICIA   </h1><br>
    <h1 class="pt-2">AUTE CONSECTETUR </h1><br>
    <h1>TITLE</h1>

</div>
</div>



<div>
    *<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>    *<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>

</div>

<?php 

include('includes/footer.php');

?>




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

</script>
