<!--==========================
  Porfolio Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Portfolio</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>
      <div class="row">

      

          @foreach ($portfolios as $portfolio)
          
              <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url({{asset('storage/'.$portfolio->ImgPortfolio_path)}});" href="">
                  <div class="details">
                    <h4>{{$portfolio->Name}}</h4>
                    <span>{{$portfolio->DescriptionPortfolio}}</span>
                  </div>
                </a>
              
                  </div>    
        
                      
                      @endforeach
                      
                      
                  </div> 

        </div>
      </section>