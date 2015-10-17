<div id="wrapper">
    @include('poi.map', ['url' => '/county/geo/'.$county['_id']])

    <div id="content" class="mob-max">
        <div class="singleTop">
            @include('poi.county.carousel')
            <div class="summary">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="summaryItem">
                            <h1 class="pageTitle">{{ $county['name'] }}</h1>
                            <div class="address"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA</div>
                            <ul class="rating">
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o"></span></a></li>
                                <li>(146)</li>
                            </ul>
                            <div class="favLink"><a href="#"><span class="icon-heart"></span></a>54</div>
                            <ul class="stats">
                                <li><span class="icon-eye"></span> 200</li>
                                <li><span class="icon-bubble"></span> 13</li>
                            </ul>
                            <div class="clearfix"></div>
                            <ul class="features">
                                <li><span class="fa fa-moon-o"></span><div>2 Bedrooms</div></li>
                                <li><span class="icon-drop"></span><div>2 Bathrooms</div></li>
                                <li><span class="icon-frame"></span><div>2750 Sq Ft</div></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="agentAvatar summaryItem">
                            <div class="clearfix"></div>
                            <img class="avatar agentAvatarImg" src="images/avatar-2.png" alt="avatar">
                            <div class="agentName">Jane Smith</div>
                            <a data-toggle="modal" href="#contactAgent" class="btn btn-lg btn-round btn-green contactBtn isThemeBtn">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="description">
            <h3>Description</h3>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
        <div class="share">
            <h3>Share on Social Networks</h3>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span> Facebook</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span> Twitter</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-google"><span class="fa fa-google-plus"></span> Google+</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-pinterest"><span class="fa fa-pinterest"></span> Pinterest</a>
                </div>
            </div>
        </div>
        <div class="amenities">
            <h3>Amenities</h3>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-car"></span> Garage</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-tint"></span> Outdoor Pool</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-leaf"></span> Garden</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-shield"></span> Security System</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-wifi"></span> Internet</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-phone"></span> Telephone</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-asterisk"></span> Air Conditioning</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-sun-o"></span> Heating</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-fire"></span> Fireplace</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-arrows-v"></span> Balcony</div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-desktop"></span> TV Cable</div>
            </div>
        </div>
        @include('vendor.widget.results', ['base' => 'municipality', 'paginate' => false])
        <div class="clearfix"></div>
    </div>
    <div class="modal fade" id="contactAgent" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="contactLabel">Contact Agent</h4>
                </div>
                <div class="modal-body">
                    <form class="contactForm">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
                                <input type="text" placeholder="Subject" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
                                <textarea placeholder="Message" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-round btn-o btn-gray">Close</a>
                    <a href="#" class="btn btn-round btn-green isThemeBtn">Send message</a>
                </div>
            </div>
        </div>
    </div>
</div>