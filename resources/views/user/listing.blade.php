<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Listings</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="{{ route('userPageRoute') }}" class="logo"><i class="fas fa-house"></i>MyHome</a>

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
         
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.html">about us</a></i></li>
                     <li><a href="contact.html">contact us</a></i></li>
                     <li><a href="contact.html#faq">FAQ</a></i></li>
                  </ul>
               </li>
               <li><h2 style="margin:1ch">{{ Auth::user()->name }}</h2></li>
      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">all listings</h1>
   <div class="buttons">
      <button class="inline-btn"> sell</button>
      <button class="inline-btn">mortgage</button>
      <button class="inline-btn">rent</button>
   </div>
   <div  class="list">
      <table>

         @foreach ($postInfo as $post )      
       <tr>
          <td>        
             <div class="box-container">
               <div class="box1">
                  <div class="admin">
                     <h3>Y</h3>
                     <div>
                        <p>{{ $post->users->name }}</p>
                        <span>{{ $post->created_at }}</span>
                     </div>
                  </div>
                  <div class="thumb">
                     <img src="{{ asset('images/'.$post->pathOfPhotos) }}" alt="">
                  </div>
                  <h3 class="name">modern {{ $post->type }} for inest </h3>
                  <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{ $post->town }},{{ $post->city }}, SYRIA</span></p>
                  <div class="flex">
                     <p><i class="fas fa-bed"></i><span></span></p>
                     <p><i class="fas fa-bath"></i><span></span></p>
                     <p><i class="fas fa-maximize"></i><span></span></p>
                  </div>
                  <a href="{{ route('viewProperty.show',$post->id) }}" class="btn">view property</a>
               </div>
            </div>
            </td>
       </tr>

       @endforeach

       </table>
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