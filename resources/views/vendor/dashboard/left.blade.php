<!-- Left Side Navigation -->
<div id="leftSide">
    <nav class="leftNav scrollable">
        <div class="search">
            <span class="searchIcon icon-magnifier"></span>
            <input placeholder="Search for houses, apartments..." type="text">
            <div class="clearfix"></div>
        </div>
        <ul>
            <li>
                <a href="/search">
                    <span class="navIcon icon-compass"></span><span class="navLabel">Αναζήτηση</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="leftUserWraper dropup">
        <a href="#" class="avatarAction dropdown-toggle" data-toggle="dropdown">
            <img class="avatar" src="{{ Auth::user()->social->avatar }}" alt="avatar">
                <!-- <span class="counter">0</span> -->
            <div class="userBottom pull-left">
                <span class="bottomUserName">{{ Auth::user()->name }}</span> <span class="fa fa-angle-up pull-right arrowUp"></span>
            </div>
            <div class="clearfix"></div>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="/account/profile"><span class="icon-user"></span>Profile</a></li>
            <li class="divider"></li>
            <li><a href="/auth/logout"><span class="icon-power"></span>Αποσύνδεση</a></li>
        </ul>
    </div>
</div>

<div class="closeLeftSide"></div>