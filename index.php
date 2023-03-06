<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles/index.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Home Page</title>
</head>
<body >
    <div class="container h-100 border border-dark mt-4 rounded-4 bg-light" id="parent-div">
<!-- top header -->
<div class="container top-header text-center mt-3 d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
       
<!-- 
            <button class="btn d-none d-sm-block border border-dark sign-in-up-btn" id="sign-in-up-btn">ورود | ثبت نام    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
         <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg> </button>
            <button class="btn d-sm-none border border-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
             <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg></button> -->
          
            <!-- account management -->
            <div class="dropdown-center me-md-0 me-lg-2 me-xl-4">
                    <!-- <button class=" acc-btn dropdown-toggle ms-2 ms-sm-4" type="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                        <div class="ms-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="Images/userpic.png" class="" width="50px" height="50px" alt="" > 
                      <!-- </button> -->
                      <h6 class="mt-1" >username</h6>
                      </div>
                   <ul class="dropdown-menu text-end fs-6 fst-normal ">
                       <div class="container">
                           <div class="container form-check form-switch d-flex justify-content-center d-row">
                               <div class="me-5">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
  <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
</svg>
                               </div>
                           <input class="form-check-input me-2" id="dark-bg-check"  type="checkbox" role="switch" id="flexSwitchCheckDefault">
                          <div class="me-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
  <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
  <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
</svg>
                          </div>
                        </div>
                        <hr class="mt-2 mb-1">
                       <li><a class="dropdown-item li-item" href="#">داشبرد  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg></a></li>
                       <hr class="mt-1 mb-1">
                       <li><a class="dropdown-item li-item" href="#">ثبت پست جدید  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg></a></li>
                       <hr class="mt-1 mb-1">
                       <li><a class="dropdown-item li-item" href="#">اعلان ها  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                             <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                            </svg></a></li>
                       <hr class="mt-1 mb-1">
                           <li><a class="dropdown-item li-item" href="#">تنظیمات حساب کاربری  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                 <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                            </svg></a></li>
                            <hr class="mt-1 mb-1">
                            <li><a class="dropdown-item li-item" href="#"> خروج  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                          </svg></a></li>
                           </div>
                   </ul>
             </div>
             <!-- main navbar -->
         
           <div class="d-flex flex-row align-items-center">
            <div class="d-none d-md-block ms-md-3 ms-lg-0 ms-md-5 me-3">
            <form class="d-flex ms-md-5" role="search">
        <input class="form-control me-2 text-end" type="search" placeholder="... جست و جو " aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
      </form>
      
            </div>
            <div class=" d-none d-lg-flex" style="height : 30px;">
            <div class="vr"></div>
            </div>
            <nav aria-label="breadcrumb" class="mt-4 ms-3 d-none d-lg-block ">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="#" id="nav-home">همه پست ها</a></li>
    <li class="breadcrumb-item"><a href="#" id="nav-home">آخرین پست ها</a></li>
    <li class="breadcrumb-item"><a href="#" id="nav-home">خانه</a></li>

  </ol>
</nav>
</div> 
            <div class="container d-sm-none"></div>
            <button class="btn btn-primary d-lg-none " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
            </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                     <div class="offcanvas-header pb-0">
                         <h1 class="offcanvas-title" id="offcanvasRightLabel">Example</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                         
                      </div>
                      
                <div class="offcanvas-body pt-0">
                <hr>
                <div class="d-flex flex-column align-items-center">
                <form class="d-flex" role="search">
        <input class="form-control me-2 text-end" type="search" placeholder="... جست و جو " aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
      </form>     
            </div>

              </div>
              </div>
   

       
    </div>



</div>
<!-- heading seperator -->
<div class="container">
<hr>
</div>
<div class="container mt-4 h-50">
    <!-- statistics -->
    <div class="">
    <div class="row  text-center">
        <div class=" col-md-4 align-items-center d-flex flex-column">
    <h5 class="">کاربرهای با بیشترین بازدید</h5>
    <hr class="w-50">
    <h6 class="">asdasdasd</h6>
    <h6>asdasdasd</h6>
    <h6>asdasdasd</h6>
    <hr class="w-50 d-md-none">

    </div>
    <div class="col-md-4 align-items-center d-flex flex-column">
    <h5 class="mt-2 mt-md-0">کاربر های تازه </h5>
    <hr class="w-50">
    <h6 class="">asdasdasd</h6>
    <h6>asdasdasd</h6>
    <h6>asdasdasd</h6>
    <hr class="w-50 d-md-none">

    </div>

    <div class="col-md-4 align-items-center d-flex flex-column">
    
    <h5 class="mt-2 mt-md-0">بازدید کل وبلاگ</h5>
    <hr class="w-50">
    <h6 class="mt-4">265</h6>
    </div>
    </div>
    <!-- body seperator -->

        <hr class="mt-4 mb-4">

    </div>
    <!-- Posts -->

    <div class="container h-100 ">
        <div class="row text-md-end text-center ">
        <h4 class="float-md-end">آخرین پست ها </h4>
        </div>
        <div class="row border border-dark h-100">
            
        </div>

    </div>


</div>
</div>










<script src="Scripts/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>