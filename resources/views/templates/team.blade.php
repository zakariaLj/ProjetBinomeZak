 <!--==========================
  Team Section
  ============================-->




  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Team</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>
      @foreach ($teams as $team)
              
      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img style="width:150px heigth:50px" src="{{asset('storage/'.$team->Imgteam_path)}}" alt=""></div>
            <h4>{{$team->Name}}</h4>
            <span>{{$team->Descriptionteam}}</span>
            <div class="social">
              <a href="{{$team->url}}"><i class="fa fa-twitter"></i></a>
              <a href="{{$team->url}}"><i class="fa fa-facebook"></i></a>
              <a href="{{$team->url}}"><i class="fa fa-google-plus"></i></a>
              <a href="{{$team->url}}"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        
        @endforeach      

      {{-- @if (!empty($team) )
 
        @else
        
        
        <div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          
          
          @endif
           --}}
                 
                 
                </div>
              </div>
            </section>
            