
<footer class="footer" style="position: relative; top:245px">

<section class="flex">

   @php
      $info = DB::table('office_links')->first();
   @endphp

   @if ( $info )
      
   <div class="box">
      <a href="tel:{{ $info->mobile_phone }}"><i class="fas fa-phone"></i><span>{{ $info->mobile_phone }}</span></a>
      <a href="tel:{{ $info->telephone }}"><i class="fas fa-phone"></i><span>{{ $info->telephone }}</span></a>
      <a href="mailto:{{ $info->gmail }}"><i class="fas fa-envelope"></i><span>{{ $info->gmail }}</span></a>
      <a href="#"><i class="fas fa-map-marker-alt"></i><span>{{ $info->location }} </span></a>
   </div>
   
   <div class="box">
      <a href="home.html"><span>home</span></a>
      <a href="about.html"><span>about</span></a>
      <a href="contact.html"><span>contact</span></a>
      <a href="listings.html"><span>all listings</span></a>
      
   </div>

   <div class="box">
      <a href="{{ $info->facebook }}"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
      <a href="{{ $info->twitter }}"><span>twitter</span><i class="fab fa-twitter"></i></a>
      <a href="{{ $info->linkedin }}"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
      <a href="{{ $info->instagram }}"><span>instagram</span><i class="fab fa-instagram"></i></a>

   </div>
   @endif

</section>

<div class="credit">&copy; copyright @ 2023 by <span>Ahmad Khallouf</span> | all rights reserved!</div>

</footer>





