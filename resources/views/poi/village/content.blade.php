 <div id="wrapper">
    @include('poi.map', ['url' => '/village/geo/'.$village['_id']])

    <div id="content" class="mob-max">
        <div class="singleTop">
            @include('poi.village.carousel')

            <div class="summary">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="summaryItem">
                            <h1 class="pageTitle"><a href="/municipality/{{ $village['municipality_id'] }}">{{ $municipality['name'] }}</a> / {{ $village['name'] }}</h1>
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
        <div class="description" ng-controller="WikipediaController" data-ng-init="retrieve('{{ $village['name'] }}')">
            <h3>ΠΛΗΡΟΦΟΡΙΕΣ</h3>
            <p>[[| introduction |]]</p>
        </div>
        <div class="share">
            <h3>ΜΟΙΡΑΣΟΥ ΤΟ</h3>
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
        <div class="amenities" ng-controller="FoursquareController" data-ng-init="retrieve('{{ $village['name'] }}')">
            <h3>FOURSQUARE</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" ng-repeat="venue in foursquareData['response']['venues']">
                    <a href="https://foursquare.com/v/[[| venue.name |]]/[[| venue.id |]]" class="card">
                        <div class="figure">
                            <img height="192" src="[[| getStreet(venue.location.lat, venue.location.lng) |]]" alt="image">
                            <div class="figCaption">
                                <div>[[| venue.hereNow.summary |]]</div>
                                {{-- <span class="icon-eye"> 200</span>
                                <span class="icon-heart"> 54</span> --}}
                                <span class="icon-bubble"> [[| venue.hereNow.count |]]</span>
                            </div>
                            <div class="figView"><span class="icon-eye"></span></div>
                            <div class="figType">[[| venue.categories[0].name |]]</div>
                        </div>
                        <h2>[[| venue.name |]]</h2>
                        <div class="cardAddress"><span class="icon-pointer"></span> [[| venue.location.formattedAddress.join(" ") |]]</div>
                        {{-- <div class="cardRating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-o"></span>
                            (146)
                        </div> --}}
                        <ul class="cardFeat">
                            <li><span class="fa fa-moon-o"></span> [[| venue.stats.checkinsCount |]]</li>
                            <li><span class="icon-drop"></span>  [[| venue.stats.usersCount |]]</li>
                            <li><span class="icon-frame"></span>  [[| venue.stats.tipCount |]]</li>
                        </ul>
                        <div class="clearfix"></div>
                    </a>                    
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>