<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

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
         <a href="home.html" class="logo"><i class="fas fa-house"></i>MyHome</a>

      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="{{ route('login') }}">login</a></li>
               <li><a href="{{ route('register') }}">register</a></li>
            </ul>
         </div>
      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- register section starts  -->

<section class="form-container">

   <form action="{{ route('register') }}" method="post">
      @csrf
      <h3>create an account!</h3>
      <input type="tel" name="name" required maxlength="50" placeholder="enter your name" class="box">
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
      <input type="phone" name="phone" required maxlength="50" placeholder="enter your phone" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
      <input type="password" name="password_confirmation" required maxlength="20" placeholder="confirm your password" class="box">
      <p>already have an account? <a href="{{ route('login') }}">login</a></p>
      <input type="submit" value="register now" name="submit" class="btn">
   </form>

</section>

<!-- register section ends -->












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