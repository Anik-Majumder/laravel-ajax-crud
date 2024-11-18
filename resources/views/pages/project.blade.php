<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">--}}
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Project components List</h4>
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-database-add"></i> ADD
                    </button>
                </div>
                <div class="card-body">
                    <table class="table" id="projectTable">
                        <thead>
                        <tr>

                            <th scope="col">SL</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">PROJECT TITLE</th>
                            <th scope="col">BUTTON TEXT</th>
                            <th scope="col">BUTTON LINK</th>
                            <th scope="col">ACTION</th>
                          
                        </tr>
                        </thead>
                </div>
            </div>
        </div>

<!-- Add Modal -->

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-project">
                        <h5 class="modal-title" id="exampleModalLabel">Add Projects</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form name="form" id="projectAddForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg">
                                    <label>Image</label>
                                    <input type="file" name="thumb_image" id="name" class="form-control">
                                </div>
                                
                                <div class="col-lg">
                                    <label>Project Title</label>
                                    <input type="text" name="project_title" id="name" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <label>Button Link</label>
                                    <input type="text" name="btn_link"  class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <label>Button Text</label>
                                    <input type="text" name="btn_text"  class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            
                        </form>
                    </div>
                   
                </div>
            </div>
        
</div>

<!-- edit modal -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit projects</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="projectFormUpdate" enctype="multipart/form-data" >
                    @csrf
                    @method("PUT")
                    <input type="text" id="edit_id" name="edit_id">
                    <div class="row">
                        <div class="col-lg">
                            <label>Image</label>
                            <input type="file" name="thumb_image"  class="form-control">

                            <img src="" alt="" width="40px" height="40px" id="thumb_image">
                            
                        </div>
                        <div class="col-lg">
                            <label>Project Title</label>
                            <input type="text" name="project_title" id="project_title" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <label>Button Link</label>
                            <input type="text" name="btn_link" id="btn_link" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <label>Button Text</label>
                            <input type="text" name="btn_text" id="btn_text"  class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script>
    
//Render Datatables

    let projectTable = $('#projectTable').DataTable({
        processing:true,
        serverSide:true,
        ajax: "{{ route('get-project-data') }}",

        columns:[
            {
                data:'id'
            },
            {
                data:'thumb_image'
            },
            {
                data:'project_title'
            },
            {
                data:'btn_text'
            },
            {
                data:'btn_link'
            },
            {
                data:'action',
                name:'Action',
                orderable: false,
                searchable: false
            },
        ]
    });

    
// add project

$('#projectAddForm').submit(function(e)
{
    e.preventDefault();


    $.ajax(
    {
        url:"{{ route('project.store') }}",
        type:'POST',
        data:new FormData(this),
        processData:false,
        contentType:false,
        success:function(res)
        {
            console.log('success');

            $('#projectAddForm')[0].reset();
            $('#addModal').modal('hide');
            projectTable.ajax.reload();
            
        },
        error:function(err)
        {
            console.log(err);
        }
    }
)

    
})

// read project

$(document).on('click','.edit-btn', function()
{
    let id = $(this).data('id');
    console.log(id);
    
    $.ajax(
    {
        url:"{{ url('projects') }}/" + id + "/edit",
        type:'GET',
        data:{
            id: id
        },
        processData:false,
        contentType:false,
        success:function(res)
        {
            $('#edit_id').val(res.data.id)
            $('#thumb_image').attr('src',res.data.thumb_image)
            $('#project_title').val(res.data.project_title)
            $('#btn_link').val(res.data.btn_link)
            $('#btn_text').val(res.data.btn_text)
        },
        error:function(err)
        {
            console.log(err);
        }
    })
})

// update project

$('#projectFormUpdate').submit(function(e)
{
    e.preventDefault();
    let id = $('#edit_id').val();
    console.log(id);
    

    $.ajax(
    {
        url:"{{ url('projects') }}/" + id,
        type:'POST',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:new FormData(this),
        processData:false,
        contentType:false,
        success:function(res)
        {
            console.log('success');

            $('#projectFormUpdate')[0].reset();
            $('#editModal').modal('hide');
            projectTable.ajax.reload();
            
        },
        error:function(err)
        {
            console.log(err);
        }
    }
)

    
})

// Delete header

$(document).on('click', '#deleteProjectBtn', function () 
{
                let id = $(this).data('id');
                console.log(id);

                $.ajax({
                    
                    url:"{{ url('projects') }}/" + id,
                    type: 'DELETE',
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (res) {
                    
                        projectTable.ajax.reload();
                        console.log("success");
                        
                    },
                    eror:function (err) {
                        console.log(err);
                    }
                })

})



   
    
    
</script>

</body>
</html>