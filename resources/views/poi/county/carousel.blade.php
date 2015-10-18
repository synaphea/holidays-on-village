<?php $items = Instagram::searchMedia(37.979513, 23.715892, 5000); $i=0;?>

<div id="carouselFull" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($items->data as $image)
            <div class="item {{ ($i>=1) ? '': 'active'}}" style="height: 340px;">
                <img src="{{ $image->images->standard_resolution->url }}" width="614.5" height="368" align="First Slide">
                <div class="container">
                    <div class="carousel-caption">
                        
                    </div>
                </div>
            </div>
            <?php $i++ ?>
        @endforeach
    </div>
    <a class="left carousel-control" href="#carouselFull" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
    <a class="right carousel-control" href="#carouselFull" role="button" data-slide="next"><span class="fa fa-chevron-right"></span></a>
</div>