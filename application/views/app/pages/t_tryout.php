  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $breadcum; ?></li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0" id="count-list"><?= $breadcum; ?> - 200</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" id="search-tryout" placeholder="Type here tryout...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>assets/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>assets/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-7">
      <div class="row" id="data-list">

        <div class="col-md-3 mb-7">
          <div class="card card-profile">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a>
                    <img src="<?= base_url() ?>assets/assets/img/team-2.jpg" style="width: 100px" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">22</span>
                      <span class="text-sm opacity-8">Total questions</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">10</span>
                      <span class="text-sm opacity-8">Duration</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <h5>
                 PAKET TRY OUT 5
                </h5>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <ul class="nav nav-pills nav-fill p-1" role="tablist1">
                <li class="nav-item border">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true" data-bs-target="#question-1">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">Result</span>
                  </a>
                </li>
                <li class="nav-item border">
                  <a class="nav-link mb-0 px-0 py-1 d-flex  align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false" data-bs-target="#question-2">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">Lets do it</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <script type="text/javascript">

    $(document).ready(function () {
      showListDataCourse(getLISTACCESSTO(), getISADMIN());
    });
    $("#search-tryout").keyup(function(){
        showListDataSearch($("#search-tryout").val(), getISADMIN(), getLISTACCESSTO());
    });

    getISADMIN = () =>  {
      var isAdmin = '<?= $this->session->userdata('isAdmin');?>';
      if(isAdmin === 'Y'){
          return true;
      }else{
          return false;
      }
    }

    getLISTACCESSTO = () =>{
       const currentDate = new Date();
       var result = [];
       var listAccessTO = '<?= $this->session->userdata('list_packages');?>';
       var accessTO = JSON.parse(listAccessTO).tryout;
       if(accessTO.length > 0){
            for (var i = accessTO.length - 1; i >= 0; i--) {
                if(currentDate.getTime() > accessTO[i].expired_date){
                    result.push(accessTO[i].id);                  
                }
            }
       }
       return result;
    }
    showListDataCourse = (listAccessTO, isAdmin) => {
        if(isAdmin){
            $.ajax({    
                  type: "GET",
                  url: "<?php echo base_url();?>App/list_data_my_tryout",             
                  dataType: "JSON",             
                  success: function(data){  
                    writeListToHTML(data);     
                  }
              });
        }else{
            $.ajax({    
                  type: "GET",
                  url: "<?php echo base_url();?>App/list_data_my_tryout_by_list_id",   
                  data : {
                    val : JSON.stringify(listAccessTO)
                  },          
                  dataType: "JSON",             
                  success: function(data){  
                    writeListToHTML(data);     
                  }
              });
        }
    }

    showListDataSearch = (key, isAdmin, listAccessTO) => {
        if(isAdmin){
            $.ajax({    
                  type: "GET",
                  url: "<?php echo base_url();?>App/list_data_m_course_search_to",
                  data : {
                    val : JSON.stringify(key)
                  },             
                  dataType: "JSON",             
                  success: function(data){  
                    writeListToHTML(data);     
                  }
              });
        }else{
            $.ajax({    
                  type: "GET",
                  url: "<?php echo base_url();?>App/list_data_m_course_search_to_like_by_id",
                  data : {
                    val : {
                      value :JSON.stringify(key),
                      list_id : JSON.stringify(listAccessTO)
                    }
                   },             
                  dataType: "JSON",             
                  success: function(data){  
                    writeListToHTML(data);     
                  }
              });
        }
    }

    writeListToHTML = (data) => {
        var result = "";
        if(data.length > 0) {
          for (var i = 0; i < data.length; i++) {
            let status = data[i].course_status === "A" ? "Aktif" : "Tidak Aktif";
            let bgstatus = data[i].course_status === "A" ? "bg-success" : "bg-danger";
            let type = data[i].course_type === "C" ? "Bimbel" : "Tryout";
            let checkQues = data[i].total > 0 ? "" : "disabled"; 
            result += '<div class="col-md-3 mb-7">'+
                        '<div class="card card-profile" style="height:280px">'+
                          '<div class="row justify-content-center">'+
                            '<div class="col-4 col-lg-4 order-lg-2">'+
                              '<div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">'+
                                '<a>'+
                                  '<img style="height:100px;widht:100px" src="<?= base_url() ?>assets/app/images/course/'+data[i].course_banner+'" class="rounded-circle img-fluid border border-2 border-white">'+
                                '</a>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                          '<div class="card-body pt-0">'+
                            '<div class="row">'+
                              '<div class="col">'+
                                '<div class="d-flex justify-content-center">'+
                                  '<div class="d-grid text-center">'+
                                    '<span class="text-lg font-weight-bolder">'+ data[i].total+'</span>'+
                                    '<span class="text-sm opacity-8">Total questions</span>'+
                                  '</div>'+
                                  '<div class="d-grid text-center mx-4">'+
                                    '<span class="text-lg font-weight-bolder">'+ data[i].course_duration+'</span>'+
                                    '<span class="text-sm opacity-8">Duration</span>'+
                                  '</div>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                            '<div class="text-center mt-4">'+
                              '<h5>'+ data[i].course_name+'</h5>'+
                            '</div>'+
                          '</div>'+
                          (data[i].total > 0 ?
                          '<div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">'+
                            '<ul class="nav nav-pills nav-fill p-1" role="tablist1">'+
                              '<li class="nav-item border">'+
                                '<a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" onclick="resultDo(\'' + data[i].uuid + '\')" role="tab" aria-selected="true" data-bs-target="#question-1">'+
                                  '<i class="ni ni-app"></i>'+
                                  '<span class="ms-2">Result</span>'+
                                '</a>'+
                              '</li>'+
                              '<li class="nav-item border">'+
                                '<a class="nav-link mb-0 px-0 py-1 d-flex bg-danger  align-items-center justify-content-center "  data-bs-toggle="tab" href="javascript:;" onclick="confirmDo(\'' + data[i].uuid + '\')" role="tab" aria-selected="false" data-bs-target="#question-2">'+
                                  '<i class="ni ni-app"></i>'+
                                  '<span class="ms-2">Lets do it</span>'+
                                '</a>'+
                              '</li>'+
                            '</ul>'+
                          '</div>'
                          :"")+
                        '</div>'+
                      '</div>';
          }
        }
        document.getElementById('count-list').innerHTML = 'List Tryout - ' + data.length;
        document.getElementById('data-list').innerHTML = result;
    }

    confirmDo = (id) => {
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to do it!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, i do!"
        }).then((result) => {
          if (result.isConfirmed) {
             location.href = "<?= base_url() ?>tryout/do/"+id;
          }
        });
    }

    resultDo = (id) => {
        var link = "<?= base_url() ?>tryout/list/result/"+id;
        localStorage.setItem('link2', link);
        location.href = link
    }
  </script>