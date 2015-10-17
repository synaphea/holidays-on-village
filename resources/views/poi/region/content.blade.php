<div id="wrapper">
    @include('poi.map', ['url' => '/region/geo/'.$region['_id']])

    <div id="content" class="mob-max">
        <div class="singleTop">
            @include('poi.region.carousel')

            <div class="summary">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="summaryItem">
                            <h1 class="pageTitle">{{ $region['name'] }}</h1>
                            <div class="address"><span class="icon-pointer"></span></div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="description" ng-controller="WikipediaController" data-ng-init="retrieve('{{ $region['name'] }}')">
            <h3>ΠΛΗΡΟΦΟΡΙΕΣ</h3>
            <p>[[| introduction |]]</p>
        </div>
        <div class="share">
            {{-- <h3>Δες το profile</h3> --}}
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
                    <a href="#" class="btn btn-sm btn-round btn-o btn-pinterest"><span class="fa fa-instagram"></span> Instagram</a>
                </div>
            </div>
        </div>
        <div class="amenities">
            <h3>Foursquare</h3>
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
         @include('vendor.widget.results', ['base' => 'county', 'paginate' => false])
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