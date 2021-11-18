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
<section id="team" class="front-page-section">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3>Ulasan</h3>
          </div>
          {{-- <div class="col-sm-10 col-sm-offset-1">
            <div class="section-description">Meet the people that are going to take your business to the next level.</div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <a class="carousel-control-prev" href="#carouselUlasan" role="button" data-slide="prev">
              <i class="fa fa-chevron-left fa-lg text-muted"></i>
              <span class="sr-only">Previous</span>
          </a>
          <div class="col-12">
            <div id="carouselUlasan" class="carousel slide" data-ride="carousel" data-interval="9000">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                @forelse ($ulasan as $item)
                <div class="carousel-item col-md-3 {{ $loop->iteration == 1 ? 'active' : '' }}">
                  <div class="row">
                    <div class="col">
                      <img src="https://demo.colorlib.com/illdy/wp-content/themes/illdy/layout/images/front-page/front-page-team-3.jpg" class="rounded-circle" alt="John Smith" title="John Smith" />
                    </div>
                    <div class="col">
                      <b class="h4">{{ $item->name }}</b>
                      <label class="text-red-400">{{ $item->email }}</label>
                      <span>{{ $item->subjek }}</span>
                      <br>
                      <span>{{ $item->pesan }}</span>
                    </div>
                  </div>
                </div>
                @empty
                  <p>Belum ada yang memberi ulasan.</p>
                @endforelse
              </div>
            </div>
          </div>
            <a class="carousel-control-next text-faded" href="#carouselUlasan" role="button" data-slide="next">
                <i class="fa fa-chevron-right fa-lg text-muted"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <hr>
        <div class="row mt-4">
          <div class="col-sm-12">
            <form action="{{ route('ulasan.store') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="subject">Subyek</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan subyek disini...">
              </div>
              <div class="form-group">
                <label for="message">Pesan</label>
                <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
              </div>
              <p>
                <input type="submit" value="Kirim" class="wpcf7-form-control has-spinner wpcf7-submit" />
              </p>
            </form>
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
    $('#carouselUlasan').on('slide.bs.carousel', function (e) {
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