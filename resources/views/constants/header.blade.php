<header class="header">

    <nav class="navbar nav-1">
       <section class="flex">
          <a href="home.html" class="logo"><i class="fas fa-house"></i>My_RealEstate</a>
          @auth
          <ul>
            <li><a href="{{ route('get_post_property_page') }}">create post.....<i class="fas fa-paper-plane"></i></a></li>
         </ul>
         @endauth
       </section>
    </nav>
 
    <nav class="navbar nav-2">
       <section class="flex">
          <div id="menu-btn" class="fas fa-bars"></div>
 
          <div class="menu">
             <ul>
                <li><a href="{{ route('redirect') }}">Home</a></li>
                <li><a href="#">About us<i class="fas fa-angle-down"></i></a>
                    <ul style="width: 240px">
                       <li><a href="#">about our service</a></i></li>
                       <li><a href="#">about site developers</a></i></li>
                       <li><a href="{{ route('about_site_formate') }}">about site formate</a></i></li>
                    </ul>
                 </li>
                <li><a href="{{ route('login') }}">Contact</a></li>
                @if (Route::has('login'))
                   @auth
                   <li><a href="{{ route('all_listing','1') }}">All listing</a></li>
                   <li><a href="{{ route('show_my_posts') }}">My posts</a></li>
                   <li class="nav-item dropdown">
                     <div class="notification-container">
           <i class="notification-icon fas fa-bell"></i>
         @if(Auth::user()->unreadNotifications->count())  <span class="notification-count">{{ Auth::user()->unreadNotifications->count() }}</span> @endif
           <div class="notification-dropdown">    
               
               
                   @if(Auth::user()->unreadNotifications->count() != 0)
               @foreach (Auth::user()->unreadNotifications as $notification )
               <div class="notification-content">
                 @if (Auth::user()->type == 'admin')

              <div class="notification-image">
                  <img src="{{ asset('BasicPhotos/user.png') }}" alt="">
              </div>
              <div>
                  <div class="notification-title">{{ $notification->data['user_create'] }}</div>
                  <div class="notification-description" > @if($notification->data['type_of_notify'] == 'generate') I want to {{ $notification->data['type_of_investment'] }} a {{ $notification->data['type_of_real_estate'] }}, the numbere of request is {{ $notification->data['post_id'] }} @elseif ($notification->data['type_of_notify'] == 'generate')
                                                                                                                   I want to re-post my ad for {{ $notification->data['time_of_ad'] }} days with the number of process {{ $notifiaction->data['number_of_process'] }} @endif </div>
                   <a class="notification-links" href="{{ route('show_post_from_notification',$notification->data['post_id']) }}" style="font-size: 8px;" id="viewNotifi">View Post</a>  <a class="notification-links" href="{{ route('read_and_delete_individual_notification',$notification->id) }}" style="font-size: 8px;" id="viewNotifi">Mark as read</a>
              </div>

                 @else

                 <div class="notification-image">
                  <img src="{{ asset('BasicPhotos/icon-7.png') }}" alt="">
              </div>
               <div>
                  <div class="notification-title">Admin</div>
                  <div class="notification-description" >{{ $notification->data['noteUpload'] }} @if($notification->type == 'App\Notifications\AcceptSuccessfully') the number of your post: {{ $notification->data['post_id'] }} and was accepted at: {{ $notification->data['time_of_accept'] }} @endif</div>
                 <a class="notification-links" href="{{ route('read_and_delete_individual_notification',$notification->id) }}" style="font-size: 8px;" id="viewNotifi">Mark as read</a>
               </div>
            
                 @endif
               </div> 
               
               <div class="notification-divider"></div>
            @endforeach
               <a href="{{ route('delete_all_unread_notifications') }}" class="dropdown-button" style="font-size: 10px;">Mark All as Read</a>
           </div>
             </div>
             @else
             <div style="font-size: 15px;">There is no notifications yet</div>
             @endif
            </li>
                  <li  style="margin-left: 300px; marign-top: 40px">
                     @include('constants.x_app_layout')
                  </li>
                     @else 
                <li style="margin-left: 420px"><a href="{{ route('login') }}">login</a></li>
                      @if (Route::has('register'))
                          <li><a href="{{ route('register') }}">register</a></li> 
                      @endif
                   @endauth
               @endif

             </ul>
          </div>
 
       </section>
    </nav>
 
 </header>