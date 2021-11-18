@push('css')
    <style>
      /*
          code by Iatek LLC 2018 - CC 2.0 License - Attribution required
          code customized by Azmind.com
      */
      @media (min-width: 768px) and (max-width: 991px) {
        /* Show 4th slide on md if col-md-4*/
        .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
            position: absolute;
            top: 0;
            right: -33.3333%;  /*change this with javascript in the future*/
            z-index: -1;
            display: block;
            visibility: visible;
        }
      }
      @media (min-width: 576px) and (max-width: 768px) {
        /* Show 3rd slide on sm if col-sm-6*/
        .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
            position: absolute;
            top: 0;
            right: -50%;  /*change this with javascript in the future*/
            z-index: -1;
            display: block;
            visibility: visible;
        }
      }
      @media (min-width: 576px) {
        .carousel-item {
            margin-right: 0;
        }
        /* show 2 items */
        .carousel-inner .active + .carousel-item {
            display: block;
        }
        .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
        .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
            transition: none;
        }
        .carousel-inner .carousel-item-next {
            position: relative;
            transform: translate3d(0, 0, 0);
        }
        /* left or forward direction */
        .active.carousel-item-left + .carousel-item-next.carousel-item-left,
        .carousel-item-next.carousel-item-left + .carousel-item,
        .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(-100%, 0, 0);
            visibility: visible;
        }
        /* farthest right hidden item must be also positioned for animations */
        .carousel-inner .carousel-item-prev.carousel-item-right {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            display: block;
            visibility: visible;
        }
        /* right or prev direction */
        .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
        .carousel-item-prev.carousel-item-right + .carousel-item,
        .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(100%, 0, 0);
            visibility: visible;
            display: block;
            visibility: visible;
        }
      }
      /* MD */
      @media (min-width: 768px) {
        /* show 3rd of 3 item slide */
        .carousel-inner .active + .carousel-item + .carousel-item {
            display: block;
        }
        .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
            transition: none;
        }
        .carousel-inner .carousel-item-next {
            position: relative;
            transform: translate3d(0, 0, 0);
        }
        /* left or forward direction */
        .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(-100%, 0, 0);
            visibility: visible;
        }
        /* right or prev direction */
        .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(100%, 0, 0);
            visibility: visible;
            display: block;
            visibility: visible;
        }
      }
      /* LG */
      @media (min-width: 991px) {
        /* show 4th item */
        .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
            display: block;
        }
        .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
            transition: none;
        }
        /* Show 5th slide on lg if col-lg-3 */
        .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
            position: absolute;
            top: 0;
            right: -25%;  /*change this with javascript in the future*/
            z-index: -1;
            display: block;
            visibility: visible;
        }
        /* left or forward direction */
        .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(-100%, 0, 0);
            visibility: visible;
        }
        /* right or prev direction //t - previous slide direction last item animation fix */
        .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(100%, 0, 0);
            visibility: visible;
            display: block;
            visibility: visible;
        }
      }
    </style>
@endpush
<section id="latest-news" class="front-page-section">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3>Rekomendasi Menu</h3>
          </div>
          {{-- <div class="col-sm-10 col-sm-offset-1">
            <div class="section-description">If you are interested in the latest articles in the industry, take a sneak peek at our blog. You have nothing to loose!</div>
          </div> --}}
        </div>
      </div>
    </div>
    {{-- <a href="https://demo.colorlib.com/illdy/blog-2/" title="See blog" class="latest-news-button">
      <i class="fa fa-chevron-circle-right"></i>See blog </a> --}}
    <div class="section-content">
      <div class="container">
        <div class="row">
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
              <i class="fa fa-chevron-left fa-lg text-muted"></i>
              <span class="sr-only">Previous</span>
          </a>
          <div class="col-12">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                @foreach ($data as $item)
                  <div class="carousel-item col-md-4 col-sm-6 col-xs-12 {{ $loop->iteration == 1 ? 'active' : '' }}">
                      <div class="post" style="
                      ">
                      <div class="post-image" style="background-image: url('http://b-farm.test/{{ $item->gambar }}');"></div>    
                      <h5>
                        <a href="{{ url('/rekomendasi').'/'.$item->id }}" title="{{ $item->judul_menu }}" class="post-title">{{ $item->judul_menu }}</a>
                      </h5>
                      <div class="post-entry">{{ substr($item->bahan, 0, 40)}}.&hellip; </div>
                      <a href="{{ url('/rekomendasi').'/'.$item->id }}" title="Read more" class="post-button">
                        <i class="fa fa-chevron-circle-right"></i>Read more </a>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <i class="fa fa-chevron-right fa-lg text-muted"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>        
      </div>
    </div>
  </div>
</section>

@push('js')
  <script>
    /*
        Carousel
    */
    $('#carouselExample').on('slide.bs.carousel', function (e) {
      console.log('carousel');
      /*
          CC 2.0 License Iatek LLC 2018 - Attribution required
      */
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $('.carousel-item').length;

      if (idx >= totalItems-(itemsPerSlide-1)) {
          var it = itemsPerSlide - (totalItems - idx);
          for (var i=0; i<it; i++) {
              // append slides to end
              if (e.direction=="left") {
                console.log('left');
                  $('.carousel-item').eq(i).appendTo('.carousel-inner');
              }
              else {
                console.log('right');
                  $('.carousel-item').eq(0).appendTo('.carousel-inner');
              }
          }
      }
    });
  </script>
@endpush