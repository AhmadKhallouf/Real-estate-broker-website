<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">  -->
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  -->

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

<!-- flash message start -->
@include('constants.flash_message')
<!-- flash message end -->

<!-- home section starts  -->

<div class="home">

   <section class="center">
      <div class="container">
         <div class="hero-content">
             <span>Real Estate Brokerage and Trade</span>
             <p class="">Find Your Dream Real Estate By Us</p>
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
         <img src="{{ asset('BasicPhotos/icon-1.png')  }}" alt="">
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
            @foreach ( $posts as $post )
            <td>
               <div class="box-container">
               <div class="box">
                  <div class="admin">
                      @if($post->users->type == "user") <h3><img src="{{ asset('BasicPhotos/user.png') }}" alt="" width="45" height="45"></h3> 
                     @else <h3><img src="{{ asset('BasicPhotos/icon-6.png') }}" alt="" width="32" height="32"></h3> @endif 
                     <div>
                        <p>{{ $post->users->name }}</p>
                        <span>{{ $post->updated_at }}</span>
                     </div>
                  </div>
                  <div class="thumb">
                     <img src="{{ asset('images/PostsPhoto/'.$post->images[0]->image) }}" alt="">
                  </div>
                  <h3 class="name">{{ $post->type_of_real_estate }}</h3>
                  <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{ $post->city }},@if($post->town){{ $post->town,}}@endif @if($post->village){{ $post->village, }}@endif {{ $post->neighborhood }} </span></p>
                  <div class="flex">
                   @if(($post->type_of_real_estate!="land")&($post->type_of_real_estate!="store"))  <p><i class="fas fa-bed"></i><span>{{ $post->postInfo->number_of_bedrooms }}</span></p> 
                                                                     <p><i class="fas fa-bath"></i><span>{{ $post->postInfo->number_of_bathrooms }}</span></p> @endif
                     <p><i class="fas fa-maximize"></i><span>{{ $post->space }}m2</span></p>
                  </div>
                  <a href="{{ route('show_specific_post',$post->id) }}" class="btn">view property</a>
               </div>
               </div>
            </td>
            @endforeach
         </tr>
   </table>
   </div>

      

   <div style="margin-top: 2rem; text-align:center;">
      <a href="{{ route('all_listing',1) }}" class="inline-btn">view all</a>
   </div>

</section>

<!-- listings section ends -->










<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>
<script src="{{ asset('js/x_app_layout.js') }}"></script>

</body>
</html>