<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Setting</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="{{ route('adminBoardRoute') }}" class="logo"><i class="fas fa-house"></i>MyHome</a>

         <ul>
            <li><a href="#">post property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="home.html">logout</a></li>
         
               <li><a href="usersetting.html">User Setting</a></li>
               
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
                  <span></span>
                  <a href="" class="float-right text-light">Mark all as read</a>
                  </div>
                  </li>
                  
                  <li class="notification-box">
                  <div class="row">
                  <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <!-- <img src="/demo/man-profile.jpg" class="w-50 rounded-circle"> -->
                  </div>
                  <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info"></strong>
                  <div>
                    <!-- <a href=""> </af> -->
                  </div>
                  <small class="text-warning"></small>
                  </div>
                  </div>
                  </li>
                      
                  <li class="footer bg-dark text-center">
                  <a href="" class="text-light">View All</a>
                  </li>
            </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact">
   <div>
      <table>
         <caption>ٍSettings</caption>
         <thead>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Password</th>
               <th>Type</th>
               <th>Active</th> 
               <th>Phone</th>
               <th colspan="3">Control</th>
            </tr>
         </thead>
         <tbody>

            @foreach ($allUser as $user )

            <tr>
               <td>{{ $user->name }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->password }}</td>
               <td>{{ $user->type }}</td>
               <td>@if ($user->active)
                  active
               @else
                  blocked
               @endif</td>
               <td>{{ $user->phone }}</td>
               <td>
                <a class="view" href="">Update</a>
               </td>
               <td>
                  <a class="delete" href="{{ route('deleteUser.destroy',$user->id) }}">Delete</a>
               </td>
               <td>
                  <a class="block" href="{{ route('blockUser.block',$user->id) }}">Block</a>
               </td>
               
            </tr>

            @endforeach

            
         </tbody>
      </table>

   </div>
</section>

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