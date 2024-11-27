<div class="dropdown9">
    <div class="user-box9" id="userBox9">
      {{ Auth::user()->name }} &nbsp; <i class="fas fa-angle-down"></i>
    </div>
    <div class="dropdown-content9" id="dropdownContent9">
      <a href="{{ route('profile.edit') }}" style="width: 100%">Profile</a>
      <div class="divider9"></div>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        
     <button type="submit" style="width: 100%; text-align:left;" class="logoutButton">Logout</button> 
      </form>
    </div>