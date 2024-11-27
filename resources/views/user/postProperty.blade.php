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
   <link rel="stylesheet" href="css/style1.css">
   

</head>
<body>

   @include('constants.flash_message')
	
   <div class="nav-item">
    <a href="{{ route('redirect') }}" class="btn btn-outline-danger" style="text-align: center;margin-left: 10px;width: 150px;"> << Back </a>
	</div>
<section class="property-form">
	
   <form action="{{ route('post_property') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h3>property details</h3>
      
      <div class="flex">
         <div class="box">
            <p>Type Of Investment <span>*</span></p>
            <select name="type_of_investment" required class="input" id="type_of_investment" onchange="showExtraInput()">
			   <option value=""> --- </option>
               <option value="sell">Sell</option>
               <option value="rent">Rent</option>
               <option value="mortgage">Mortgage</option>
            </select>
         </div>
         <div class="box">
            <p>Type Of Real Estate <span>*</span></p>
            <select name="type_of_real_estate" required class="input" id="mySelect" onchange="showExtraInput()">
				   <option value="">---</option>
               <option value="apartment">Appartment</option>
               <option value="house">House</option>
               <option value="store">Store</option>
               <option value="villa">Villa</option>
               <option value="land">Land</option>
            </select>
         </div>
         <div class="box">
            <p>Total Cost <span>*</span></p>
            <input type="number" name="investment_value" required min="0" max="9999999999" maxlength="10" placeholder="enter the full cost you want if you select sell, or full cost for a full time of investment if you select rent or mortgage " class="input">
         </div>
         <div class="box">
            <p>Space <span>*</span></p>
            <input type="number" name="space" required min="0" max="9999999999" maxlength="10" placeholder="enter a space of real estate in square metr" class="input">
         </div>
         <div class="box" id="Time_Of_Investment" style="display: none;">
            <p> Time Of Investment <span>*</span></p>
            <input type="number" name="time_of_investment"  placeholder="6 month" class="input">
         </div>
      </div>

      <h1>Address</h1>
      <div class="box">
         <p>City<span>*</span></p>
         <input type="text" name="city" required  placeholder="like `Homs`" class="input">
      </div>
      <div class="box">
         <p>Town<span>*</span></p>
         <input type="text" name="town"  placeholder="Name of town, like `Safita` (optional)" class="input">
      </div>
      <div class="box">
         <p>Village<span>*</span></p>
         <input type="text" name="village"  placeholder="Name of village, like `alhylona` (optional) " class="input">
      </div>
	  <div class="box">
         <p>Neighborhood<span>*</span></p>
         <input type="text" name="neighborhood" required placeholder="Name of nighborhood, like `Akrama`" class="input">
      </div>
	  <div class="box">
         <p>Point To Illustration <span>*</span></p>
         <textarea name="PointToIllustration" maxlength="1000" class="input" cols="20" rows="10" placeholder="input the nearest point of reference to your property if you want (optional)..."></textarea>
      </div>
	  
	  <div class="box" id="in_floor" style="display: none;">
            <p>your appartment in floor <span>*</span></p>
            <input type="number" name="in_floor"   placeholder="0" class="input">
         </div>
		 
	  <div class="box" id="number_of_floors" style="display: none;">
            <p>number of floors <span>*</span></p>
            <input type="number" name="number_of_floors"   placeholder="0" class="input">
         </div>	 
	  
	  <div id="extraInputDiv" style="display: none;">
	  <div class="box">
            <p>number of bedrooms <span>*</span></p>
            <input type="number" name="number_of_bedrooms"   placeholder="0" class="input">
         </div>
		 <div class="box">
            <p>number of living rooms <span>*</span></p>
            <input type="number" name="number_of_living_rooms"   placeholder="0" class="input">
         </div>
		 <div class="box">
            <p>number of bathrooms <span>*</span></p>
            <input type="number" name="number_of_bathrooms"   placeholder="0" class="input">
         </div>
		 <div class="box">
            <p>Model of kitchen <span>*</span></p>
            <select name="model_of_kitchen"  class="input" >
				<option value="Normal">Normal</option>
               <option value="Italian">Italian</option>
               <option value="American">American</option>
               <option value="">---</option>
               <option value="">---</option>
               <option value="">---</option>
            </select>
         </div>
		</div>
		
      <div class="box">
         <p>property description <span>*</span></p>
         <textarea name="description" maxlength="1000" class="input" required cols="20" rows="10" placeholder="write about property..."></textarea>
      </div>
	  <div class="box">
            <p>Time Of Ad <span>*</span></p>
            <input type="number" name="time_of_ad" required min="0" max="100" maxlength="10" placeholder="How much days you want to appear the post to the audiance??" class="input">
         </div>
      <div class="box">
         <p>enter number of proccess in syriatel cash, to the number @if($numbersAndCosts) {{$numbersAndCosts->merchant_account_number}} @endif, Note that the advertising price for <span>one day</span> is @if($numbersAndCosts) <span>{{$numbersAndCosts->cost_per_day}}</span> @endif SP<span>*</span></p>
         <input type="number" name="numberOfProcess" required  placeholder="1234567890" class="input">
      </div>

      <div class="box">
         <p>please upload photo for your property, 9 photo at most <span>*</span></p>
         <input type="file" max="9" required name="images[]" id="images[]" class="input" multiple >
      </div>
      <input type="submit" value="post property" class="btn" name="post">
   </form>

</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<!-- custom js file link  -->
<script src="js1/script.js"></script>
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


</body>
</html>