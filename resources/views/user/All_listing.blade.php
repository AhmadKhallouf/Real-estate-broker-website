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
   <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
   <link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
   <link rel="stylesheet" href="{{ asset('css/x_app_layout.css') }}">

</head>
<body>
   
<!-- header section starts  -->

@include('constants.header')

<!-- header section ends -->

<!-- listings section starts  -->

<section class="listings">
   <div>
      <div class="dropdown10">
         <div class="user-box10" id="userBox10">
           sort as... &nbsp; <i class="fas fa-angle-down"></i>
         </div>
         <div class="dropdown-content10" id="dropdownContent10">
           <a href="{{ route('all_listing',1) }}" style="width: 100%">All Listing</a>
           <div class="divider10"></div>
           <a href="{{ route('all_listing',2) }}" style="width: 100%">Sell</a>
          <div class="divider10"></div>
           <a href="{{ route('all_listing',3) }}" style="width: 100%">Rent</a>
          <div class="divider10"></div>
           <a href="{{ route('all_listing',4) }}" style="width: 100%">Mortgage</a>
         </div>
   </div>    
       
         
         
              
        <div class="box-container">  
               @foreach ( $posts as $post )    
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
                     <img src="{{ asset('images/PostsPhoto/'. $post->images[0]->image ) }}" alt="">
                  </div>
                  <h3 class="name">{{ $post->type_of_real_estate }}</h3>
                  <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{ $post->city }},@if (!empty($post->town)) {{$post->town,}} @endif @if($post->village) {{$post->village,}} @endif{{ $post->neighborhood }}</span></p>
                  <div class="flex">
                     @if(($post->type_of_real_estate!="land")&($post->type_of_real_estate!="store")) <p><i class="fas fa-bed"></i><span>{{ $post->postInfo->number_of_bedrooms }}</span></p>
                     <p><i class="fas fa-bath"></i><span>{{ $post->postInfo->number_of_bathrooms }}</span></p> @endif
                     <p><i class="fas fa-maximize"></i><span>{{ $post->space }}m2</span></p>
                  </div>
                  <a href="{{ route('show_specific_post',$post->id) }}" class="btn">view property</a>
               </div>
         
               @endforeach 
              
      
         </div>

   

</section>

<!-- listings section ends -->












<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/filter.js') }}"></script>
<script src="{{ asset('js/x_app_layout.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>


</body>
</html>