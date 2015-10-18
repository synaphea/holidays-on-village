<div id="header">
    <div class="logo">
        <a href="/">
            <img src="/img/one-small.png" style="position: absolute;display: block;top: 14px;left: 20px;"/>
            <img src="/img/logo-text.png" height="40" style="position: absolute;display: block;top: 10px;left: 68px;"/>
        </a>
    </div>
    <a href="#" class="navHandler"><span class="fa fa-bars"></span></a>
    
    <div class="search">
        <span class="searchIcon icon-magnifier"></span>
        <input placeholder="Αναζήτηση για νέα μέρη..." type="text">
    </div>
    
    <div class="headerUserWraper">
        <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown"><span class="icon-user"></span><span class="counter">5</span></a>
        <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
            <img class="avatar headerAvatar pull-left" src="{{ Auth::user()->social->avatar }}" alt="avatar">
            <div class="userTop pull-left">
                <span class="headerUserName">{{ Auth::user()->name }}</span> <span class="fa fa-angle-down"></span>
            </div>
            <div class="clearfix"></div>
        </a>
        <div class="dropdown-menu pull-right userMenu" role="menu">
            <div class="mobAvatar">
                <img class="avatar mobAvatarImg" src="{{ Auth::user()->social->avatar }}" alt="avatar">
                <div class="mobAvatarName">John Smith</div>
            </div>
            <ul>
                <li><a href="/account/profile"><span class="icon-user"></span>Profile</a></li>
                <li class="divider"></li>
                <li><a href="/auth/logout"><span class="icon-power"></span>Αποσύνδεση</a></li>
            </ul>
        </div>
    </div>

    <a href="#" class="mapHandler"><span class="icon-map"></span></a>
    <div class="clearfix"></div>
</div>