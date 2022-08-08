@extends('layouts.index')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{{route('index')}}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>{{$category->name}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<div class="wrapper row3">
    <main class="hoc container clear">

        <div style="display: flex; flex-wrap:wrap">
          @foreach ($category->book as $item)
          <ul style="list-style:none; width:31%; display:inline-block ; text-align: center; ">
            <li>
            <h3><img src="{{asset('upload/book/'.$item->image)}}" alt="" width=200px height=220px></h3>
              <h6><b>{{$item->name}}</b></h6>
              <h5>{{number_format($item->price)}},000 ₫</h5>
              <li>
                <h6 style="display:none; text-align: justify;" id="id_{{$item->id}}">{{$item->description}}</h6>
              </li>
              <li>
                <button type="button"  data-id="{{$item->id}}" onclick="myFunction()" id="iddd_{{$item->id}}" class="btnthem">Xem Thêm</button>
                <button type="button"  data-id="{{$item->id}}" onclick="myFunction()" id="idd_{{$item->id}}" class="btnan" style="display:none">Ẩn Bớt</button>
              </li>

              <br>
              <br>
            </li>

          </ul>

      @endforeach
        </div>

      <div class="clear"></div>
    </main>
  </div>
    <script>
      $(document).ready(function(){
        $('.btnthem').click(function() {
        var id = $(this).data("id");
        let button = document.getElementById('idd_'+id)
        let button1 = document.getElementById('iddd_'+id)
        let text = document.getElementById('id_'+id)
        text.style.display="block";
        button.style.display="block";
        button1.style.display="none";
      });
      $('.btnan').click(function() {
        var id = $(this).data("id");
        let button = document.getElementById('idd_'+id)
        let button1 = document.getElementById('iddd_'+id)
        let text = document.getElementById('id_'+id)
        text.style.display="none";
        button.style.display="none";
        button1.style.display="block";
      });
      })

    </script>
@endsection
