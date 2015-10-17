<div class="resultsList">
    <div class="row">
        @foreach ($items as $item)
            @include('vendor.widget.results-item', ['item' => $item, 'base' => $base])
        @endforeach
    </div>
    @include('vendor.widget.results-pagination')
</div>