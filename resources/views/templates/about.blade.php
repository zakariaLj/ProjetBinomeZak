 <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">About Us </h3>
          <div class="section-title-divider"></div>
          @if ($about != null)
          <p class="section-description">{{$about->description_1}}</p>
              
          @else
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
              
          @endif

        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
        @if ($about !== null)
            <img src="{{asset('storage/'.$about->imgAbout_path)}}" alt="">
            
        @else
            <img src="img/about-img.jpg" alt="">
        @endif
        </div>

        <div class="col-md-6 about-content">
          @if ($about != null)
          <h2 class="about-title">{{$about->Titre}}</h2>
              
          @else
          <h2 class="about-title">We provide great services and ideass</h2>
             
          @endif


          @if ($about != null)
          <p class="section-description">{{$about->description_2}}</p>
              
          @else
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
              
          @endif

        </div>
      </div>
    </div>
  </section>

