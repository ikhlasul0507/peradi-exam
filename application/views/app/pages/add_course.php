  <main class="main-content position-relative border-radius-lg ">
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
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
               <div class="col-md-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="align-items-center">
                      <a href="<?= base_url() ?>course" class="btn btn-danger btn-sm ms-auto" id="btn-back" >Back</a>
                      <button class="btn btn-dark btn-sm ms-auto" id="btn-create-list" >Create & Back To List</button>
                      <button class="btn btn-primary btn-sm ms-auto" id="btn-create-another">Create Another</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="text-uppercase text-sm">Course Information</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Name</label>
                          <input class="form-control" type="text" id="course-name" maxlength="250" placeholder="Course Name...">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Status</label>
                          <select class="form-control" id="course-status">
                            <option value="A" selected="">Active</option>
                            <option value="N">No Active</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Type</label>
                          <select class="form-control" id="course-type">
                            <option value="T" selected>Tryout</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Duration (Minutes)</label>
                          <input class="form-control" type="number" maxlength="300" placeholder="Course Duration (Minutes)..." id="course-duration">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Banner</label>
                          <input class="form-control" type="file" id="course-banner" accept=".jpg, .jpeg, .png">
                        </div>
                      </div>
                    </div>
                    <p class="text-uppercase text-sm">Course Description</p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div id="course-description" class="container"></div> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script type="text/javascript">
      // import Swal from 'sweetalert2'
      document.getElementById('btn-create-list').addEventListener("click", function() {
        createToList();
      });
      document.getElementById('btn-create-another').addEventListener("click", function() {
        createAnother();
      });
      $(document).ready(function() { 
          $("#course-description").summernote({ 
              placeholder: "Write your description course here", 
              height: 200, 
          }); 
      }); 

      validateAdd = () => {
        let coursename = document.getElementById("course-name").value;
        let coursestatus = document.getElementById("course-status").value;
        let coursetype = document.getElementById("course-type").value;
        let courseduration = document.getElementById("course-duration").value;
        let coursebanner = document.getElementById("course-banner").value;
        let coursedescription = $('#course-description').summernote('isEmpty');
        let result = "";
        if (coursename === "" || coursestatus === "" || coursebanner === "" || coursedescription || coursetype === "" || courseduration === ""){
          alertShow("Please input all data","error");
        }else{
          var checkUpload = prosesUpload();
          if(checkUpload !== ""){
            let data = {
              id_users : '<?= $this->session->userdata('id_users');?>',
              uuid : create_UUID(),
              course_name : coursename,
              course_status : coursestatus,
              course_type : coursetype,
              course_nominal : 0,
              course_duration : courseduration,
              course_banner : checkUpload,
              course_description : $('#course-description').summernote('code')
            }
            result = data;
          }
        }
        return result;
      }

      create_UUID = () => {
          var dt = new Date().getTime();
          var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
              var r = (dt + Math.random()*16)%16 | 0;
              dt = Math.floor(dt/16);
              return (c=='x' ? r :(r&0x3|0x8)).toString(16);
          });
          return uuid;
      }

      createToList = () => {
        var valid = validateAdd();
        if(valid !== ""){
          sendDataToDB(valid, "createToList")
        }
      }

      createAnother = () => {
        var valid = validateAdd();
        if(valid !== ""){
          sendDataToDB(valid, "createAnother")
        }
      }

      sendDataToDB = (dataSend, condition) => {
          $.ajax({
          type: "POST", 
          url: "<?php echo base_url('App/sendData')?>",
          data:  {
            value : JSON.stringify(dataSend)
          },
          dataType: 'json',
          success: function(data){
            if(data){
              alertShow("Congratulation data has been created", "success",condition)
            }
          }             
        });
      }

      prosesUpload = () => {
          let result = ""
          var coursebanner = $('#course-banner').val();
          if (coursebanner !== ''){
              var file_data = $('#course-banner').prop('files')[0];
              var form_data = new FormData();
              form_data.append('file', file_data);
              $.ajax({
                   url:'<?php echo base_url();?>App/upload_photo',
                   type:"POST",
                   data:form_data,
                   processData:false,
                   contentType:false,
                   cache:false,
                   async:false,
                    success: function(data){
                      if (data.status === 'success') {
                          result =  data.msg
                      }else{
                          alert(data.msg);
                      }
                 }
               });
          }else{
              alert('Please upload banner','error');
          }

          return result;
      }

      function alertShow(text, condition, url = "") {
          if(condition == "error"){
              Toastify({
              text: text,
              className: "info",
              style: {
                background: "linear-gradient(to right, #b34110, #b34110)",
              }
            }).showToast();
          }else{
             Swal.fire({
                icon: "success",
                title: text,
                showConfirmButton: false,
                timer: 1500
              }).then((result) => {
                if(url == "createToList"){
                    location.href = "<?= base_url() ?>course";
                }else if(url == "createAnother"){
                    location.reload();
                }
              })
          }
      }

  </script>