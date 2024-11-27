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
   <link rel="stylesheet" href="{{ asset('css/officeLink.css') }}">


</head>
<body>
   
<!-- header section starts  -->

@include('constants.header')

<!-- header section ends -->

<!-- flash message start -->
@include('constants.flash_message')
<!-- flash message end -->

<!-- office links section starts  -->
<section class="form-container">
<form action="{{ route('update_data') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Price for one ad day</label>
      <input type="number" name ="cost_per_day" class="form-control"  placeholder="Enter the cost for one ad day" value="{{ $data->cost_per_day }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Number of Marchent in syriatel Cash</label>
        <input type="number" name ="merchant_account_number" class="form-control"  placeholder="Enter your number of marchent in syriatel cash" value="{{ $data->merchant_account_number }}">
      </div>
      
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</section>


<!-- office links section ends -->












<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/x_app_layout.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>


</body>
</html>