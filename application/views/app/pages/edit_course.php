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
                      <button class="btn btn-dark btn-sm ms-auto" id="btn-create-list" >Update & Back To List</button>
                      <button class="btn btn-primary btn-sm ms-auto" id="btn-create-another">Update Another</button>
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
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Type</label>
                          <select class="form-control" id="course-type">
                            <option value="C" selected="">Bimbel</option>
                            <option value="T">Tryout</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Nominal</label>
                          <input class="form-control" type="number" maxlength="30" placeholder="Course Nominal..." id="course-nominal">
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
                          <label for="example-text-input" class="form-control-label">Course Banner <button id="show-banner">Show</button></label>
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

      var courseBannerName = '';
      var oldPhoto = true;
      document.getElementById('btn-create-list').addEventListener("click", function() {
        createToList();
      });
      document.getElementById('btn-create-another').addEventListener("click", function() {
        createAnother();
      });
      document.getElementById('show-banner').addEventListener("click", function() {
        Swal.fire({
          imageUrl: "<?= base_url() ?>/assets/app/images/course/"+courseBannerName,
          imageAlt: "A tall image"
        });
      });
      
      $(document).ready(function() { 

          showListData();

          $("#course-description").summernote({ 
              placeholder: "Write your description course here", 
              height: 200, 
          }); 
      }); 

      showListData = () => {
        $.ajax({    
              type: "GET",
              url: "<?php echo base_url();?>App/list_data_m_course_search_by_id",             
              dataType: "JSON",
              data : {
                val : JSON.stringify(getIDFromURL())
              },             
              success: function(data){
                setValueToForm(data);
              }
          });
      }

      setValueToForm = (data) => {
          $('#course-name').val(data.course_name);
          $('#course-status').val(data.course_status);
          $('#course-type').val(data.course_type);
          $('#course-nominal').val(data.course_nominal);
          $('#course-duration').val(data.course_duration);
          $("#course-description").summernote('code',data.course_description);
          courseBannerName = data.course_banner;
      }

      getIDFromURL = () => {
          var arrUrl = window.location.href.split("/");
          return arrUrl[6].trim();
      }

      validateAdd = () => {
        let coursename = document.getElementById("course-name").value;
        let coursestatus = document.getElementById("course-status").value;
        let coursetype = document.getElementById("course-type").value;
        let coursenominal = document.getElementById("course-nominal").value;
        let courseduration = document.getElementById("course-duration").value;
        let coursebanner = document.getElementById("course-banner").value;
        let coursedescription = $('#course-description').summernote('isEmpty');
        let result = "";
        if (coursename === "" || coursestatus === "" || coursenominal === "" || coursedescription || coursetype === "" || courseduration === ""){
          alertShow("Please input all data","error");
        }else{
          if (coursebanner !== ""){
            oldPhoto = false;
            var checkUpload = prosesUpload();
          }else{
            oldPhoto = true;
            var checkUpload = courseBannerName;
          }
          if(checkUpload !== ""){
            let data = {
              id_users : '<?= $this->session->userdata('id_users');?>',
              uuid : create_UUID(),
              course_name : coursename,
              course_status : coursestatus,
              course_type : coursetype,
              course_nominal : coursenominal,
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
          url: "<?php echo base_url('App/sendDataEditCourseToDB')?>",
          data:  {
            value : JSON.stringify(dataSend),
            id : getIDFromURL(),
            oldPhoto : oldPhoto
          },
          dataType: 'json',
          success: function(data){
            if(data){
              alertShow("Congratulation data has been edited", "success",condition)
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
              form_data.append('<?php echo $this->security->get_csrf_token_name(); ?>', '<?php echo $this->security->get_csrf_hash(); ?>');
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