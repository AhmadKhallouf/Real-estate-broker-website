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
        <th scope="col">Investment value</th>
        <th scope="col">Time of ad</th>
        <th scope="col">Number of process</th>
        <th scope="col">Status</th>
        <th scope="col" colspan="2">Process</th>
      </tr>
    </thead>
    <tbody>

        @foreach ( $posts as $post )

      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td><img src="{{asset('images/PostsPhoto/'.$post->images[0]->image)}}" style="" ></td>
        <td>{{ $post->type_of_investment }}</td>
        <td>{{ $post->type_of_real_estate }}</td>
        <td>{{ $post->time_of_investment }}</td>
        <td>{{ $post->city }},@if($post->town){{ $post->town }},@endif @if($post->village){{ $post->village }},@endif {{ $post->neighborhood }}</td>
        <td>{{ $post->investment_value }}</td>
        <td>{{ $post->time_of_ad }} &nbsp; Days</td>
        <td>{{ $post->numberOfProcess }}</td>
        <td>{{ $post->status }}</td>
        <td>
                                           <a href="{{ route('show_specific_post',$post->id) }}" style="color: white"><div class="small-square" style="background-color: #007bff; text-align:center; padding:8px" title="View"><i class="mdi mdi-eye" style="font-size: 25px;"></i></div></a>
           @if($post->status == 'pending') <a href="{{ route('accept_post',$post->id) }}" style="color: white"><div class="small-square" style="background-color: #28a745; text-align:center; padding:8px" title="Accept"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="margin-top: 4px;">
                                                                                                                                                                                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                                                                                                                                                                                                                        </svg></div></a>
                                           <a href="{{ route('refuse_post',$post->id) }}" onclick="return confirm('Are you sure to refuse this post')" style="color: white"><div class="small-square" style="background-color: #ff0000; text-align:center; padding:8px" title="Refuse"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" style="margin-top: 4px;">
                                                                                                                                                                                                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                                                                                                                                                                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                                                                                                                                                                                                        </svg></div></a> @endif </td>
        <td>  
                                            <a href="{{ route('get_re_post_page',$post->id) }}" style="color: white"><div class="small-square" style="background-color: #07ff98d7; text-align:center; padding:8px;" title="User Created"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" style="margin-top: 4px;">
                                                                                                                                                                                                                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                                                                                                                                                                                                      </svg></div></a>
                                           <a href="{{ route('get_update_post_page',$post->id) }}" style="color: white"><div class="small-square" style="background-color: #ffc107; text-align:center; padding:8px;" title="Update"><i class="mdi mdi-cog" style="font-size: 25px;" ></i></div></a>
                                           <a href="{{ route('delete_post',$post->id) }}" onclick="return confirm('Are you sure to delete')" style="color: white"><div class="small-square" style="background-color: #f1061ed8; text-align:center; padding:8px" title="Delete"><span class="mdi mdi-trash-can-outline delete-icon" style="font-size: 25px;"></span></div></a> </td> 
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