
<!--==========================
  Hero Section
  ============================-->
  <section id="hero" style="  background: url(storage/{{$header->FondImg_path}}) top center;">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          @if ($header != null)
               <img class="" src="{{asset('storage/'.$header->imgHeader_path)}}" alt="logo">
        </div>
          @else
          <img class="" src="img/logo.png" alt="Imperial">
          

              
          @endif
        </div>
        @if ($header != null)
          <h1>{{$header->Titre}}</h1>
          <h2>We are <span class="rotating">{{$header->HeaderDescription}}</span></h2>
        @else
          <h1>Welcome to Imperial studios</h1>
          <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
          
        @endif
        
        <div class="actions">
          <a href="#about" class="btn-get-started">Get Strated</a>
          <a href="#services" class="btn-services">Our Services</a>
        </div>
      </div>
    </div>
  </section>
    
