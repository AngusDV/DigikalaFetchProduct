<!DOCTYPE html>

<html lang="en" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<table border="0">

    <tr>
        <td>
            @php
                    $path=$product->data->product->images->main->url->{"0"};
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data = file_get_contents($path);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            @endphp
            <img src="{{$base64}}" alt="logo" width="400" height="300">
        </td>
        <td>
            {{$product->data->product->title_fa}}
            <br>
            <strong style="color: #e9573f">
                @if(isset($product?->data?->data_layer?->ecommerce?->detail?->products?->{"0"}?->price))
                    قیمت
                    محصول {{money_format_irr($product?->data?->data_layer?->ecommerce?->detail?->products?->{"0"}?->price??0)}}
                    ریال
                @else
                    کالا ناموجود است
                @endif
            </strong>
        </td>
    </tr>
</table>
</body>
</html>
