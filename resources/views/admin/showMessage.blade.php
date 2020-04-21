@extends('adminlte::page')

@section('content')


<section class="content">
    <div class="row">
      <div class="col-md-3">
      <a href="{{route('message.index')}}" class="btn btn-primary btn-block mb-3">Compose</a>

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Folders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item active">
                <a href="#" class="nav-link">
                  <i class="fas fa-inbox"></i> Inbox
                  <span class="badge bg-primary float-right">
                    {{-- @foreach ($messages as $message)
                        <script>
                          let count = 1;
                          count++;
                        </script>
                    @endforeach --}}
                    2
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-envelope"></i> Sent
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-file-alt"></i> Drafts
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-filter"></i> Junk
                  <span class="badge bg-warning float-right"></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-trash-alt"></i> Trash
                </a>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
                <div class="input-group-append">
                  <div class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
              <div class="float-right">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
            @foreach ($messages as $message)
                
            
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <input type="checkbox" value="" id="check1">
                      <label for="check1"></label>
                      <form action="{{route('message.destroy', '$message->id')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt" ></i></button>
                      </form>
                    </div>
                  </td>
                  <td class="mailbox-star"><a href="#">{{$message->message}}</a></td>
                  <td class="mailbox-name"><a href="read-mail.html">{{$message->nom}}</a></td>
                  <td class="mailbox-subject"> {{$message->subject}}</td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">a few moments</td>
                </tr>
                <tr>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            @endforeach
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <form action="{{route('message.destroy', '$message->id')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('delete')
                <button type="button" class="btn btn-default btn-sm" type="submit"><i class="far fa-trash-alt" ></i></button>
                </form>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
              <div class="float-right">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Page Script -->
<script>
$(function () {
  //Enable check and uncheck all functionality
  $('.checkbox-toggle').click(function () {
    var clicks = $(this).data('clicks')
    if (clicks) {
      //Uncheck all checkboxes
      $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
      $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
    } else {
      //Check all checkboxes
      $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
      $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
    }
    $(this).data('clicks', !clicks)
  })

  //Handle starring for glyphicon and font awesome
  $('.mailbox-star').click(function (e) {
    e.preventDefault()
    //detect type
    var $this = $(this).find('a > i')
    var glyph = $this.hasClass('glyphicon')
    var fa    = $this.hasClass('fa')

    //Switch states
    if (glyph) {
      $this.toggleClass('glyphicon-star')
      $this.toggleClass('glyphicon-star-empty')
    }

    if (fa) {
      $this.toggleClass('fa-star')
      $this.toggleClass('fa-star-o')
    }
  })
})

@endsection    