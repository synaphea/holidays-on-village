<div id="wrapper">	
	@include('vendor.widget.map')
    <div id="content">    
        @include('vendor.widget.filter')
        @include('vendor.widget.results', ['base' => 'county'])
    </div>
    <div class="clearfix"></div>
</div>