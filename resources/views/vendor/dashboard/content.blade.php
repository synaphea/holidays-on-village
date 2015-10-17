<div id="wrapper">	
	@include('vendor.widget.map')
    <div id="content">    
        {{-- 
        	@include('vendor.widget.filter')
        --}}
        @include('vendor.widget.results', ['base' => 'region', 'paginate' => false])
    </div>
    <div class="clearfix"></div>
</div>