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
   <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
   <link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
   <link rel="stylesheet" href="{{ asset('css/x_app_layout.css') }}">


</head>
<body>
   
<!-- header section starts  -->

@include('constants.header')

<!-- header section ends -->

<!-- view property section starts  -->

<section class="view-property">
  
   <div class="details">
      <div class="thumb">
         <div class="big-image">
            <img src="{{ asset('images/PostsPhoto/'.$post->images[0]->image) }}" alt="">
         </div>
         <div class="small-images">
            @foreach ( $post->images as $img )
            <img src="{{ asset('images/PostsPhoto/'.$img->image) }}" alt="">
            @endforeach
         </div>
      </div>
      <h3 class="name">we thanks you for your trust</h3>
      <div class="info">
         <!-- <p><i class="fas fa-tag"></i><span>15 lac</span></p> -->
         <p><i class="fas fa-user"></i><span></span>{{$post->users->name}}</p>
         <p><i class="fas fa-phone"></i><a href="tel:{{ $post->users->phone }}"></a>{{ $post->users->phone }}</p>
         <p><i class="fas fa-building"></i><span>{{ $post->type_of_investment }}</span></p>
         <p><i class="fas fa-house"></i><span>{{ $post->type_of_real_estate }}</span></p>
         <p><i class="fas fa-calendar"></i><span>{{ $post->updated_at }}</span></p>
      </div>
      <h3 class="title">details</h3>
      <div class="flex">
         <div class="box">
                                    <p><i>City :</i><span>{{ $post->city }}</span></p>
                  @if ($post->town) <p><i>Town :</i><span>{{ $post->town }}</span></p> @endif
               @if ($post->village) <p><i>Vilage :</i><span>{{ $post->village }}</span></p> @endif
                                    <p><i>Neighborhood :</i><span>{{ $post->neighborhood }}</span></p>
    @if($post->PointToIllustration) <p><i>Point of illustration :</i><span>{{ $post->PointToIllustration }}</span></p> @endif
                                    <p><i>Space :</i><span>{{ $post->space }} squar metr</span></p> 
   @if ($post->time_of_investment)  <p><i>Time Of Investment :</i><span>{{ $post->time_of_investment }} month</span></p> @endif
                                    <p><i>Full Price :</i><span>{{ $post->investment_value }} SP</span></p>
            
            
         </div>
         <div class="box">
            @if ($post->postInfo)
     @if($post->postInfo->in_floor) <p><i>Apartment in floor : </i><span>{{ $post->postInfo->in_floor }}</span></p> @endif
                                    <p><i>total floors : </i><span>{{ $post->postInfo->number_of_floors }}</span></p>
                                    <p><i>bedroom : </i><span>{{ $post->postInfo->number_of_bedrooms  }}</span></p>
                                    <p><i>bathroom : </i><span>{{ $post->postInfo->number_of_bathrooms }}</span></p>
                                    <p><i>living room : </i><span>{{ $post->postInfo->number_of_living_rooms }}</span></p>
                                    <p><i>model of kitchen : </i><span>{{ $post->postInfo->model_of_kitchen }}</span></p>
            @endif
         </div>
      </div>
      @if($post->description)
      <h3 class="title">description</h3>
      <p class="description">{{ $post->description }}</p>
      @endif
   </div>
   

   @if (($post->users->id) == Auth::user()->id)
       <ul>
          <li class="nav-item">
             <a class="btn btn-primary" href="{{ route('get_update_post_page',$post->id) }}" >update</a>
          </li>
       </ul>
   @endif

</section>

<!-- view property section ends -->



<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>
<script src="{{ asset('js/x_app_layout.js') }}"></script>

</body>
</html>