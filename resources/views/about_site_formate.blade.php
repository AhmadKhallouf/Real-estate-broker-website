<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>site formate</title>

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


<!-- home section starts  -->

<div style="text-align: center; margin-top:15px; margin-bottom:40px; font-size:x-large;">
    <h1>Real Estate Brokerage and Trade</h1>
</div>

<div style="margin-left:15px; margin-bottom:25px;">
    <h4 style="font-size:25px; margin-bottom:5px;">.....Welcome..... in our site</h4>
    <p style="font-size:20px;margin-left: 10px;">This site is designed in <span style="font-weight: bold; color:crimson;"> php </span> programming language through the famous framework <span style="font-weight: bold; color:crimson;"> Laravel </span> with <span style="font-weight: bold; color:crimson;"> MVC </span> structure.</p>
    <p style="font-size:20px;margin-left: 10px;">Uses the <span style="font-weight: bold; color:crimson;"> Bootstrap </span> framework to view user interfaces.</p>
</div>

<div style="margin-left:15px; margin-bottom:25px;">
        <h2 style="font-size:25px;margin-bottom:5px;">The target audience</h2>
        <div style="margin-left: 10px;">
        <p style="font-size:20px;">This project is divided into two main parts: </p>
        <p style="font-size:20px;"> <span style="font-weight: bold; color:crimson;"> The first section </span>is directed to the target audience, i.e. users </p>
        <p style="font-size:20px;"> <span style="font-weight: bold; color:crimson;"> The second section </span>is directed to the admins </p>
    </div>
</div>

<div style="margin-left:15px; margin-bottom:25px;">
    <h5 style="font-size:22px;margin-bottom:20px;">The first section : </h5>
    <div style="margin-left: 10px;">
        <p style="font-size:20px;">The user can display the property he wants to invest, and the properties are divided into several types such as (houses, villas, residential apartments, stores or warehouses, agricultural lands).<br>
           Investment methods are also divided into three types (sale, rent, mortgage).<br>
           When the user wants to display his property, he specifies the type of investment and the type of property, and then enters the property specifications, so that the specifications of each type differ from the other type, meaning that if the user wants to rent a residential apartment, he is forced to specify the number of rooms and specify the residential apartment on which floor.<br>
            It is located within the building, except that if he wants to sell a store.<br>
            The user must upload a number of photos not exceeding 9 of the property to be invested.<br>
        </p>

        <h6 style="margin-top:20px; font-size:18px;"><span style="font-weight: bold; color:crimson;">Syriatel Cash :  </span></h6>

        <p style="font-size:20px;">In order for the user to be able to upload his post, he must use a local semi-automatic electronic payment method in Syria, which is the Aqrap Elik application,<br>
           so that after determining the duration of the advertisement's appearance to the public, an amount of money must be transferred to the merchant's account, and the merchant's account number must be shown in the box for entering the transfer number.<br>
           After paying through the application, you must enter the transfer number in the appropriate box on the create a new post page. The value of the amount is calculated as follows: The cost of the advertisement for one day. This value is determined by the admin in advance, multiplied by the number of days during which the user wants the advertisement to appear.<br>
        </p>

        <p style="font-size:20px; margin-top:20px;">After submitting the request, the site processes the request, enters the information into the database, places the request in a waiting state,<br>
             and sends a notification to the requester's account that (your request has been submitted successfully. Please wait until it is approved by the admin),<br>
             and another notification to the site admin, that user x wants to invest in his property,<br>
             If the request is accepted by the admin, the site sends a notification to the requester's account that (your request with y number has been accepted),<br>
             and the rest of the users can view the post during the period between accepting the request and the end of the period specified by the user requesting it.<br>
             The duration of the publication's appearance is measured in days.<br>
             The user who wants to benefit from the investment, i.e. the second party in the process, can contact with owner of the post via his phone number shown in the post.<br>
             With this service, we have eliminated the need for real estate office owners to control the investment process and reduced the cost between both parties of the process.<br>
            </p>
        <p style="font-size:20px; margin-top:20px;">The site uses a process scheduling system, so that every 6 hours the site changes the status of posts with an expired appearance period to (expired) and they do not appear in the posts interface for the rest of the user until the post owner re-submits the request to extend the appearance period if he wants.<br></p>
        <p style="font-size:20px; margin-top:20px;">The user can view other users' posts and can also control his own posts, such as modifying the information of a post, deleting it, or modifying the images of the publication, such as deleting one or adding another.<br>
             The user can also request the post to be uploaded again if it is in the (expired) state through a special interface.<br>
             It includes the new offer period he wants and the number of the new money transfer transaction, and then the same scenario as before.</p>
    </div>

</div>

<div style="margin-left:15px; margin-bottom:25px;">

    <h5 style="font-size:22px;margin-bottom:20px;">The second section : </h5>

    <div style="margin-left: 10px;">

        <p style="font-size:20px;">This section is for the site supervisor, and as we mentioned previously, the project system depends on the presence of only one admin.<br>
             The project or site includes an admin dashboard that includes:</p>

             <h6 style="margin-top:20px; font-size:18px;"><span style="font-weight: bold; color:crimson;">1 - Monitoring panel :  </span></h6>

             <p style="font-size:20px;">Designed using <span style="font-weight: bold; color:rgb(192, 15, 236);">Livewire</span> technology that supported by Laravel, by it the administrator can monitor the flow of data across the site, such as the number of posts that are in the active state, the number of posts that are in the pending status, and the number of expired posts.<br>
                And monitor the number of current users, the number of blocked users, and also the number of supervisors, which is in the default state of 1, but is placed within the panel to support the security aspect.<br>
             </p>

             <h6 style="margin-top:20px; font-size:18px;"><span style="font-weight: bold; color:crimson;">2 - Settings panel  :  </span></h6>

             <p style="font-size:20px;">includes a number of links :<br>
             </p>
             <ol type="I" style="font-size: 17px; margin-left:23px;">
                <li><h6 style="margin-top:20px; font-size:17px;"><span style="font-weight: bold; color:rgb(6, 196, 221);">Posts Setting : </span></h6></li>
                <p style="font-size:20px;">Through a special interface, the admin can control posts, such as accepting or rejecting requests after ensuring that the amount of money has been received.<br>
                              He can also view the property specifications and information, modify it according to the desire of the post owner, or delete it permanently. He can also view the post owner's account information.<br></p>

                <li><h6 style="margin-top:20px; font-size:17px;"><span style="font-weight: bold; color:rgb(6, 196, 221);">Users Setting : </span></h6></li>     
                <p style="font-size:20px;">The site administrator can control user accounts through a special interface through which he can block an account, unblock blocked accounts, view detailed information about each account, or delete the account permanently.<br></p>

                <li><h6 style="margin-top:20px; font-size:17px;"><span style="font-weight: bold; color:rgb(6, 196, 221);">Office Links : </span></h6></li>     
                <p style="font-size:20px;">There are a number of links in the website's footer pages to the site's accounts on social media and the site's administrator's phone numbers and email, which the admin can control and modify through this interface.<br></p>

                <li><h6 style="margin-top:20px; font-size:17px;"><span style="font-weight: bold; color:rgb(6, 196, 221);">Price&Marchent : </span></h6></li>     
                <p style="font-size:20px;">Through this interface, the admin can modify the merchant number in the Aqraab Elik application and modify the advertising price for one day</p>
             </ol>

             <h6 style="margin-top:20px; font-size:18px;"><span style="font-weight: bold; color:crimson;">3 - Latest Listing  :  </span></h6>
             <p style="font-size:20px;">The admin can view the last three active posts, and it also includes a button that is a link directed to the full posts page, like the link in Navbar.<br>
                <span style="color:rgb(255, 81, 0);">Notes : </span> admin can do any process that can be done by users, like create new post or watch his posts.<br>
             </p>

             <h5 style="font-size:22px;margin-top:40px;">Helper Information : </h5>
             <p style="font-size:20px;"> you can see the site as a user by register. <br>
                and you can see the site as an admin by login with the account below:<br>
                <span style="color:crimson;">email : </span> admin@gmail.com<br>
                <span style="color:crimson;">password : </span> 12345678<br>
             </p>
             

    </div>

</div>





<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>
<script src="{{ asset('js/x_app_layout.js') }}"></script>

</body>
</html>