



<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Boss</title>
</head>
<body>
<img class="img-fluid" src="{{ public_path('assets/new images/logoo.jpeg')}}"  height="50">
<br>
<br>
<br>
<br>
<table style="width: 100%">
    <thead style="border: solid black 1px">
    <tr >

        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Ürün&nbsp;İsmi</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Color</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri"> Coil Length</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Total Length</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Unit&nbsp;Price</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">product&nbsp;Price</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">unitWeight</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">totalWeight</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">copperWeight</th>
        <th></th>
        <th style=" border-right: solid 1px black;font-size: small;font-family: DejaVu Sans, sans-seri">Product Detail</th>
        <th></th>
        <th style=" font-size: small;font-family: DejaVu Sans, sans-seri">qty&nbsp;x&nbsp;price</th>
        <th></th>
        <hr>
    </tr>
    </thead>
    <tbody style="border: solid black 1px">

    @foreach($order as $data)
        <tr style="border: none">
            <td  style=" border-right: solid 1px black">{{\App\Product::find($data->id)->product_name }}</td>
            <td></td>
            <td  style=" border-right: solid 1px black" >{{\App\Product::find($data->id)->color}}</td>
            <td></td>
            <td  style=" border-right: solid 1px black">{{\App\Product::find($data->id)->coil_length}} mt</td>
            <td></td>
            <td  style=" border-right: solid 1px black">{{\App\Product::find($data->id)->total_length}}</td>
            <td></td>
            <td  style=" border-right: solid 1px black">{{number_format(\App\Product::find($data->id)->unit_price,2,',','.')}} $</td>
            <td></td>
            <td  style=" border-right: solid 1px black">{{number_format(\App\Product::find($data->id)->product_price,2,',','.')}} $</td>
            <td></td>
            <td  style=" border-right: solid 1px black">{{\App\Product::find($data->id)->unitWeight}} kg/km</td>
            <td></td>
            <td  style=" border-right: solid 1px black">{{\App\Product::find($data->id)->totalWeight}} kg</td>
            <td></td>
            <td  style=" border-right: solid 1px black">{{\App\Product::find($data->id)->copperWeight}} kg/km</td>
            <td></td>
            <td  style=" border-right: solid 1px black;font-family: DejaVu Sans, sans-seri">{{\App\Product::find($data->id)->product_detail}}</td>
            <td></td>
            <td>{{ $data->qty. 'x' .  number_format(\App\Product::find($data->id)->product_price,2,',','.') . '$'}}</td>
            <td></td>
        </tr>

    @endforeach
    </tbody>
    <p style="margin-left: 80%;font-family: DejaVu Sans, sans-seri">Amount : <strong> {{ number_format($amount ,2 , '.',',')}} $</strong></p>
</table>
<br>
<br>
<br>
<br>
<br>
     <p style="border: solid 1px black;width: 50%">
         <br>
         <small >&nbsp; BRAND NAME :     			xxxxxxx</small><br>
         <small >&nbsp; DELIVERY TERM :			<span style="color: red">CFR -</span>	xxxxxxxx</small><br>
         <small >&nbsp; PAYMENT TERM :			<span style="color: red">%50 ADVANCE + %50 BEFORE THE SHIPMENT</span></small><br>
         <small >&nbsp; MANUFACTURER : 			<span style="color: red">BOSS KABLO LIMITED SIRKETI</span></small><br>
         <small >&nbsp;TOLERANCE ON TOTAL QUANTITY : 				<span style="color: red"> ±  %5</span></small><br>
         <small >&nbsp;LME RATE : 			<span style="color: red">$7.300,00</span></small><br>
         <small>&nbsp;DELIVERY TIME :    			<span style="color: red">4 WEEKS</span></small>
         <br>
         <br>
     </p>

</body>
</html>