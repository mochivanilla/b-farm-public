<section id="contact-us" class="front-page-section">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3>Contact us</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row" style="margin-bottom: 45px;">
              <div class="col-sm-4">
                <div class="contact-us-box">
                  <div class="box-left" data-customizer="box-left-address-title"> Alamat </div>
                  <div class="box-right">
                    <span class="box-right-row" data-customizer="contact-us-address-1">{{ $profile->alamat }}</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="contact-us-box">
                  <div class="box-left" data-customizer="box-left-customer-support-title"> Customer Support </div>
                  <div class="box-right">
                    <span class="box-right-row" data-customizer="contact-us-phone">Phone: {{ $profile->no_hp }}</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="contact-us-social">
                  <a href="{{ 'https://www.instagram.com/'.$profile->ig }}" title="Instagram" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a href="{{ $profile->link_wa }}" title="Whatsapp" target="_blank">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>