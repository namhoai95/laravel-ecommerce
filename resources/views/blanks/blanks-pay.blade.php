<h3>Phiếu thanh toán của {{ $name }}</h3>
<div>
    <table border="1">
        <thead>
        <tr>
            <td>Mặt hàng</td>
            <td>Giá</td>
            <td>Số lượng</td>
            <td>Tổng tiền</td>
        </tr>
        </thead>
        <tbody>
        @foreach($content as $item)
            <tr>
                <td>
                    <h4>{!! $item['name'] !!}</h4>
                </td>
                <td>
                    <p>{!! number_format($item['price'],0) !!}</p>
                </td>
                <td>
                    <p>
                        {!! $item['qty'] !!}
                    </p>
                </td>
                <td>
                    <p>{!! number_format($item['price'] * $item['qty'],0)  !!}</p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table border="1">
        <tr>
            <td>Tổng cộng</td>
            <td><span>{!! number_format($total,0) !!} VNĐ</span></td>
        </tr>
    </table>
</div>