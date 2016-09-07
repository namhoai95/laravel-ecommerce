{{ $name }} đã mua {{ $count }} mặt hàng bao gồm:
@foreach($content as $item)
    <div>
        <p>{{ $item['name'] }}</p>
    </div>
@endforeach
với tổng số tiền: {{ number_format($total,0) }}
<div>
    <p>Số điện thoại liên lạc: {{ $phone }}</p>
</div>
<div>
    <p>Giao hàng tại: {{ $msg }}</p>
</div>