  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $breadcum; ?></li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0"><?= $breadcum; ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" id="search-m-course" placeholder="Type here course name...">
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xl-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body pt-0 p-1 text-center">
                      <h6 class="text-center mb-0">Course Ready</h6>
                      <span class="text-xs">Real time</span>
                      <hr class="horizontal dark my-1">
                      <h5 class="mb-0" id="course-ready">300</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0"><?= $breadcum; ?></h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?= base_url() ?>course/add"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Course</a>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-4 p-3">
                  <ul class="list-group" id="data-list">

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script type="text/javascript">
    $(document).ready(function () {
      showListData();
    });

    $("#search-m-course").keyup(function(){
        showListDataSearch($("#search-m-course").val());
    });

    showListDataSearch = (key) => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/list_data_m_course_search",
            data : {
              val : JSON.stringify(key)
            },             
            dataType: "JSON",             
            success: function(data){  
              console.log(data); 
              writeListToHTML(data);     
            }
        });
    }

    showListData = () => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/list_data_m_course",             
            dataType: "JSON",             
            success: function(data){  
              writeListToHTML(data);     
            }
        });
    }

    deleteData = (id) => {
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
                icon: "success",
                title: 'Deleted!',
                text: "Your file has been deleted.",
                showConfirmButton: false,
                timer: 1500
              }).then((result) => {
                  deleteDataToDB(id) 
              })
          }
        });
    }

    deleteDataToDB = (key) => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/delete_data_m_course",
            data : {
              val : JSON.stringify(key)
            },             
            dataType: "JSON",             
            success: function(data){  
              location.reload();    
            }
        });
    }

    writeListToHTML = (data) => {
        var result = "";
        if(data.length > 0) {
          for (var i = 0; i < data.length; i++) {
            let status = data[i].course_status === "A" ? "Aktif" : "Tidak Aktif";
            let bgstatus = data[i].course_status === "A" ? "bg-success" : "bg-danger";
            let type = data[i].course_type === "C" ? "Bimbel" : "Tryout";
            result += '<li class="list-group-item border-0 d-flex p-1 mb-1 bg-gray-100 border-radius-lg">' +
                      '<div class="d-flex flex-column">' +
                        '<h6 class="mb-1 text-sm">'+ (i+1) +'. '+ data[i].course_name+'</h6>' +
                        '<div class="d-flex px-2 py-1">' +
                          '<div>' +
                            '<a href="<?= base_url() ?>assets/app/images/course/'+data[i].course_banner+'" target="blank"><img src="<?= base_url() ?>assets/app/images/course/'+data[i].course_banner+'" class="avatar avatar-sm me-5" alt="user1"></a>' +
                          '</div>' +
                          '<div class="d-flex flex-column justify-content-center">' +
                            '<span class="mb-2 text-xs">Status: <span class="text-dark '+bgstatus+' ms-sm-2 font-weight-bold">'+status+'</span></span>' +
                            '<span class="mb-2 text-xs">Type: <span class="text-dark ms-sm-2 font-weight-bold">'+type+'- '+ data[i].course_duration+' Minutes</span></span>' +
                            '<span class="text-xs">'+data[i].course_description+'</span>' +
                          '</div>' +
                        '</div>' +
                      '</div>' +
                      '<div class="ms-auto text-end">' +
                        '<a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="deleteData('+data[i].id_course+')"><i class="far fa-trash-alt me-2"></i>Delete</a>' +
                        '<a class="btn btn-link text-dark px-3 mb-0" href="<?= base_url() ?>course/edit/'+data[i].id_course+'"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>' +
                      '</div>' +
                    '</li>';
          }
        }
        document.getElementById('course-ready').innerHTML = data.length;
        document.getElementById('data-list').innerHTML = result;
    }
  </script>