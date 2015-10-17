<div class="resultsList">
    <div class="row">
        @foreach ($items as $item)
            @include('vendor.widget.results-item', ['item' => $item, 'base' => $base])
        @endforeach
    </div>
    @if($paginate)
	    @include('vendor.widget.results-pagination')
	@endif
</div>