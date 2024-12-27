  <main class="main-content position-relative border-radius-lg " id="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-0 px-3">
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
              
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-2 border border-radius-md" id="bg-timer">
                              <div class="ml-5 d-flex align-items-center" >
                                <h2 id="timer">00:00:00</h2>
                              </div>
                            </div>
                            <div class="col-md-10 border border-radius-md">
                              <div class="h-100">
                                <h5 class="mb-1" id="course-name">
                                  Paket Name
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                  <small id="labelProgress">Progress : 0%</small>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="valueProgress" style="width: 0%;"></div>
                                    </div>
                                  </div>
                                </p>
                              </div>
                            </div>
                            <div class="row">
                                <div class="tab-content" id="data-list-questions">
                                  <div class="tab-pane fade show active" id="question-1" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="col-md-12 mt-4">
                                        <div class="card h-100 mb-4">
                                          <div class="card-header border pb-0 px-3">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <h6 class="mb-0"><p>Seseorang yang bertugas melakukan pengelolaan yang berasal dari tindak pidana umum dan pidana khusus dikejaksaan disebut dengan…</p></h6>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card-body pt-4 p-3">
                                            <ul class="list-group">
                                              <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg" onclick="alert('question-1-a')" style="cursor: pointer;">
                                                <div class="d-flex align-items-center">
                                                  <p><button id="question-1-a" class="btn btn-icon-only btn-rounded btn-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">A</button></p>
                                                  <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm"><p>Seksi Pengelolaan barang barang tindak pidana umum dan pidana khusus dikejaksaan disebut dengan</p></h6>
                                                  </div>
                                                </div>
                                              </li>
                                              <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg" onclick="alert('question-1-a')" style="cursor: pointer;">
                                                <div class="d-flex align-items-center">
                                                  <p><button id="question-1-a" class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">B</button></p>
                                                  <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm"><p>Seksi Pengelolaan barang barang tindak pidana umum dan pidana khusus dikejaksaan disebut dengan</p></h6>
                                                  </div>
                                                </div>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <ul class="nav nav-pills nav-fill p-1">
                                  <li class="nav-item border">
                                    <button class="nav-link mb-0 px-0 py-1  d-flex align-items-center justify-content-center " id="previousQuestion">
                                      <span class="ms-2">Previous</span>
                                    </button>
                                  </li>
                                  <li class="nav-item border">
                                    <a class="nav-link mb-0 px-0 py-1 d-flex bg-success align-items-center justify-content-center " aria-selected="false" >
                                      <i class="ni ni-app"></i>
                                      <span class="ms-2" id="question-now">28</span>
                                    </a>
                                  </li>
                                  <li class="nav-item border">
                                    <button class="nav-link mb-0 px-0 py-1  d-flex align-items-center justify-content-center " id="nextQuestion">
                                      <span class="ms-2">Next</span>
                                    </button>
                                  </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-lg-12 col-md-12 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                            <div class="nav-wrapper position-relative end-0" id="data-list-number">
                              <ul class="nav nav-pills nav-fill p-1" role="tablist1">
                                <li class="nav-item border">
                                  <a class="nav-link mb-0 px-0 py-1 active d-flex bg-success align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true" data-bs-target="#question-1">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">1</span>
                                  </a>
                                </li>
                                <li class="nav-item border">
                                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false" data-bs-target="#question-2">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">2</span>
                                  </a>
                                </li>
                                <li class="nav-item border">
                                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false" data-bs-target="#question-3">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">3</span>
                                  </a>
                                </li>
                            
                              </ul>
                            </div>
                            <ul class="nav nav-pills nav-fill p-1">
                                  <li class="nav-item border">
                                    <button class="nav-link mb-0 px-0 py-1 bg-warning  d-flex align-items-center justify-content-center " id="submitQuestions">
                                      <span class="ms-2">Submit</span>
                                    </button>
                                  </li>
                              </ul>
                          </div>
                        </div>
                      </div>
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

    $(document).ready(function() {
        var duration = 0;
        var detik = 0;
        var menit = 0;
        var jam = 0;

        showListData().then(()=>{
            duration = localStorage.getItem("question-duration");
            
        }).then(()=>{
            menit = duration % 60;
            jam = Math.floor(duration / 60);
        });

        setTimeDateNow();
        // var duration = localStorage.getItem("question-duration");
        // var detik = 0;
        // var menit = duration % 60;
        // var jam = Math.floor(duration / 60);


        setInterval(function() {
          countDownTimer();
        }, 1000);

        countDownTimer = () => {
          if (detik < 1) {
            detik = 59;
            menit--;
              if (menit < 0) {
                menit = 59;
                jam--;  
                if (jam < 0) {
                  clearInterval();
                  alert("Mohon maaf, waktu anda habis");
                  submitAllAnswer();
                }
              }
          }else{
            detik--
          }
          $('#timer').html(
            jam + ':' + menit + ':' + detik
          );
        }
      })

      document.getElementById("nextQuestion").addEventListener("click", function() {
          nextData();
      });
      document.getElementById("previousQuestion").addEventListener("click", function() {
          previousData();
      });
      document.getElementById("submitQuestions").addEventListener("click", function() {
          confirmDo();
      });

      document.getElementById("sidenav-main").style.display = 'none';
      document.getElementById("main-content").style.marginLeft  = '0px';
      confirmDo = () => {
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
               let timerInterval;
                Swal.fire({
                  title: "Auto close alert!",
                  html: "I will close in <b></b> milliseconds.",
                  timer: 1000,
                  timerProgressBar: true,
                  didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                      timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                  },
                  willClose: () => {
                    clearInterval(timerInterval);
                  }
                }).then((result) => {
                  if (result.dismiss === Swal.DismissReason.timer) {
                    submitAllAnswer();
                  }
                });
            }
          });
      }

      setTimeDateNow = () => {
        const dt = new Date();
        const padL = (nr, len = 2, chr = `0`) => `${nr}`.padStart(2, chr);
        return `${
            dt.getFullYear()}-${
            padL(dt.getMonth()+1)}-${
            padL(dt.getDate())} ${
            padL(dt.getHours())}:${
            padL(dt.getMinutes())}:${
            padL(dt.getSeconds())}`
      }

      getIDFromURL = () => {
          var arrUrl = '<?= $this->uri->segment(3); ?>';
          return arrUrl.trim();
      }

      showListData = () => new Promise(function(myResolve, myReject) {
           $.ajax({    
              type: "GET",
              url: "<?php echo base_url();?>App/list_data_do_tryout",             
              dataType: "JSON",
              data : {
                val : JSON.stringify(getIDFromURL())
              },             
              success: function(data){
                  var duration = parseInt(data[0].course_duration);
                  localStorage.setItem('question-duration', duration);
                  myResolve(data)
                  writeListToHTML(data);     
              }
          });
      })

      sendDataToDB = (dataSend) => {
          $.ajax({
          type: "POST", 
          url: "<?php echo base_url('App/sendDataAnswers')?>",
          data:  {
            value : JSON.stringify(dataSend)
          },
          dataType: 'json',
          success: function(data){
            if(data){
                location.href = "<?= base_url() ?>tryout/list/result/"+dataSend.uuid_course;
            }
          }             
        });
      }

      previousData = () => {
          var countNow = localStorage.getItem("question-number-now");
          $("#nextQuestion").prop("disabled", false);
          checkData((parseInt(countNow) - 1))
      }

      nextData = () => {
        var countNow = localStorage.getItem("question-number-now");
        $("#previousQuestion").prop("disabled", false);
        checkData((parseInt(countNow) + 1))
      }

      checkData = (id) => {
        localStorage.setItem('question-number-now', id);
        var objdata = JSON.parse(localStorage.getItem("question-temporary"));
        var numberSizeQuestions = Object.keys(objdata).length;
        document.getElementById('question-now').innerHTML = id;
        for (const key in objdata) {
            var arrID = key.split("-");
            if(arrID[2] == id) {
                $("#question-"+arrID[2]).addClass("show active")
                $("#number-"+arrID[2]).addClass("active bg-success")
                $("#number-"+arrID[2]).removeClass("bg-light")
            }else{
                $("#question-"+arrID[2]).removeClass("show active")
                $("#question-"+arrID[2]).removeClass("active bg-success")
                if (objdata[`${arrID[0]}-answer-${arrID[2]}`] == null){
                  $("#number-"+arrID[2]).addClass("bg-light")
                }
            }
        }
        var countNow = localStorage.getItem("question-number-now");
        if(countNow == numberSizeQuestions) {
          $("#nextQuestion").prop("disabled", true);
          $("#previousQuestion").prop("disabled", false);
        }else{
          $("#nextQuestion").prop("disabled", false);
        }
        if(countNow == 1) {
          $("#previousQuestion").prop("disabled", true);
        }else{
          $("#previousQuestion").prop("disabled", false);
        }
      }

      submitAnswer = (id) => {
        var tempData = JSON.parse(localStorage.getItem("question-temporary"));
        var arrID = id.split("-");
        tempData = {...tempData, [`${arrID[0]}-answer-${arrID[2]}`] : arrID[3]}
        $("#number-"+arrID[2]).removeClass("bg-light");
        $("#number-"+arrID[2]).addClass("bg-warning");
        localStorage.setItem("question-temporary", JSON.stringify(tempData)); 
        calculatePersen(tempData);
        checkOptionsAnswer(arrID);
        if((parseInt(arrID[2])) < Object.keys(tempData).length){
            id = (parseInt(arrID[2]) + 1)
        }else{
            id = (parseInt(arrID[2]))
        }
        // checkData(id);
      }

      submitAllAnswer = () => {

        var timeLocalStorage = JSON.parse(localStorage.getItem("question-timer-date"));
        timeLocalStorage = {...timeLocalStorage, [`end`] : setTimeDateNow()}
        localStorage.setItem("question-timer-date", JSON.stringify(timeLocalStorage)); 
        var timeTimer = JSON.parse(localStorage.getItem("question-timer-date"));
        var data = {
            id_users : '<?= $this->session->userdata('id_users');?>',
            uuid_list_answers : create_UUID(),
            id_course : timeTimer.id_course,
            uuid_course : getIDFromURL(),
            list_answers : calculateAnwersLocalStrorage(),
            start_time : timeTimer.start,
            end_time : timeTimer.end
        }
        sendDataToDB(data);
      }

      calculateAnwersLocalStrorage = () =>{
          var tempData = JSON.parse(localStorage.getItem("question-temporary"));
          var result = {}
          for (const key in tempData) {
              var idKey = key.split("-");
              Object.assign(result, { [`${idKey[0]}-${idKey[1]}`] : tempData[key]})            
          }
          return result;
      }

      checkOptionsAnswer = (arrID) => {
        var arrOptions = ['A','B','C','D','E'];
        var tempData = JSON.parse(localStorage.getItem("question-temporary"));
        var valNow = tempData[[`${arrID[0]}-answer-${arrID[2]}`]];
        for (var i = 0; i < arrOptions.length; i++) {
             var idBtn = arrID[0]+'-answer-'+arrID[2]+'-'+arrOptions[i];
             $("#btn-"+idBtn).removeClass("bg-warning");
             if (arrOptions[i] == arrID[3]) {
                if (tempData[[`${arrID[0]}-answer-${arrID[2]}`]] != null){
                    $("#btn-"+idBtn).addClass("bg-warning");
                }
             }
        }
      }

      calculatePersen = (tempData) => {
          var total = Object.keys(tempData).length;
          var valQs = 0;
          for (const key in tempData) {
              if (tempData[key] != null){
                  valQs++;
              }
          }
          document.getElementById("labelProgress").innerHTML = "Progress : " +Math.floor(((valQs/total) * 100))+" %";
          document.getElementById("valueProgress").style.width = `${Math.floor(((valQs/total) * 100))}%`;
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

      writeListToHTML = (data) => {
          var result = "";
          var resultQuestion = "";
          var id_course = "";
          var coursename = "";
          var resultLocalStorage = {};
          var timeLocalStorage = {
            start : setTimeDateNow(),
            end : null,
            id_course : id_course
          }
          if(data.length > 0) {
            var lengthData = data.length;
            var num = 5;
            var count = 1;
            var temp = '<ul class="nav nav-pills nav-fill p-1" role="tablist">';
            var valTemp = "";
            var endTemp = '</ul>';
            for (var i = 1; i <= data.length; i++) {
              timeLocalStorage.id_course = data[i-1].id_course;
              coursename = data[i-1].course_name;
              Object.assign(resultLocalStorage, { [`${data[i-1].id_questions}-answer-${i}`] : null});
              if (i < 10) {
                  var angka = '0'+i;
              }else{
                  var angka = i;
              }
              if(i >= count && i <= num) {
                  if (i == 1){
                     document.getElementById('question-now').innerHTML = i;
                     $("#previousQuestion").prop("disabled", true);
                     localStorage.setItem('question-number-now', i);
                     var active = "active bg-success";
                  }else{
                     var active = "bg-light";
                  }
                  valTemp += '<li class="nav-item border">'+
                            '<a class="nav-link mb-0 px-0 py-1 d-flex '+active+' align-items-center justify-content-center " id="number-'+i+'"  data-bs-toggle="tab" href="javascript:;" onclick="checkData('+i+')" role="tab" aria-selected="false" >'+
                              '<i class="ni ni-app"></i>'+
                              '<span class="ms-2">'+angka+'</span>'+
                            '</a>'+
                          '</li>';
              }
              if(i == num) {
                  result += temp + valTemp + endTemp;
                  count = count + 5;
                  num = num + 5;
                  valTemp = "";
              }else if (i == lengthData){
                  result += temp + valTemp + endTemp;
              }

              if (i == 1){
                 var active = "show active";
              }else{
                 var active = "";
              }
              resultQuestion += '<div class="tab-pane fade '+active+'" id="question-'+i+'" role="tabpanel" aria-labelledby="pills-home-tab">'+
                                  '<div class="col-md-12 mt-4">'+
                                      '<div class="card h-100 mb-4">'+
                                        '<div class="card-header border pb-0 px-3">'+
                                          '<div class="row">'+
                                            '<div class="col-md-12">'+
                                              '<h6 class="mb-0">'+ data[i-1].question_description+'</h6>'+
                                            '</div>'+
                                          '</div>'+
                                        '</div>'+
                                        '<div class="card-body pt-4 p-3">'+
                                          '<ul class="list-group">'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg" onclick="submitAnswer(\''+data[i-1].id_questions+'-answer-'+i+'-A\')" style="cursor: pointer;">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-A" class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">A</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_a+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg" onclick="submitAnswer(\''+data[i-1].id_questions+'-answer-'+i+'-B\')"  style="cursor: pointer;">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-B" class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">B</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_b+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg" onclick="submitAnswer(\''+data[i-1].id_questions+'-answer-'+i+'-C\')"  style="cursor: pointer; ">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-C" class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">C</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_c+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg" onclick="submitAnswer(\''+data[i-1].id_questions+'-answer-'+i+'-D\')"  style="cursor: pointer;">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-D" class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">D</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_d+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg" onclick="submitAnswer(\''+data[i-1].id_questions+'-answer-'+i+'-E\')"  style="cursor: pointer;">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-E" class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">E</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_e+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                          '</ul>'+
                                        '</div>'+
                                      '</div>'+
                                    '</div>'+
                                '</div>';
            }
          }
          localStorage.setItem("question-temporary", JSON.stringify(resultLocalStorage)); 
          localStorage.setItem("question-timer-date", JSON.stringify(timeLocalStorage)); 
          document.getElementById('data-list-number').innerHTML = result;
          document.getElementById("course-name").innerHTML = coursename;
          document.getElementById('data-list-questions').innerHTML = resultQuestion;
      }
  </script>