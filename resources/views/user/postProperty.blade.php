<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>post property</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

</head>
<body>
   

<section class="property-form">

   <form action="{{ route('createNewPost.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h3>property details</h3>
      
      <div class="flex">
         <div class="box">
            <p>Offer Type <span>*</span></p>
            <select name="business" required class="input">
               <option value="Sell">Sell</option>
               <option value="Rent">Rent</option>
               <option value="Mortgage">Mortgage</option>
            </select>
         </div>
         <div class="box">
            <p>Property Type <span>*</span></p>
            <select name="type" required class="input">
               <option value="appartment">Appartment</option>
               <option value="house">House</option>
               <option value="store">Store</option>
               <option value="villa">Villa</option>
               <option value="topsoil">Topsoil</option>
            </select>
         </div>
         <div class="box">
            <p>Property Price <span>*</span></p>
            <input type="number" name="price" required min="0" max="9999999999" maxlength="10" placeholder="enter property price" class="input">
         </div>
         <div class="box">
            <p>Property Number <span>*</span></p>
            <input type="number" name="numberOfRealEstate" required min="0" max="9999999999" maxlength="10" placeholder="enter deposite amount" class="input">
         </div>
         <div class="box">
            <p>Time Of Investment <span>*</span></p>
            <input type="number" name="timeOfInv" required  placeholder="6 month" class="input">
         </div>
      </div>

      <h1>Address</h1>
      <div class="box">
         <p>City<span>*</span></p>
         <input type="text" name="city" required  placeholder="Homs" class="input">
      </div>
      <div class="box">
         <p>Town<span>*</span></p>
         <input type="text" name="town" required  placeholder="any town" class="input">
      </div>
      <div class="box">
         <p>Village<span>*</span></p>
         <input type="text" name="village" required  placeholder="any village" class="input">
      </div>
      <div class="box">
         <p>property description <span>*</span></p>
         <textarea name="PointToIllustration" maxlength="1000" class="input" required cols="30" rows="10" placeholder="write about property..."></textarea>
      </div>
      <div class="box">
         <p>enter number of proccess in syriatel cash<span>*</span></p>
         <input type="number" name="numberOfProcess" required  placeholder="1234567890" class="input">
      </div>

      <div class="box">
         <p>images <span>*</span></p>
         <input type="file" name="pathOfPhotos" class="input" accept="image/*" required>
      </div>
      <input type="submit" value="post property" class="btn" name="post">
   </form>

</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>