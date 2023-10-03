<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">  -->
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="{{ route('adminBoardRoute') }}" class="logo"><i class="fas fa-house"></i>MyHome</a>

         <ul>
            <li><a href="{{ route('postPropertyRoute') }}">post property<i class="fas fa-paper-plane"></i></a></li>
         </ul>

      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="{{ route('logout') }}">logout</a></li>
         
               <li><a href="{{ route('userSitting.index') }}">User Setting</a></li>
               
               <li><h2 style="margin:1ch">{{ Auth::user()->name }}</h2></li>

               <li class="nav-item dropdown">
                  <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell">
                  </i>
                  </a>
                  <ul class="dropdown-menu">
                  <li class="head text-light bg-dark">
                  <div class="row">
                  <div class="col-lg-12 col-sm-12 col-12">
                  <span class="float-right text-light">Notifications ({{ Auth::user()->unreadNotifications->count() }})</span>
                  <a href="" class="float-right text-light">Mark all as read</a>
                  </div>
                  </li>

                  @foreach (Auth::user()->unreadNotifications as $notification )

                  <li class="notification-box">
                  <div class="row">
                  <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <!-- <img src="/demo/man-profile.jpg" class="w-50 rounded-circle"> -->
                  </div>
                  <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">{{ $notification->data['user_create'] }}</strong>
                  <div>
                     <a href="{{ route('viewProperty.showARNot',$notification->data['post_id']) }}">I want to {{ $notification->data['business'] }} my {{ $notification->data['type'] }} </a>
                  </div>
                  <small class="text-warning">{{ $notification->created_at }}</small>
                  </div>
                  </div>
                  </li>

                  @endforeach

                  <li class="footer bg-dark text-center">
                  <a href="" class="text-light">View All</a>
                  </li>
            </ul>
         </div>

      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home">

   <section class="center">
      <div class="container">
         <div class="hero-content">
             <span>Real Estate Trading</span>
             <p class="">Find Your Dream House By Us</p>
         </div>
       </div>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="{{ asset('BasicPhotos/icon-1.png') }}" alt="">
         <h3>buy house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="{{ asset('BasicPhotos/icon-2.png') }}" alt="">
         <h3>rent house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="{{ asset('BasicPhotos/icon-3.png') }}" alt="">
         <h3>sell house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="{{ asset('BasicPhotos/icon-4.png') }}" alt="">
         <h3>flats and buildings</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="{{ asset('BasicPhotos/icon-5.png') }}" alt="">
         <h3>shops and malls</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="{{ asset('BasicPhotos/icon-6.png') }}" alt="">
         <h3>24/7 service</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">latest listings</h1>

   <div class="table">
      <table >
         <tr>
            <td>
               <div class="box-container">
               <div class="box">
                  <div class="admin">
                     <h3>Y</h3>
                     <div>
                        <p>Youshaa</p>
                        <span>10-7-2023</span>
                     </div>
                  </div>
                  <div class="thumb">
                     <img src="{{ asset('BasicPhotos/house-img-1.webp') }}" alt="">
                  </div>
                  <h3 class="name">modern flats and appartments</h3>
                  <p class="location"><i class="fas fa-map-marker-alt"></i><span>MOSIAF,HAMA, SYRIA</span></p>
                  <div class="flex">
                     <p><i class="fas fa-bed"></i><span>3</span></p>
                     <p><i class="fas fa-bath"></i><span>2</span></p>
                     <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
                  </div>
                  <a href="{{ route('listingPost.index') }}" class="btn">view property</a>
               </div>
               </div>
            </td>
            <td>
               <div class="box-container">
                  <div class="box">
                     <div class="admin">
                        <h3>H</h3>
                        <div>
                           <p>Hussain</p>
                           <span>11-7-2023</span>
                        </div>
                     </div>
                     <div class="thumb">
                        <img src="{{ asset('BasicPhotos/house-img-2.webp') }}" alt="">
                     </div>
                     <h3 class="name">modern flats and appartments</h3>
                     <p class="location"><i class="fas fa-map-marker-alt"></i><span>SAFITA,TARTOUS,SYRIA</span></p>
                     <div class="flex">
                        <p><i class="fas fa-bed"></i><span>3</span></p>
                        <p><i class="fas fa-bath"></i><span>2</span></p>
                        <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
                     </div>
                     <a href="{{ route('listingPost.index') }}" class="btn">view property</a>
                  </div>
               </div>
            </td>
            <td>
               <div class="box-container">
                  <div class="box">
                     <div class="admin">
                        <h3>A</h3>
                        <div>
                           <p>Ahmad</p>
                           <span>11-7-2023</span>
                        </div>
                     </div>
                     <div class="thumb">
                        <img src="{{ asset('BasicPhotos/house-img-3.jpg') }}" alt="">
                     </div>
                     <h3 class="name">modern flats and appartments</h3>
                     <p class="location"><i class="fas fa-map-marker-alt"></i><span>MOSIAF,HAMA,SYRIA</span></p>
                     <div class="flex">
                        <p><i class="fas fa-bed"></i><span>3</span></p>
                        <p><i class="fas fa-bath"></i><span>2</span></p>
                        <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
                     </div>
                     <a href="{{ route('listingPost.index') }}" class="btn">view property</a>
                  </div>
               </div>
            </td>
            <td>
               <div class="box-container">
               <div class="box">
                  <div class="admin">
                     <h3>Y</h3>
                     <div>
                        <p>Youshaa</p>
                        <span>10-7-2023</span>
                     </div>
                  </div>
                  <div class="thumb">
                     <img src="{{ asset('BasicPhotos/house-img-4.webp') }}" alt="">
                  </div>
                  <h3 class="name">modern flats and appartments</h3>
                  <p class="location"><i class="fas fa-map-marker-alt"></i><span>MOSIAF,HAMA, SYRIA</span></p>
                  <div class="flex">
                     <p><i class="fas fa-bed"></i><span>3</span></p>
                     <p><i class="fas fa-bath"></i><span>2</span></p>
                     <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
                  </div>
                  <a href="{{ route('listingPost.index') }}" class="btn">view property</a>
               </div>
               </div>
            </td>
         </tr>
   </table>
   </div>

      

   <div style="margin-top: 2rem; text-align:center;">
      <a href="{{ route('listingPost.index') }}" class="inline-btn">view all</a>
   </div>

</section>

<!-- listings section ends -->










<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:+963997716320"><i class="fas fa-phone"></i><span>0997716320</span></a>
         <a href="tel:+96338461044"><i class="fas fa-phone"></i><span>0938461044</span></a>
         <a href="mailto:realestatewebsite@gmail.com"><i class="fas fa-envelope"></i><span>realestatewebsite@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>HOMS, SYRIA </span></a>
      </div>

      <div class="box">
         <a href="home.html"><span>home</span></a>
         <a href="about.html"><span>about</span></a>
         <a href="contact.html"><span>contact</span></a>
         <a href="listings.html"><span>all listings</span></a>
         
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">&copy; copyright @ 2023 by <span>IT Group 4</span> | all rights reserved!</div>

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>