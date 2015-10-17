<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <a href="/{{ $base }}/{{ $item['_id'] }}" class="card">
        <div class="figure">
            <img height="192" src="https://scontent-fra3-1.cdninstagram.com/hphotos-xaf1/t51.2885-15/e35/11248726_1463439890629954_875741758_n.jpg" alt="image">
            <div class="figCaption">
                <div></div>
                {{-- <span class="icon-eye"> 200</span>
                <span class="icon-heart"> 54</span>
                <span class="icon-bubble"> 13</span> --}}
            </div>
            <div class="figView"><span class="icon-eye"></span></div>
            <div class="figType" style="background-color: #0EAAA6;">ΠΕΡΙΟΧΗ</div>
        </div>
        <h2>{{ $item['name'] }}</h2>
        {{-- <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA</div>
        <div class="cardRating">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star-o"></span>
            (146)
        </div> --}}
        <ul class="cardFeat">
            {{-- <li><span class="fa fa-moon-o"></span> 3</li>
            <li><span class="icon-drop"></span> 2</li>
            <li><span class="icon-frame"></span> 3430 Sq Ft</li> --}}
        </ul>
        <div class="clearfix"></div>
    </a>
</div>