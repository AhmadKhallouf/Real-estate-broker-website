<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Property</title>

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
                     <li><a href="">about us</a></i></li>
                     <li><a href="">contact us</a></i></li>
                     <li><a href="">FAQ</a></i></li>
                  </ul>
            </ul>
            <li><h2 style="margin:1ch">{{ Auth::user()->name }}</h2></li>
      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- view property section starts  -->

<section class="view-property">
  
@foreach ($postInfo as $post )
   <div class="details">
      <div class="thumb">
         <div class="big-image">
            <img src="images/house-img-1.webp" alt="">
         </div>
         <div class="small-images">
            <img src="{{ asset('images/' . $post->pathOfPhotos) }}" alt="">
            {{-- <img src="images/hall-img-1.webp" alt="">
            <img src="images/kitchen-img-1.webp" alt="">
            <img src="images/bathroom-img-1.webp" alt=""> --}}
         </div>
      </div>
      <h3 class="name">we thanks you for your trust</h3>
      <div class="info">
         <!-- <p><i class="fas fa-tag"></i><span>15 lac</span></p> -->
         <p><i class="fas fa-user"></i><span></span>{{$post->users->name}}</p>
         <p><i class="fas fa-phone"></i><a href=""></a>{{ $post->users->phone }}</p>
         <p><i class="fas fa-building"></i><span>{{ $post->type }}</span></p>
         <p><i class="fas fa-house"></i><span>{{ $post->business }}</span></p>
         <p><i class="fas fa-calendar"></i><span>{{ $post->created_at }}</span></p>
      </div>
      <h3 class="title">details</h3>
      <div class="flex">
         <div class="box">
            <p><i>City :</i><span>{{ $post->city }}</span></p>
            <p><i>Town :</i><span>{{ $post->town }}</span></p>
            <p><i>Vilage :</i><span>{{ $post->village }}</span></p>
            <p><i>Property Number :</i><span>{{ $post->numberOfRealEstate }}</span></p>
            <p><i>Property Price :</i><span>{{ $post->price }} SYB</span></p>
            <p><i>Time Of Investment:</i><span>{{ $post->timeOfInv }}</span></p>
            
         </div>
         <div class="box">
            <p><i>room floor :</i><span></span></p>
            <p><i>total floors :</i><span></span></p>
            <p><i>rooms :</i><span></span></p>
            <p><i>bedroom :</i><span></span></p>
            <p><i>bathroom :</i><span></span></p>
            <p><i>balcony :</i><span></span></p>
         
         </div>
      </div>
      @if (auth()->user()->type == 'admin')
      <div><table><tr><td><a class="delete" href="{{ route('viewProperty.destroy',$post->id) }}" >Delete</a></td>  <td><a class="view" href="{{ route('viewProperty.edit',$post->id) }}">Accept</a></td> </tr></table></div>
      @endif
      <h3 class="title">description</h3>
      <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum cupiditate aliquid ipsum recusandae maxime nisi, velit eaque, libero, exercitationem culpa accusamus. Neque dolor quaerat modi saepe facere dignissimos temporibus molestias.</p>

   </div>
   @endforeach

</section>

<!-- view property section ends -->












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