<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Setting</title>

   <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> 
   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'> 


   
   
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
   <link rel="stylesheet" href="{{ asset('css/x_app_layout.css') }}">
   <link rel="stylesheet" href="{{ asset('css/userInfo.css') }}">
   

</head>
<body>
   
<!-- header section starts  -->

@include('constants.header')

<!-- header section ends -->

<!-- flash message start -->
@include('constants.flash_message')
<!-- flash message end -->

<!-- listings section starts  -->

<div class="container bootstrap snippets bootdey" style="margin-top:50px;">
    <div class="panel-body inf-content">
        <div class="row">
            <div class="col-md-4">
                <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
                <ul title="Ratings" class="list-inline ratings text-center">
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <strong>Information</strong><br>
                <div class="table-responsive">
                <table class="table table-user-information">
                    <tbody>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                    Identificacion                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->id }}    
                            </td>
                        </tr>
                        <tr>    
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-user  text-primary"></span>    
                                    Name                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->name }}    
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                    Role                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->type }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                    Email                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->email }}  
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-earphone text-primary"></span> 
                                    Phone                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->phone }}
                            </td>
                        </tr>
                        
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    created                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $user->created_at }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    Modified                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                 {{ $user->updated_at }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-list text-primary"></span>
                                    Total Posts                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                 {{ $user->total_posts }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-expand text-primary"></span>
                                    Active Posts                                               
                                </strong>
                            </td>
                            <td class="text-primary">
                                 {{ $user->active_posts }}
                            </td>
                        
                                
                            <td>
                                <strong>
                                <span class="glyphicon glyphicon-hourglass text-primary"></span>
                                    Pending Posts                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                 {{ $user->pending_posts }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-off text-primary"></span>
                                    Expired Posts                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                 {{ $user->expired_posts }}
                            </td>
                                
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-ban-circle text-primary"></span>
                                    Refuse Posts                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                 {{ $user->refuse_posts }}
                            </td>
                        </tr>                                    
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div>     

    

<!-- listings section ends -->












<!-- footer section starts  -->

@include('constants.footer')

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/x_app_layout.js') }}"></script>
<script src="{{ asset('js/notifications.js') }}"></script>
<script src='https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>


</body>
</html>