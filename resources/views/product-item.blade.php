<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach($product as $item)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('images/products/' . $item->url_hinh) }}" alt="" />
                            <h2>{{ number_format($item->gia,0) . ' VNĐ' }}</h2>
                            <p>{{ $item->ten_san_pham }}</p>
                            <a href="{{ url('buy',['id' => $item->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{ number_format($item->gia,0) . ' VNĐ' }}</h2>
                                <p>{{ $item->ten_san_pham }}</p>
                                <a href="{{ url('buy',['id' => $item->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{ asset('detail') . '/' . $item->ten_alias . '-' . $item->id . '.html' }}"><i class="fa fa-info"></i>Xem chi tiết</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center">
        <ul class="pagination">
            @if($product->currentPage() != 1)
                <li><a href="{!! $product->url($product->currentPage() - 1) !!}">Trước</a></li>
            @endif
            @for($i = 1; $i <= $product->lastPage(); $i++)
                <li class="{!! $product->currentPage() == $i ? 'active' : '' !!}"><a href="{!! $product->url($i) !!}">{{ $i }}</a></li>
            @endfor
            @if($product->currentPage() != $product->lastPage())
                <li><a href="{!! $product->url($product->currentPage() + 1) !!}">Sau</a></li>
            @endif
        </ul>
    </div>
</div>