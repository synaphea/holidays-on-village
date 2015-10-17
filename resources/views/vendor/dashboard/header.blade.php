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

    <div class="headerNotifyWraper">
        <a href="#" class="headerNotify dropdown-toggle" data-toggle="dropdown">
            <span class="notifyIcon icon-bell"></span>
            <span class="counter">5</span>
        </a>
        <div class="dropdown-menu pull-right notifyMenu" role="menu">
            <div class="notifyHeader">
                <span>Notifications</span>
                <a href="#" class="notifySettings icon-settings"></a>
                <div class="clearfix"></div>
            </div>
            <ul class="notifyList">
                <li>
                    <a href="#">
                        <img class="avatar pull-left" src="{{ Auth::user()->social->avatar }}" alt="avatar">
                        <div class="pulse border-grey"></div>
                        <div class="notify pull-left">
                            <div class="notifyName">Sed ut perspiciatis unde</div>
                            <div class="notifyTime">5 minutes ago</div>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="notifyRound notifyRound-red fa fa-envelope-o"></div>
                        <div class="pulse border-red"></div>
                        <div class="notify pull-left">
                            <div class="notifyName">Lorem Ipsum is simply dummy text</div>
                            <div class="notifyTime">20 minutes ago</div>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="notifyRound notifyRound-yellow fa fa-heart-o"></div>
                        <div class="pulse border-yellow"></div>
                        <div class="notify pull-left">
                            <div class="notifyName">It is a long established fact</div>
                            <div class="notifyTime">2 hours ago</div>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="notifyRound notifyRound-magenta fa fa-paper-plane-o"></div>
                        <div class="pulse border-magenta"></div>
                        <div class="notify pull-left">
                            <div class="notifyName">There are many variations</div>
                            <div class="notifyTime">1 day ago</div>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
            </ul>
            <a href="#" class="notifyAll">See All</a>
        </div>
    </div>
    <a href="#" class="mapHandler"><span class="icon-map"></span></a>
    <div class="clearfix"></div>
</div>