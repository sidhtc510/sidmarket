<div class="card productCard"><a href="{{ route('product.show', $product->slug) }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <p>{{$product->category->title}}</p>
            <p class="card-text"> Some quick example text to build on the card title and make up
                the
                bulk of
                the card's contentthe card's contentthe card's content.</p>
        </div>
        <a href="{{ route('product.show', $product->slug) }}" class="btn btn-primary position-absolute  bottom-0 end-0 m-1">Show</a>
    </a>
</div>
