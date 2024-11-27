<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Post</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">  -->
   <!-- custom css file link  -->
   
   <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/uImg.css') }}">


   <script>
    function showExtraInput() {
      var selectElement = document.getElementById("mySelect");
      var selectedOption1 = selectElement.value;
      var extraInputDiv = document.getElementById("extraInputDiv");
	  var infloor = document.getElementById("in_floor");
	  var numberOfFloors = document.getElementById("number_of_floors");
	  var typeOfInvestment = document.getElementById("type_of_investment");
	  var selectTypeOption2 = typeOfInvestment.value;
	  var TimeOfInvestment = document.getElementById("Time_Of_Investment");

      if ((selectedOption1 ==="apartment") | (selectedOption1 ==="house") | (selectedOption1 ==="villa")) {
        extraInputDiv.style.display = "block";
        extraInputDiv.required = true;
		if((selectedOption1 ==="apartment")){infloor.style.display = "block";infloor.required = true;}
		if((selectedOption1 ==="house")){numberOfFloors.style.display = "block";numberOfFloors.required = true;}
      } else {
        extraInputDiv.style.display = "none";
      }
	  if(selectTypeOption2 === "sell"){
      TimeOfInvestment.style.display = "none";
	  }else{
           TimeOfInvestment.style.display = "block";
			TimeOfInvestment.required = true;
	  }
    }
  </script>

</head>
<body>

   <div class="nav-item">
    <a href="{{ route('redirect') }}" class="btn btn-outline-danger" style="text-align: center;margin-left: 10px;width: 150px;"> << Back </a>
	</div>
<section class="property-form">
	
   <form action="{{ route('update_post',$post->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h3>property details</h3>
      
      <div class="flex">
         <div class="box">
            <p>Type Of Investment <span>*</span></p>
            <select name="type_of_investment" required class="input" id="type_of_investment" onchange="showExtraInput()">
			   <option value="{{ $post->type_of_investment }}"> {{ $post->type_of_investment }} </option>
               <option value="sell">Sell</option>
               <option value="rent">Rent</option>
               <option value="mortgage">Mortgage</option>
            </select>
         </div>
         <div class="box">
            <p>Type Of Real Estate <span>*</span></p>
            <select name="type_of_real_estate" required class="input" id="mySelect" onchange="showExtraInput()">
				   <option value="{{ $post->type_of_real_estate }}">{{ $post->type_of_real_estate }}</option>
               <option value="apartment">Appartment</option>
               <option value="house">House</option>
               <option value="store">Store</option>
               <option value="villa">Villa</option>
               <option value="land">Land</option>
            </select>
         </div>
         <div class="box">
            <p>Total Cost <span>*</span></p>
            <input type="number" name="investment_value" required min="0" max="9999999999" maxlength="10" placeholder="enter the full cost you want if you select sell, or full cost for a full time of investment if you select rent or mortgage " class="input" value="{{ $post->investment_value }}">
         </div>
         <div class="box">
            <p>Space <span>*</span></p>
            <input type="number" name="space" required min="0" max="9999999999" maxlength="10" placeholder="enter a space of real estate in square metr" class="input" value="{{ $post->space }}">
         </div>
         <div class="box" id="Time_Of_Investment" style="display: none;">
            <p> Time Of Investment <span>*</span></p>
            <input type="number" name="time_of_investment"  placeholder="6 month" class="input" @if($post->time_of_investment) value="{{ $post->time_of_investment }}" @endif>
         </div>
      </div>

      <h1>Address</h1>
      <div class="box">
         <p>City<span>*</span></p>
         <input type="text" name="city" required  placeholder="like `Homs`" class="input" value="{{ $post->city }}">
      </div>
      <div class="box">
         <p>Town<span>*</span></p>
         <input type="text" name="town"  placeholder="Name of town, like `Safita` (optional)" class="input" @if($post->town) value="{{ $post->town }}" @endif>
      </div>
      <div class="box">
         <p>Village<span>*</span></p>
         <input type="text" name="village"  placeholder="Name of village, like `alhylona` (optional) " class="input" @if($post->village) value="{{ $post->village }}" @endif>
      </div>
	  <div class="box">
         <p>Neighborhood<span>*</span></p>
         <input type="text" name="neighborhood" required placeholder="Name of nighborhood, like `Akrama`" class="input" value="{{ $post->neighborhood }}">
      </div>
	  <div class="box">
         <p>Point To Illustration <span>*</span></p>
         <textarea name="PointToIllustration" maxlength="1000" class="input" cols="20" rows="10" placeholder="input the nearest point of reference to your property if you want (optional)...">{{ $post->PointToIllustration }}</textarea>
      </div>
	  
	  <div class="box" id="in_floor" style="display: none;">
            <p>your appartment in floor <span>*</span></p>
            <input type="number" name="in_floor"   placeholder="0" class="input" @if($post->postInfo->in_floor) value="{{$post->postInfo->in_floor}}" @endif>
         </div>
		 
	  <div class="box" id="number_of_floors" style="display: none;">
            <p>number of floors <span>*</span></p>
            <input type="number" name="number_of_floors"   placeholder="0" class="input" @if($post->postInfo->number_of_floors) value="{{$post->postInfo->number_of_floors}}" @endif>
         </div>	 
	  
	  <div id="extraInputDiv" style="display: none;">
	  <div class="box">
            <p>number of bedrooms <span>*</span></p>
            <input type="number" name="number_of_bedrooms"   placeholder="0" class="input" @if($post->postInfo->number_of_bedrooms) value="{{$post->postInfo->number_of_bedrooms}}" @endif>
         </div>
		 <div class="box">
            <p>number of living rooms <span>*</span></p>
            <input type="number" name="number_of_living_rooms"   placeholder="0" class="input" @if($post->postInfo->number_of_living_rooms) value="{{$post->postInfo->number_of_living_rooms}}" @endif>
         </div>
		 <div class="box">
            <p>number of bathrooms <span>*</span></p>
            <input type="number" name="number_of_bathrooms"   placeholder="0" class="input" @if($post->postInfo->number_of_bathrooms) value="{{$post->postInfo->number_of_bathrooms}}" @endif>
         </div>
		 <div class="box">
            <p>Model of kitchen <span>*</span></p>
            <select name="model_of_kitchen"  class="input" > 
   @if($post->postInfo->model_of_kitchen)   <option  value="{{$post->postInfo->model_of_kitchen}}" >{{$post->postInfo->model_of_kitchen}}</option> @endif
				                                <option value="Normal">Normal</option>
                                            <option value="Italian">Italian</option>
                                            <option value="American">American</option>
            </select>
         </div>
		</div>
		
      <div class="box">
         <p>property description <span>*</span></p>
         <textarea name="description" maxlength="1000" class="input" required cols="20" rows="10" placeholder="write about property...">@if($post->PointToIllustration) {{$post->PointToIllustration}} @endif</textarea>
      </div>

      @if ($post->status == 'refuse')
      <div class="box">
         <p>enter number of proccess in syriatel cash </span> <span>*</span></p>
         <input type="number" name="numberOfProcess" required  placeholder="1234567890" class="input" value="{{ $post->numberOfProcess }}">
      </div>
      @endif
	  
      <div class="box">
         <p>please upload photo for your property, 9 photo at most <span>*</span></p>
         <input type="file" max="9" required name="images[]" id="images[]" class="input" multiple >
      </div>
      <div class="details">
         <div class="thumb">
      <div class="small-images">
         
         <div class="container">
            <div class="row">
               @foreach ( $post->images as $img )
              <div class="col">
                <div class="rectangle">
                  <a href="{{ route('delete_one_photo_in_update',[$img->id,$post->id]) }}" class="delete-link" style="position: absolute;top: -3px;right: -10px;">
                    <span class="mdi mdi-trash-can-outline delete-icon"></span>
                  </a>
                  <img src="{{ asset('images/PostsPhoto/'.$img->image) }}" alt="Image 1" class="image">
                </div>
              </div>
              @endforeach
            </div>
         </div>
         
      </div>
         </div>
      </div>
      <input type="submit" value="update property" class="btn" name="update">
   </form>

</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<!-- custom js file link  -->
<script src="js1/script.js"></script>


</body>
</html>