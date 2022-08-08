@extends('layouts.index')
@section('css')
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
  }
.user
{
    position: relative;
    top: -50px;
    right: -100px;
}
.product-shop{
    padding-top: 10px;
    padding-bottom: 20px;
}
.logo
{
    position: relative;
    top: -10px;
}
  .mySlides {
    display: none;
  }

  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }

  /*model popup*/
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
</style>
@endsection

@section('content')

<!-- Breadcrumb Section Begin -->
@if (session('thongbao'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session('thongbao') }}
            </div>
            @endif
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="{{route('index')}}"><i class="fa fa-home"></i> Trang chủ</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
  <div class="wrapper bgded overlay">
    <div class="slideshow-container">
      @foreach ($book as $item)
      <div class="mySlides fade">

        <img src="{{asset('upload/book/'.$item->image)}}" style="width:100%;height:20rem">

      </div>

      @endforeach
    </div>
    <br>

    <div style="display:flex; text-align:center; justify-content: center">
      @foreach ($book as $s)
      <div style="text-align:center">
        <span class="dot"></span>
      </div>
      @endforeach
    </div>
    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000);
      }
    </script>
  </div>
  <div class="container">
    <div></div>
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2">
        <div class="product-item">
          <div class="row">
            <ul class="nospace elements"
              style="display: flex; flex-wrap:wrap; justify-content: center; list-style:none">
              @foreach ($book as $s)
              <li style="border: solid, 1em, black; padding-bottom:1em; margin-left:1em">

                
              <figure class="pi-pic"><img src="{{asset('upload/book/'.$s->image)}}" alt="" width=100px height=300px >
                  <div><h6 class="heading" style="width: 300px; height=200px; text-align: center;" data-id="{{$s->id}}"><b>{{$s->name}}</b></h6></div>
                  <div><h5 class="heading" style="width: 300px; text-align: center;" data-id="{{$s->id}}">{{$s->price}},000 đ</h5></div>


                  <div id="myModal_{{$s->id}}" class="modal" style="margin-bottom: 2em">
                    <div class="modal-content" >
                      <span class="close" data-id="{{$s->id}}">&times;</span>
                      <div style="display: flex">

                          <p><img src="{{asset('upload/book/'.$s->image)}}" width="2000px" height="400px"  alt="" ></p>

                        <div>
                          <h2><b>{{ $s->name }}</b></h2>
                          <h4>{{number_format($s->price)}},000 đ</h4>
                          <h6 style="margin-top: 10px; text-align: justify;">{{ $s->description }}</h6>
                        </div>

                        <div>
                        <ul id="idd_{{$item->id}}">
                        <li class="w-icon active"><i class="fa fa-shopping-cart"></i></a></li>
                        <li class="quick-view"><a onclick="AddCart({{$s->id}})" href="javascript:">Thên vào giỏ hàng</a></li>
                        </ul>
                        </div>
                      </div>


                    </div>
                  </div>

                  <br>
                  <br>
                  <ul id="idd_{{$item->id}}">
                    <li class="w-icon active"><i class="icon_bag_alt"></i></a></li>
                    <li class="quick-view"><a onclick="AddCart({{$s->id}})" href="javascript:">Thên vào giỏ hàng</a></li>
                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>

                  </ul>
                </figure>
                <div class="txtwrap">
                  {{-- <p>Noi dung</p> --}}
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Product Shop Section End -->
<script>
  function AddCart(id) {
    $.ajax({
      url: 'AddCart/' + id,
      type: 'GET',
    }).done(function (response) {
      if(response)
      {
        RenderCart(response);
      alertify.success('Đã thêm mới sản phẩm');
      }
      else{
      alertify.warning('Sản phẩm đã hết');
      }
    })
  };
  $("#change-item").on("click", ".si-close i", function () {
    console.log($(this).data("id"));
    $.ajax({
      url: 'DeleteItemCart/' + $(this).data("id"),
      type: 'GET',
    }).done(function (response) {
      RenderCart(response);
      alertify.success('Đã xóa sản phẩm thành công');
    })
  });
  function RenderCart(response) {
    $("#change-item").empty();
    $("#change-item").html(response);
    $("#total-quanty-show").text($("#total-quanty-cart").val());
  }

  //model popup//
  // Get the modal
  $('.heading').on("click", function () {
    console.log($(this).data("id"))
    var id = $(this).data("id");
    let text = document.getElementById('myModal_' + id)
    text.style.display = "block";
  });

  $('.close').on("click", function () {
    console.log('logn')
    var id = $(this).data("id");
    let text = document.getElementById('myModal_' + id)
    text.style.display="none";
  })



// //When the user clicks anywhere outside of the modal, close it
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
