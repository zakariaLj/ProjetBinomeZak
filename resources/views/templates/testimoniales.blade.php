<!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>
      @foreach ($testimonials as $testimonial)
      {{-- @if ($loop->index%2==0) --}}
      <div class="row">
        <div class="col-md-3">
          <div class="profile">
          <div class="pic"><img src="{{asset('storage/'.$testimonial->img_path)}}" alt=""></div>
          <h4>{{$testimonial->nom}}</h4>
          <span>{{$testimonial->fonction}}</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> {{$testimonial->commentaire}} <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>
      {{-- @endif --}}
      @endforeach
    </div>
  </section>

