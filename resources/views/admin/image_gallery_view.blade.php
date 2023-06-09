@extends('admin.layout')

@section('viewInc')


<!--start content-->
<main class="page-content">
              
   
        @if(session('success'))
          <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{session('success')}}
          </div>
    @endif
           <div class="row">
              <div class="col-12 col-lg-12 col-xl-11 d-flex">
                <div class="card radius-10 w-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                      <ul></ul>
                    </div>
                      <h6 class="mb-0">Projects</h6>
                      <div class="fs-5 ms-auto dropdown">
                         <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                           
                       </div>
                     </div>
                     <div class="table-responsive mx-auto mt-2">
                     <div class="col-10 mt-3">
                      <form action="{{Route('image_gallery_view_search')}}" method="get">
                        <select class="form-control" style= "display: inline;"  name="slug">
                        <option value="" selected="selected">Filter By Project Name</option>
                          @foreach ($projects as $project)
                              <option value="{{$project->slug}}">{{$project->project_name}}</option>
                          @endforeach
                        </select>
                        <input type="submit" style= "display: inline;" value="search" />
                      </form>
                    </div>
                      <table class="table align-middle mt-3 mb-0">
                        <thead class="table-light">
                          <tr>
                            <th>#ID</th>
                            <th>Image</th>
                            <th>Project Name</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                          <!-- <td colspan = 8 class="text-center">No record found</td> -->
                          @if($image_gallerys->count() > 0)
                            @php
                              $i = 0
                            @endphp
                            @foreach($image_gallerys as $image_gallery)
                              @php
                                $i++
                              @endphp
                          <tr>
                            <td>{{$i}}</td>
                            <td> <img src="/storage/{{$image_gallery->img_url}}" alt="" style="height: 50px; width: 50px;" />  </td>
                            <td>{{strtoupper(str_replace('_', ' ',$image_gallery->slug))}}</td>
                            <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                               
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" onclick="deleteProject({{$image_gallery->id}})"><i class="bi bi-trash-fill"></i></a>
                            </div>
                            </td>
                          </tr>


                          
                           
                          @endforeach
                          @else
                            <tr><td colspan="4" class="text-center">No record found</td></tr>
                          
                         @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
           </div><!--end row-->
  
  


           <div class="card-body offset-md-4 offset-2">
                    {{ $image_gallerys->links() }}
                  </div>
  
            </main>
         <!--end page main-->

         <script>
           function deleteProject(id) {
    swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover the record',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel',
            confirmButtonClass: 'confirm-class',
            cancelButtonClass: 'cancel-class',

        })
        .then((isConfirm) => {
            if (isConfirm.value) {
                $.ajax({
                    type: 'GET',
                    url: '{{Route("delete_image")}}',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'id': id,
                    },
                    beforeSend: function() {
                        swal({
                            title: 'Processing...',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            onOpen: () => {
                                swal.showLoading();
                            }
                        });
                    },

                    success: function(response) {

                        if (response.status == 1) {
                            swal("Success!", response.message, "success").then(function() {
                                location.reload();
                            });

                        } else {
                            swal("Error!", response.error, "error")
                        }

                    },
                    error: function(xhr, status, error) {
                        alert(xhr.responseText);
                        // stopLoader('body');
                    }
                });
            }
        });
      }

     
         </script>

@endsection
