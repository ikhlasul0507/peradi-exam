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
                      <a href="<?= base_url() ?>questions" class="btn btn-danger btn-sm ms-auto" id="btn-back" >Back</a>
                      <button class="btn btn-dark btn-sm ms-auto" id="btn-create-list" >Update & Back To List</button>
                      <button class="btn btn-primary btn-sm ms-auto" id="btn-create-another">Update Another</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Course Category</label>
                          <select class="form-control" id="id_course">
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Bobot</label>
                          <input class="form-control" type="number" id="bobot" placeholder="Bobot..." min="1" max="50">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Answer</label>
                          <select class="form-control" id="answer">
                            <option value="" selected disabled>--Choose--</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Question Description</label>
                          <div id="questions-description" class="container"></div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Answer (A)</label>
                          <div id="course-answer-a" class="container"></div> 
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Answer (B)</label>
                          <div id="course-answer-b" class="container"></div> 
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Answer (C)</label>
                          <div id="course-answer-c" class="container"></div> 
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Answer (D)</label>
                          <div id="course-answer-d" class="container"></div> 
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Answer (E)</label>
                          <div id="course-answer-e" class="container"></div> 
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Discussion</label>
                          <div id="course-discussion" class="container"></div> 
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

      $(document).ready(function () {
        showListData();
      });

      document.getElementById('btn-create-list').addEventListener("click", function() {
        createToList();
      });
      document.getElementById('btn-create-another').addEventListener("click", function() {
        createAnother();
      });
      $(document).ready(function() { 
          $("#questions-description").summernote({ 
              placeholder: "Write your description course here", 
              height: 100, 
          }); 
          $("#course-answer-a").summernote({ 
              placeholder: "Write your description course here", 
              height: 100, 
          });
          $("#course-answer-b").summernote({ 
              placeholder: "Write your description course here", 
              height: 100, 
          });
          $("#course-answer-c").summernote({ 
              placeholder: "Write your description course here", 
              height: 100, 
          });
          $("#course-answer-d").summernote({ 
              placeholder: "Write your description course here", 
              height: 100, 
          });
          $("#course-answer-e").summernote({ 
              placeholder: "Write your description course here", 
              height: 100, 
          });
          $("#course-discussion").summernote({ 
              placeholder: "Write your description course here", 
              height: 100, 
          });
      }); 

      showListDataCourse = (id) => {
        $.ajax({    
              type: "GET",
              url: "<?php echo base_url();?>App/list_data_m_course",             
              dataType: "JSON",             
              success: function(data){  
                writeListOptionCourse(data, id);     
              }
          });
      }

      showListData = () => {
        $.ajax({    
              type: "GET",
              url: "<?php echo base_url();?>App/list_data_m_questions_search_by_id",             
              dataType: "JSON",
              data : {
                val : JSON.stringify(getIDFromURL())
              },             
              success: function(data){
                setValueToForm(data[0]);
                console.log(data);
              }
          });
      }

      setValueToForm = (data) => {
          $('#bobot').val(data.bobot);
          $("#course-answer-a").summernote('code',data.option_a);
          $("#course-answer-b").summernote('code',data.option_b);
          $("#course-answer-c").summernote('code',data.option_c);
          $("#course-answer-d").summernote('code',data.option_d);
          $("#course-answer-e").summernote('code',data.option_e);
          $("#questions-description").summernote('code',data.question_description);
          $("#course-discussion").summernote('code',data.discussion);
          $("#answer").val(data.answer);
          showListDataCourse(data.id_course);
      }

      getIDFromURL = () => {
          var arrUrl = window.location.href.split("/");
          return arrUrl[6].trim();
      }

      writeListOptionCourse = (data, id) => {
          var result = "<option value=''  disabled>--Choose--</option>";
          if(data.length > 0) {
              for (var i = 0; i < data.length; i++) {
                if(data[i].id_course == id){
                    result += "<option selected value='"+data[i].id_course+"'>"+data[i].course_name+"</option>";
                }else{
                    result += "<option value='"+data[i].id_course+"'>"+data[i].course_name+"</option>";
                }
              }
          }
          document.getElementById("id_course").innerHTML = result;
      }

      validateAdd = () => {
        let id_course = document.getElementById("id_course").value;
        let bobot = document.getElementById("bobot").value;
        let answer = document.getElementById("answer").value;

        let questionsdescription = $('#questions-description').summernote('isEmpty');
        let courseanswer_a = $('#course-answer-a').summernote('isEmpty');
        let courseanswer_b = $('#course-answer-b').summernote('isEmpty');
        let courseanswer_c = $('#course-answer-c').summernote('isEmpty');
        let courseanswer_d = $('#course-answer-d').summernote('isEmpty');
        let courseanswer_e = $('#course-answer-e').summernote('isEmpty');
        let coursediscussion = $('#course-discussion').summernote('isEmpty');

        console.log(questionsdescription);
        let result = "";
        if (id_course === "" || bobot === "" || answer === "" || questionsdescription || courseanswer_a  || courseanswer_b  || courseanswer_c  || courseanswer_d  || courseanswer_e || coursediscussion){
          alertShow("Please input all data","error");
        }else{
            let data = {
              id_course : id_course,
              id_users : '<?= $this->session->userdata('id_users');?>',
              question_description : $('#questions-description').summernote('code'),
              bobot : bobot,
              option_a : $('#course-answer-a').summernote('code'),
              option_b : $('#course-answer-b').summernote('code'),
              option_c : $('#course-answer-c').summernote('code'),
              option_d : $('#course-answer-d').summernote('code'),
              option_e : $('#course-answer-e').summernote('code'),
              discussion : $('#course-discussion').summernote('code'),
              answer : answer
            }
            result = data;
        }
        return result;
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
          url: "<?php echo base_url('App/sendDataEditQuestionsToDB')?>",
          data:  {
            value : JSON.stringify(dataSend),
            id : getIDFromURL(),
          },
          dataType: 'json',
          success: function(data){
            if(data){
              alertShow("Congratulation data has been edited", "success",condition)
            }
          }             
        });
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
                    location.href = "<?= base_url() ?>questions";
                }else if(url == "createAnother"){
                    location.reload();
                }
              })
          }
      }

  </script>