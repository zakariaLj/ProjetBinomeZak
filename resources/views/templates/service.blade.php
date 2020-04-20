
     <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Services</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
        </div>
      </div>

      <div class="row">

        @foreach ($services as $service)
        <div class="col-md-4 service-item">
        <div class="service-icon"><i class="{{$service->icone}}"></i></div>
        <h4 class="service-title"><a href="">{{($service->titre)}}</a></h4>
          <p class="service-description">{{$service->description}}</p>
        </div>
        @endforeach



    </div>
  </section>

 
