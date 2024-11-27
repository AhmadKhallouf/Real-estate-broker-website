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
   <link rel="stylesheet" href="{{ asset('css/table.css') }}">
   

</head>
<body>
   
<!-- header section starts  -->

@include('constants.header')

<!-- header section ends -->

<!-- flash message start -->
@include('constants.flash_message')
<!-- flash message end -->

<!-- listings section starts  -->

<table class="table5">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Image</th>
        <th scope="col">Type of investment</th>
        <th scope="col">Type of real estate</th>
        <th scope="col">Time of investment</th>
        <th scope="col">Address</th>
        <th scope="col">Time of ad</th>
        <th scope="col">Status</th>
        <th scope="col" colspan="2">Process</th>
      </tr>
    </thead>
    <tbody>

        @foreach ( $myPosts as $post )

      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td><img src="{{asset('images/PostsPhoto/'.$post->images[0]->image)}}" style="" ></td>
        <td>{{ $post->type_of_investment }}</td>
        <td>{{ $post->type_of_real_estate }}</td>
        <td>{{ $post->time_of_investment }}</td>
        <td>{{ $post->city }},@if($post->town){{ $post->town }},@endif @if($post->village){{ $post->village }},@endif {{ $post->neighborhood }}</td>
        <td>{{ $post->time_of_ad }} &nbsp; Days</td>
        <td>{{ $post->status }}</td>
        <td>
                                          <a href="{{ route('show_specific_post',$post->id) }}" style="color: white" title="View"><div class="small-square" style="background-color: #007bff; text-align:center; padding:8px" ><i class="mdi mdi-eye" style="font-size: 25px;"></i></div></a>
           @if(($post->status == 'active')||($post->status == 'refuse')) <a href="{{ route('get_update_post_page',$post->id) }}" style="color: white" title="Update"><div class="small-square" style="background-color: #28a745; text-align:center; padding:8px"><i class="mdi mdi-cog" style="font-size: 25px;"></i></div></a> @endif </td>
        <td>  
           @if($post->status == 'expired') <a href="{{ route('get_re_post_page',$post->id) }}" onclick="return confirm('Are you sure to re-post')" style="color: white" title="Re-post"><div class="small-square" style="background-color: #ffc107; text-align:center; padding:15px;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-send-plus" viewBox="0 0 16 16" >
                                                     <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372zm-2.54 1.183L5.93 9.363 1.591 6.602z"/>
                                                     <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/></svg></div></a> @endif
                                          <a href="{{ route('delete_post',$post->id) }}" onclick="return confirm('Are you sure to delete')" style="color: white" title="Delete"><div class="small-square" style="background-color: #dc3545; text-align:center; padding:8px" ><span class="mdi mdi-trash-can-outline delete-icon" style="font-size: 25px;"></span></div></a> </td> 
      </tr>

      @endforeach

    </tbody>
  </table>

<!-- listings section ends -->












<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/x_app_layout.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>


</body>
</html>