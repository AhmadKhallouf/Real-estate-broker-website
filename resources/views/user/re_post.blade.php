<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Posts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
   
   
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
   <link rel="stylesheet" href="{{ asset('css/x_app_layout.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style1.css') }}">


</head>
<body>
   
<!-- header section starts  -->

@include('constants.header')

<!-- header section ends -->

@include('constants.flash_message')
   
<!-- repost section starts  -->
<section class="property-form" style="margin-top: 90px;">

<form action="{{ route('re_post',$id) }}" method="POST">
   @csrf
<div class="box">
    <p style="font-size: 20px;">Time Of Ad <span>*</span></p>
    <input type="number" name="time_of_ad" required min="0" max="100" maxlength="10" placeholder="How much days you want to appear the post to the audiance??" class="input">
 </div>

<div class="box" style="margin-top: 60px;">
 <p style="font-size: 20px;">enter number of proccess in syriatel cash, to the number @if($numbersAndCosts) {{$numbersAndCosts->merchant_account_number}} @endif, Note that the advertising price for <span>one day</span> is @if($numbersAndCosts) <span>{{$numbersAndCosts->cost_per_day}}</span> @endif SP<span>*</span></p>
 <input type="number" name="numberOfProcess" required  placeholder="1234567890" class="input">
</div>

<input type="submit" value="repost property" class="btn" name="post">
</form>
</section>
<!-- repost section ends -->












<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
{{-- <script src="{{ asset('js/script.js') }}"></script> --}}
<script src="{{ asset('js/x_app_layout.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>



</body>
</html>