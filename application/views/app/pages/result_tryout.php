  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-0 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" id="link1">List Tryout</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" id="link2">List Result Tryout</a></li>
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
                <i class="fa fa-user me-sm-1"></i>
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
          <div class="col-lg-12 col-md-12 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist1">
                <li class="nav-item border">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " href="javascript:;" role="tab" id="tab1" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">Grafik</span>
                  </a>
                </li>
                <li class="nav-item border">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="javascript:;" role="tab"  id="tab2" aria-selected="false">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">Discussion</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-12" id="tab-1" role="tabpanel">
          <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-8 border border-radius-md">
                              <div class="h-100">
                                <h5 class="mb-1">
                                  Grafik
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
                            <div class="col-md-4 bg-success border border-radius-md">
                              <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Your Score</p>
                                <h1 class="font-weight-bolder" id="scoreResult">
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                                <div class="tab-content" >
                                  <div class="tab-pane fade show active" id="question" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="col-md-12 mt-4">
                                        <div class="card z-index-2 h-100">
                                          <div class="card-header pb-0 pt-3 bg-transparent">
                                            <h6 class="text-capitalize">Grafik Task overview</h6>
                                            <p class="text-sm mb-0">
                                              <i class="fa fa-arrow-up text-success"></i>
                                              <span class="font-weight-bold">4% more</span> in 2021
                                            </p>
                                          </div>
                                          <div class="card-body p-3">
                                            <div class="chart">
                                              <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
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
                </div>
                <div class="card-body pt-4 p-3">
                  <ul class="list-group" id="data-list">

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12" id="tab-2" role="tabpanel">
          <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-2 border border-radius-md">
                              <div class="avatar avatar-xl position-relative" id="bg-timer">
                                <h6 id="timerDoResult">1:40:40</h6>
                              </div>
                            </div>
                            <div class="col-md-10 border border-radius-md">
                              <div class="h-100">
                                <h5 class="mb-1">
                                  Paket Try Out Batch 1
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                  <small id="labelProgress">Progress : 100%</small>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="valueProgress" style="width: 100%;"></div>
                                    </div>
                                  </div>
                                </p>
                              </div>
                            </div>
                            <div class="row">
                                <div class="tab-content" id="data-list-questions">
                                  <div class="tab-pane fade show active" id="question" role="tabpanel" aria-labelledby="pills-home-tab">
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

  <script src="<?= base_url() ?>assets/assets/js/plugins/chartjs.min.js"></script>
  <script type="text/javascript">
    var duration = 5;
    var detik = 0;
    var menit = duration % 60;
    var jam = Math.floor(duration / 60);
    $(document).ready(function() {
        $("#link2").attr('href',localStorage.getItem('link2'));
        $("#link1").attr('href','<?= base_url() ?>'+window.location.href.split("/")[4].trim());
        showListData();
        setTimeDateNow();

        $("#tab-1").show();
        $("#tab-2").hide();

        countDownTimer = () => {
          setTimeout(countDownTimer, 1000);
          menit = duration % 60;
          jam = Math.floor(duration / 60);
          if(menit < 1) {
            $('#bg-timer').addClass("bg-danger blink");
          }
          $('#timer').html(
            jam + ':' + menit + ':' + detik
          );
          if (detik < 1) {
            detik = 59;
            menit--;
              if (menit < 0) {
                menit = 59;
                jam--;
                  if (jam < 0) {
                    // alert("waktu habis");
                    location.reload();
                  }
                }
              }else{
                detik--
              }
        }
        countDownTimer();
      })

      

      document.getElementById("nextQuestion").addEventListener("click", function() {
          nextData();
      });
      document.getElementById("previousQuestion").addEventListener("click", function() {
          previousData();
      });
      document.getElementById("tab1").addEventListener("click", function() {
          $("#tab-1").show();
          $("#tab-2").hide();
      });
      document.getElementById("tab2").addEventListener("click", function() {
          $("#tab-2").show();
          $("#tab-1").hide();
      });


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

      showListData = () => {
        $.ajax({    
              type: "GET",
              url: "<?php echo base_url();?>App/data_result_tryout",             
              dataType: "JSON",
              data : {
                val : JSON.stringify(getIDFromURL())
              },             
              success: function(data){
                writeListToHTML(data); 
                writeGrafikJSON(data.grafik);    
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
                $("#number-"+arrID[2]).addClass("active")
                // $("#number-"+arrID[2]).removeClass("bg-light")
            }else{
                $("#question-"+arrID[2]).removeClass("show active")
                // $("#question-"+arrID[2]).removeClass("active bg-success")
                if (objdata[`${arrID[0]}-answer-${arrID[2]}`] == null){
                  // $("#number-"+arrID[2]).addClass("bg-light")
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

      writeListToHTML = (val) => {
          var result = "";
          var resultQuestion = "";
          var id_course = "";
          var totalScore = 0;
          var resultLocalStorage = {};
          var timeLocalStorage = {
            start : setTimeDateNow(),
            end : null,
            id_course : id_course
          }
          var data = val.detail;
          var header = val.header;
          var list_answers = JSON.parse(header.list_answers);

          if(header.wrong_answers > 0){
                if (parseInt(header.value_answers) == parseInt(header.good_answers)) {
                  var hitungA = 0;
                }else{
                  var hitungA = (parseInt(header.value_answers) / parseInt(header.good_answers));
                  totalScore = ( hitungA * (parseInt(header.good_answers) + parseInt(header.wrong_answers)))
                }
          }else{
              totalScore = header.value_answers
          }
          if(data.length > 0) {
            var lengthData = data.length;
            var num = 5;
            var count = 1;
            var temp = '<ul class="nav nav-pills nav-fill p-1" role="tablist">';
            var valTemp = "";
            var endTemp = '</ul>';
            for (var i = 1; i <= data.length; i++) {
              duration = parseInt(data[i-1].course_duration);
              timeLocalStorage.id_course = data[i-1].id_course;
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
                     var active = "active ";
                  }else{
                     var active = "";
                  }
                  if(data[i-1].answer == list_answers[`${data[i-1].id_questions}-answer`]){
                    var bganswer = "bg-success";
                  }else{
                    var bganswer = "bg-danger";
                  }
                  valTemp += '<li class="nav-item border">'+
                            '<a class="nav-link mb-0 px-0 py-1 d-flex '+bganswer+' '+active+' align-items-center justify-content-center " id="number-'+i+'"  data-bs-toggle="tab" href="javascript:;" onclick="checkData('+i+')" role="tab" aria-selected="false" >'+
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

              var btnA = "";
              var btnB = "";
              var btnC = "";
              var btnD = "";
              var btnE = "";

              if(data[i-1].answer !== list_answers[`${data[i-1].id_questions}-answer`] && list_answers[`${data[i-1].id_questions}-answer`] === "A"){
                  btnA = "bg-danger";
              }
              if(data[i-1].answer !== list_answers[`${data[i-1].id_questions}-answer`] && list_answers[`${data[i-1].id_questions}-answer`] === "B"){
                  btnB = "bg-danger";
              }
              if(data[i-1].answer !== list_answers[`${data[i-1].id_questions}-answer`] && list_answers[`${data[i-1].id_questions}-answer`] === "C"){
                  btnC = "bg-danger";
              }
              if(data[i-1].answer !== list_answers[`${data[i-1].id_questions}-answer`] && list_answers[`${data[i-1].id_questions}-answer`] === "D"){
                  btnD = "bg-danger";
              }
              if(data[i-1].answer !== list_answers[`${data[i-1].id_questions}-answer`] && list_answers[`${data[i-1].id_questions}-answer`] === "E"){
                  btnE = "bg-danger";
              }


              if(data[i-1].answer === "A"){
                  btnA = "bg-success";
              }
              if(data[i-1].answer === "B"){
                  btnB = "bg-success";
              }
              if(data[i-1].answer === "C"){
                  btnC = "bg-success";
              }
              if(data[i-1].answer === "D"){
                  btnD = "bg-success";
              }
              if(data[i-1].answer === "E"){
                  btnE = "bg-success";
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
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-A" class="btn btn-icon-only btn-rounded btn-outline-dark '+btnA+' mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">A</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_a+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-B" class="btn btn-icon-only btn-rounded btn-outline-dark '+btnB+' mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">B</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_b+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-C" class="btn btn-icon-only btn-rounded btn-outline-dark '+btnC+' mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">C</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_c+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-D" class="btn btn-icon-only btn-rounded btn-outline-dark '+btnD+' mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">D</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_d+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                            '<li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">'+
                                              '<div class="d-flex align-items-center">'+
                                                '<p><button id="btn-'+data[i-1].id_questions+'-answer-'+i+'-E" class="btn btn-icon-only btn-rounded btn-outline-dark '+btnE+' mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">E</button></p>'+
                                                '<div class="d-flex flex-column">'+
                                                  '<h6 class="mb-1 text-dark text-sm">'+data[i-1].option_e+'</h6>'+
                                                '</div>'+
                                              '</div>'+
                                            '</li>'+
                                          '</ul>'+
                                        '</div>'+
                                        '<div class="card-header border pb-0 px-3">'+
                                          '<div class="row">'+
                                            '<div class="col-md-12">'+
                                              '<h6 class="mb-0 '+bganswer+'">Your answer : ('+list_answers[`${data[i-1].id_questions}-answer`]+')</h6>'+
                                              '<h6 class="mb-0">Discussion : ('+data[i-1].answer+')</h6>'+
                                              '<h6 class="mb-0">'+ data[i-1].discussion+'</h6>'+
                                            '</div>'+
                                          '</div>'+
                                        '</div>'+
                                      '</div>'+
                                    '</div>'+
                                '</div>';
            }
          }
          localStorage.setItem("question-temporary", JSON.stringify(resultLocalStorage)); 
          localStorage.setItem("question-timer-date", JSON.stringify(timeLocalStorage));
          document.getElementById("timerDoResult").innerHTML = "Estimate: " + header.selisih; 
          document.getElementById("scoreResult").innerHTML = header.value_answers + " from " + totalScore;
          document.getElementById('data-list-number').innerHTML = result;
          document.getElementById('data-list-questions').innerHTML = resultQuestion;
          document.getElementById("labelProgress").innerHTML = "Progress : " +Math.floor((parseInt(header.value_answers) / parseInt(totalScore)) * 100) +" %";
          document.getElementById("valueProgress").style.width = `${(parseInt(header.value_answers) / parseInt(totalScore)) * 100}%`;
      }

      writeGrafikJSON = (result) => {
          if(document.getElementById("chart-line") != null){
          var ctx1 = document.getElementById("chart-line").getContext("2d");
          var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

          gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
          gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
          gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
          var labelData = [];
          var valueData = [];
          for (var i = 0; i < result.length; i++) {
            labelData.push(result[i].dateCreated);
            valueData.push(result[i].value_answers);
          }
          new Chart(ctx1, {
            type: "line",
            data: {
              labels: labelData,
              datasets: [{
                label: "Score",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: valueData,
                maxBarThickness: 6

              }],
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                legend: {
                  display: false,
                }
              },
              interaction: {
                intersect: false,
                mode: 'index',
              },
              scales: {
                y: {
                  grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5]
                  },
                  ticks: {
                    display: true,
                    padding: 10,
                    color: '#fbfbfb',
                    font: {
                      size: 11,
                      family: "Open Sans",
                      style: 'normal',
                      lineHeight: 2
                    },
                  }
                },
                x: {
                  grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                  },
                  ticks: {
                    display: true,
                    color: 'black',
                    padding: 20,
                    font: {
                      size: 14,
                      family: "Open Sans",
                      style: 'normal',
                      lineHeight: 2
                    },
                  }
                },
              },
            },
          });
        }
      }
      
  </script>