<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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



<!-----------------TOP HOME START-------------------->

  <div class="top_home text-center">


  <!-----------SECOND NAV START------------->


      <cool-ad>
      <template class="ad__desktop">
          <?php 

          include('includes/second_nav.php');

          ?>
      </template>
      </cool-ad>



  <!-----------SECOND NAV END------------->


  <!-----------TITLES START------------->

      <div class="top_titles text-center ">
        <p>TROUVER RAPIDEMENT VOTRE GYM</p>
        <p>La meilleure plateforme pour le meilleur choix</p> 
      </div> 
  <!-----------TITLES END------------->

  
  <!-----------MODAL START-------------->   

    <!------MODAL BUTTON START----->

      <button type="button" class="btn top_home_modal_btn mb-5 mt-4 button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="this.blur();">
        CHERCHER DANS VOTRE VILLE
      </button>

    <!------MODAL BUTTON END----->


    <!------MODAL CONTENT START----->

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">


      <!------MODAL HEADER START----->

            <div class="modal-header">
              <i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;"></i>
            </div>

      <!------MODAL HEADER END----->


      <!-------MODAL BODY START------->

        <div class="modal-body" >
          <div class="card" >
            <div class="card-body">                       
              <div class="mt-2">    


        <!-------MODAL ACCORDION START-------> 

                <div class="accordion" id="accordion" role="tablist">


          <!-------MODAL ITEM START------->        

                  <div class="card" style="border-radius:25px;">
                    <div class="card-header" role="tab" id="heading-1">
                      <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1" data-abc="true">MONASTIR</a> 
                      </h6>
                    </div>
                    <div id="collapse-1" class="collapse" role="tabpanel" aria-labelledby="heading-1" data-parent="#accordion">
                      <div class="card-body">
                        <div class="list-group">      
                          <a href="" class="list-group-item list-group-item-action">MONASTIR</a>
                          <a href="#" class="list-group-item list-group-item-action">JEMMAL</a>
                          <a href="#" class="list-group-item list-group-item-action">KHENIS</a> 
                        </div>                                
                      </div>
                    </div>
                  </div>

          <!-------MODAL ITEM END-------> 


          <!-------MODAL ITEM START-------> 

                  <div class="card" style="border-radius:25px;">
                    <div class="card-header" role="tab" id="heading-2">
                      <h6 class="mb-0"> 
                        <a class="collapsed" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2" data-abc="true">SOUSSE</a> 
                      </h6>
                    </div>
                    <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion">
                      <div class="card-body">
                        <div class="list-group">      
                          <a href="" class="list-group-item list-group-item-action">MONASTIR</a>
                          <a href="#" class="list-group-item list-group-item-action">JEMMAL</a>
                          <a href="#" class="list-group-item list-group-item-action">KHENIS</a> 
                        </div>   
                      </div>
                    </div>
                  </div>
                               
          <!-------MODAL ITEM END-------> 


          <!-------MODAL ITEM START-------> 

                  <div class="card text-center" style="border-radius:25px;">
                    <div class="card-header" role="tab" id="heading-3">
                      <h6 class="mb-0"> 
                        <a class="collapsed" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3" data-abc="true">TUNIS</a> 
                      </h6>
                    </div>
                    <div id="collapse-3" class="collapse" role="tabpanel" aria-labelledby="heading-3" data-parent="#accordion">
                      <div class="card-body">
                        <div class="list-group">      
                          <a href="" class="list-group-item list-group-item-action">MONASTIR</a>
                          <a href="#" class="list-group-item list-group-item-action">JEMMAL</a>
                          <a href="#" class="list-group-item list-group-item-action">KHENIS</a> 
                        </div>  
                      </div>
                    </div>
                  </div>

          <!-------MODAL ITEM END-------> 

                </div>

        <!-------MODAL ACCORDION END-------> 

              </div>
            </div>
          </div>
        </div>

      
      <!-------MODAL BODY END------->



          </div>
        </div>
      </div>

    <!------MODAL CONTENT END----->


  <!-----------MODAL END-------------->


  <!-----------WAVE START----------->

    <div>
      <img src="../img/wave.png" class="wave">
    </div> 

  <!-----------WAVE END----------->


  </div>

<!-----------------TOP HOME END------------------->




<!-----------------USER AREA START-------------------->

  <div class="user_area">


  <!-----------------MOBILE SLIDER START------------------->

    <cool-ad>
      <template class="ad__mobile">


    <!------------------SLIDER START------------------->

      <div id="carouselExampleDark" class="carousel carousel-dark slide mb-5 mobile" data-bs-touch="false" data-bs-ride="carousel" data-aos="fade-right" data-aos-offset="200"
    data-aos-delay="10">


      <!------------------INDICATORS START------------------->

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

      <!------------------INDICATORS END------------------->


      <!------------------CONTENT START------------------->

        <div class="carousel-inner text-center px-3 ">


        <!------------------ITEM START------------------->

          <div class="carousel-item active" data-bs-interval="7000">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="row gx-0 ">
                <div class="col-lg-6 d-flex align-items-center aos-init aos-animate">
                  <img src="../img/user_slide1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                  <div class="content pt-3">
                    <h2>عندك الحرية بش  </h2>
                    <h2>, تعرف اللي تحب </h2>
                    <h2>, منين تحب </h2>
                    <h2> و وقت ما تحب </h2>
                    <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!------------------ITEM END------------------->


        <!------------------ITEM START------------------->

          <div class="carousel-item" data-bs-interval="5000">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="row gx-0 ">
                <div class="col-lg-6 d-flex align-items-center aos-init aos-animate">
                  <img src="../img/user_slide2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                  <div class="content pt-3">
                    <h2> , معلومات منظمة </h2>
                    <h2>, بكل دقة وتفصيل</h2>
                    <h2> و على حسب رغبتك </h2>
                    <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!------------------ITEM END------------------->


        <!------------------ITEM START------------------->

          <div class="carousel-item" data-bs-interval="5000">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="row gx-0">
                <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out">
                  <img src="../img/user_slide3.png" class="img-fluid" alt="" style="width:80%;margin:auto;">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                  <div class="content pt-3">
                    <h2>في اي بلاصة تحبها</h2>
                    <h2> , في كل ولاية </h2>
                    <h2>و في كل معتمدية</h2>
                    <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!------------------ITEM END------------------->


        <!------------------ITEM START------------------->

          <div class="carousel-item" data-bs-interval="5000">
              <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row gx-0 ">
                  <div class="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out">
                    <img src="../img/user_slide4.png" class="img-fluid" alt="" style="width:80%;margin:auto;">
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                    <div class="content pt-3">
                      <h2>  s'abonner تعمل  للصالة متاعك</h2>
                      <h2>و تبع جديدها</h2>
                      <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!------------------ITEM END------------------->


        </div>

      <!------------------CONTENT END------------------->


      <!------------------CONTROLS START------------------->

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      <!------------------CONTROLS END------------------->


      </div> 

    <!------------------SLIDER END------------------->
        

      </template>
    </cool-ad>

  <!------------------MOBILE SLIDER END------------------->







  <!------------------DESKTOP SLIDER START------------------->

    <cool-ad>
      <template class="ad__desktop">


    <!------------------SLIDER START------------------->

        <div id="carouselExampleDark" class="carousel carousel-dark slide desktop"  data-bs-ride="carousel" data-aos="fade-right" data-aos-offset="200"
    data-aos-delay="10">

      
      <!------------------INDICATORS START------------------->

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>

      <!------------------INDICATORS START------------------->


      <!------------------CONTENT START------------------->

          <div class="carousel-inner text-center pb-5">


        <!------------------ITEM START------------------->

          <div class="carousel-item active"  data-bs-interval="10000">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="row gx-0 ">
                <div class="col-lg-6 d-flex align-items-center aos-init aos-animate">
                  <img src="../img/user_slide1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                  <div class="content pt-5 mt-3">
                    <h2>, عندك الحرية بش تعرف اللي تحب </h2>
                    <br>
                    <h2> منين تحب , و وقت ما تحب </h2>
                    <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!------------------ITEM END------------------->


        <!------------------ITEM START------------------->

          <div class="carousel-item"  data-bs-interval="10000">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="row gx-0 ">
                <div class="col-lg-6 d-flex align-items-center aos-init aos-animate">
                  <img src="../img/user_slide2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                  <div class="content pt-5 mt-3">
                    <h2>  , معلومات منظمة , بكل دقة و تفصيل</h2>
                    <br>
                    <h2>و على حسب رغبتك </h2>
                    <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!------------------ITEM END------------------->


        <!------------------ITEM START------------------->

          <div class="carousel-item"  data-bs-interval="10000">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="row gx-0 ">
                <div class="col-lg-6 d-flex align-items-center aos-init aos-animate">
                  <img src="../img/user_slide3.png" class="img-fluid" alt="" style="width:80%;margin:auto;">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                  <div class="content pt-5 mt-3">
                    <h2> , في اي بلاصة تحبها , في كل ولاية </h2>
                    <br>
                    <h2>و في كل معتمدية</h2>
                    <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        <!------------------ITEM END------------------->


        <!------------------ITEM START------------------->

          <div class="carousel-item"  data-bs-interval="10000">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="row gx-0 ">
                <div class="col-lg-6 d-flex align-items-center aos-init aos-animate">
                  <img src="../img/user_slide4.png" class="img-fluid" alt="" style="width:80%;margin:auto;">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up">
                  <div class="content pt-5 mt-3">
                   
                    <h2> للصالة متاعك s'abonner تعمل</h2>
                    <br>
                      <h2>و تبع جديدها</h2>
                    <a href="">
                    <button class="button">
                      CONNEXION
                    </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        <!------------------ITEM END------------------->

          </div>

      <!------------------CONTENT END------------------->


      <!------------------CONTROLS START------------------->

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

      <!------------------CONTROLS END------------------->


      </div>

    <!------------------SLIDER END------------------->

    
      </template>
    </cool-ad>

  <!------------------DESKTOP SLIDER END------------------->


  </div>

<!-----------------USER AREA END-------------------->



*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>*<br>



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
