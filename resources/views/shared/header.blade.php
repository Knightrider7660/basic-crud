<header>
    <div class="header_area">
        <div class="header_left">
            <a href="{{action('MainController@index')}}">Infinity</a>
        </div>
        <div class="header_right">
            <a href="{{action('MainController@index')}}">Home</a>
            <a href="{{action('BookController@index')}}">Book</a>
            <a href="#">Sukanta</a>
            <a href="{{ route('login') }}" title="logIn">LogIn</a>
            <a href="#" title="logout">LogOut</a>
            <!-- <img src="profile.jpg" alt="" /> -->
        </div>
    </div>
</header>