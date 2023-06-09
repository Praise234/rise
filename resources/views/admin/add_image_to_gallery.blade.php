<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::to('admin/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{ URL::to('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/plugins/fancy-file-uploader/fancy_fileupload.css')}}" rel="stylesheet" />
	<link href="{{ URL::to('admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ URL::to('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/style.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
   
    <!-- loader-->
    <link href="{{ URL::to('admin/css/pace.min.css')}}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ URL::to('admin/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('admin/css/header-colors.css')}}" rel="stylesheet" />

    <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>   -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" crossorigin="anonymous"> -->

    
    <title>Rise - Admin</title>
</head>
<body>
  
        <header class="top-header2">
            <nav class="navbar">
                

                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav">
                        
                        @if(Session::has('user'))
                        <li>
                            <a class="dropdown-item" href="{{Route('logout')}}">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
<!--end top header-->


<!--start sidebar -->
@if(Session::has('user'))
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ URL::to('images/logo.png')}}" class="img-fluid" style= "width:70px;" alt="logo icon">
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{Route('dashboard') }}" class="menu-label mt-3">
                        <div class="parent-icon"><i class="bi bi-eye"></i>
                        </div>
                        <div class="menu-title">Projects</div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('add_project_view') }}" class="menu-label mt-3 ">
                        <div class="parent-icon"><i class="bi bi-plus"></i>
                        </div>
                        <div class="menu-title">Add New Project</div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('view_add_gallery_image') }}" class="menu-label mt-3 ">
                        <div class="parent-icon"><i class="bi bi-plus"></i>
                        </div>
                        <div class="menu-title">Add To Gallery</div>
                    </a>
                </li>
                <li>
                    <a href="{{Route('image_gallery_view') }}" class="menu-label mt-3 ">
                        <div class="parent-icon"><i class="bi bi-plus"></i>
                        </div>
                        <div class="menu-title">View Gallery</div>
                    </a>
                </li>
               
            </ul>
            <!--end navigation-->
        </aside>
        @endif
<!--end sidebar -->
<main class="page-content">
              
  
  <div class="col-md-8 col-lg-7 mx-auto mb-5">
    <div class="mt-3"></div>
      <h6 class="mb-0 text-uppercase">Add Project</h6>
      
      <hr/>
      @if(count($errors) > 0)
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
      @endforeach
      </div>
      @endif
      @if(session('success'))
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          {{session('success')}}
        </div>
      @endif
      <form class="row g-3" method="post" enctype="multipart/form-data" action="{{Route('add_gallery_image')}}">
        @csrf
        <div class="col-12">
          <img src="{{(old('product_Image')) ?? '/admin/images/default.jpg'}}"  id="img" alt="image" class="d-block mb-3" style="height: 200px;width:200px;" />
          <label class="form-label">Image:</label>
          <input type="file" class="form-label" name="product_Image" id = "prodImg" />
        </div>
       
        <div class="col-12">
          <label class="form-label">Project Name</label>
          <select class="form-control" name="slug">
            @foreach ($projects as $project)
                <option value="{{$project->slug}}">{{$project->project_name}}</option>
            @endforeach
          </select>
        </div>
       
        
        <div class="col-12">
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </div>
      </form>
      </div>


</main>
<!--end page main-->

        
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
<!-- Bootstrap bundle JS -->
<script src="{{ URL::to('admin/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{ URL::to('admin/js/jquery.min.js')}}"></script>
<script src="{{ URL::to('admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{ URL::to('admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>

<script src="{{ URL::to('admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{ URL::to('admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>





<script src="https://cdn.tiny.cloud/1/p6ais1ohum70fwrl1stnx5uytpoe4eeakdll6vezo5ml2jbr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"  crossorigin="anonymous"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" crossorigin="anonymous"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script> -->

<script>
    $(function(){
        $('#prodImg').change(function(){
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) 
            {
                var reader = new FileReader();

                reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
                }
            reader.readAsDataURL(input.files[0]);
            }
        });

    });
</script>

    <script>
        tinymce.init({
            selector:'#editor',
            menubar: false,
            statusbar: false,
            plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
            toolbar: [
                        { name: 'history', items: [ 'undo', 'redo' ] },
                        { name: 'styles', items: [ 'styles' ] },
                        { name: 'formatting', items: [ 'bold', 'italic' ] },
                        { name: 'alignment', items: [ 'alignleft', 'aligncenter', 'alignright', 'alignjustify' ] },
                        { name: 'indentation', items: [ 'outdent', 'indent' ] }
                    ],
            skin: 'bootstrap',
            toolbar_drawer: 'floating',
            min_height: 200,           
            autoresize_bottom_margin: 16,
            setup: (editor) => {
                editor.on('init', () => {
                    editor.getContainer().style.transition="border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
                });
                editor.on('focus', () => {
                    editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(0, 123, 255, .25)",
                    editor.getContainer().style.borderColor="#80bdff"
                });
                editor.on('blur', () => {
                    editor.getContainer().style.boxShadow="",
                    editor.getContainer().style.borderColor=""
                });
            }
        });



    </script>
</html>