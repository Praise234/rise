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
                      <table class="table align-middle mb-0">
                        <thead class="table-light">
                          <tr>
                            <th>#ID</th>
                            <th>Project Name</th>
                            <th>Amount Raised</th>
                            <th>Goal</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                          <!-- <td colspan = 8 class="text-center">No record found</td> -->
                          @if($projects->count() > 0)
                            @php
                              $i = 0
                            @endphp
                            @foreach($projects as $project)
                              @php
                                $i++
                              @endphp
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$project->project_name}}</td>
                            <td>${{number_format($project->raised)}}</td>
                            <td>${{number_format($project->goal)}}</td>
                            <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-warning" data-bs-toggle="modal" data-bs-target="#editProject{{$project->id}}" title="" data-bs-original-title="Edit info" aria-label="Edit"  data-bs-toggle="modal"><i class="bi bi-pencil-fill"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="editProject{{$project->id}}" tabindex="-1" aria-hidden="true">
                                  <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Edit Project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <div class="col-md-8 col-lg-5 mx-auto">
                                        <div class="mt-5"></div>
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                          <ul></ul>
                                        </div>
                                        <form class="row g-3 update_form" method="post" id="update_form{{$project->id}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{$project->id}}">
                                            <div class="col-12">
                                              <img src="/storage/{{$project->img_url}}"  id="img{{$project->id}}" alt="image" class="d-block mb-3" style="height: 200px;width:200px;" />
                                              <label class="form-label">Image:</label>
                                              <input type="file" class="form-label" name="product_Image" id = "product_Image{{$project->id}}" />
                                            </div>
                                            <div class="col-12">
                                              <label class="form-label">Project Name</label>
                                              <input type="text"  class="form-control" name="project_name" id="project_name" value="{{$project->project_name}}"/>
                                            </div>
                                            <div class="col-12">
                                              <label class="form-label">Amount Raised</label>
                                              <input type="number" class="form-control" name="amount_raised" id="amount_raised" value="{{$project->raised}}"/>
                                            </div>
                                            <div class="col-12">
                                              <label class="form-label">Goal</label>
                                              <input type="number" class="form-control" name="goal" value="{{$project->goal}}"/>
                                            </div>
                                            <div class="col-12">
                                              <label class="form-label">Details</label>
                                              <textarea id="editor" name="details">{{$project->details}}</textarea>
                                            </div>
                                            
                                            <div class="col-12">
                                              <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
                                  </div>
                                </div>
                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" onclick="deleteProject({{$project->id}})"><i class="bi bi-trash-fill"></i></a>
                              </div>
                            </td>
                          </tr>


                          
                            <script>
                                $(function(){
                                    $('#product_Image{{$project->id}}').change(function(){
                                        var input = this;
                                        var url = $(this).val();
                                        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                                        if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) 
                                        {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                            $('#img{{$project->id}}').attr('src', e.target.result);
                                            }
                                        reader.readAsDataURL(input.files[0]);
                                        }
                                    });

                                });

                                $(document).ready(function (e) {
                                    $("#update_form{{$project->id}}").on('submit',(function(e) {
                                        e.preventDefault();
                                    swal({
                                            title: 'Are you sure?',
                                            text: 'You will not be able to recover the record',
                                            type: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, update it!',
                                            cancelButtonText: 'No, cancel',
                                            confirmButtonClass: 'confirm-class',
                                            cancelButtonClass: 'cancel-class',

                                        })
                                        .then((isConfirm) => {
                                            if (isConfirm.value) {
                                                $.ajax({
                                                    type: 'POST',
                                                    url: "{{Route('update_project')}}",
                                                    data: new FormData(this),
                                                    contentType: false,
                                                    cache: false,
                                                    processData:false,
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
                                                            swal({
                                                              title: 'Error!',
                                                              text: "",
                                                              type: 'warning',
                                                              showConfirmButton:false,
                                                              timer: 800,
                                                          });
                                                      $(".print-error-msg").find("ul").html('');
                                                      $(".print-error-msg").css('display','block');
                                                      $.each( response.error, function( key, value ) {
                                                          $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                                            });
                                                        }

                                                    },
                                                    error: function(xhr, status, error) {
                                                        alert(xhr.responseText);
                                                        // stopLoader('body');
                                                    }
                                                });
                                            }
                                        });

                                }));
                            });
                            </script>
                          @endforeach
                         @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
           </div><!--end row-->
  
  


           <div class="card-body offset-md-4 offset-2">
                    {{ $projects->links() }}
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
                    url: '{{Route("delete_project")}}',
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
