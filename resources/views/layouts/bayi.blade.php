@extends("layouts.main")
@section("content")
<div class="container" style="margin-top: 170px">
    <object data="{{asset("uploads/newbayi.pdf")}}" type="application/pdf" width="100%" height="600px">
        <p>Alternative text - include a link <a href="{{asset("uploads/newbayi.rtf")}}">to the PDF!</a></p>
    </object>
</div>
@endsection

@section("customJs")

@endsection

@section("customCss")
@endsection
