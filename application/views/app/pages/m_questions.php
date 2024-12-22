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
              <input type="text" class="form-control" id="search-m-question" placeholder="Type here questions...">
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
            
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <select class="form-control" id="id_course">
                      </select>
                    </div>
                    <div class="col-6 text-end">
                      <a id="import-questions"></a>
                      <a class="btn bg-gradient-dark mb-0" href="<?= base_url() ?>questions/add" ><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Question</a>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-4 p-3">
                  <ul class="list-group" id="data-list">
                      <li class="list-group-item border-0 d-flex p-1 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6>(1) - Paket Latihan Pemula CPNS - Jawaban (B)</h6>
                          <p class="mb-1 text-sm">Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS ?</p>
                          <div class="d-flex py-1">
                            <div>
                          </div>
                              <div class="card-body p-1">
                                <div class="row">
                                  <div class="col-md-12 mb-2">
                                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                      <h6 class="w-10 me-3 mb-0">A</h6>
                                      <p class="mb-0 text-sm ml-3">Soal Latihan Pemula CPNS Soal Latihan Pemula</p>
                                    </div>
                                  </div>
                                  <div class="col-md-12 mb-2">
                                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                      <h6 class="w-10 me-3 mb-0">B</h6>
                                      <p class="mb-0 text-sm ml-3">Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal </p>
                                    </div>
                                  </div>
                                  <div class="col-md-12 mb-2">
                                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                      <h6 class="w-10 me-3 mb-0">C</h6>
                                      <p class="mb-0 text-sm ml-3">Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal </p>
                                    </div>
                                  </div>
                                  <div class="col-md-12 mb-2">
                                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                      <h6 class="w-10 me-3 mb-0">D</h6>
                                      <p class="mb-0 text-sm ml-3">Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal </p>
                                    </div>
                                  </div>
                                  <div class="col-md-12 mb-2">
                                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                      <h6 class="w-10 me-3 mb-0">E</h6>
                                      <p class="mb-0 text-sm ml-3">Soal Latihan Pemula CPNS Soal Latihan Pemula CPNS Soal </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="ms-auto text-end">
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="deleteData(11)">
                            <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                            <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                          </div>
                      </li>
                      
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
      showListDataCourse();
    });

    $("#search-m-question").keyup(function(){
        showListDataSearch($("#search-m-question").val());
    });

    $("#id_course").change(function(){
        showListDataSearchCourse($("#id_course").val())
    });

    document.getElementById("import-questions").addEventListener("click", function() {
        processImport();
    });

    processImport = () => {
      Swal.fire({
          input: "file",
          inputAttributes: {
            "accept": ".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel",
            id: "file-import-questions",
          },
          showCancelButton: true,
          html: `
            <b>Download Template</b>
            <a href='<?php echo base_url();?>assets/app/file/template/questions/temp_questions.xlsx' target='blank'>Here</a>
          `,
          confirmButtonText: "Process",
          showLoaderOnConfirm: true,
          inputValidator: (value) => {
            if (!value) {
              return "Please select file!";
            }
          },
          allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
          console.log($('#file-import-questions')[0]); 
  
        });
    }
    

    showListDataSearch = (key) => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/list_data_m_questions_search",
            data : {
              val : JSON.stringify(key)
            },             
            dataType: "JSON",             
            success: function(data){  
              writeListToHTML(data);     
            }
        });
    }

    showListDataSearchCourse = (key) => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/list_data_m_questions_search_course",
            data : {
              val : JSON.stringify(key)
            },             
            dataType: "JSON",             
            success: function(data){  
              writeListToHTML(data);     
            }
        });
    }

    showListData = () => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/list_data_m_questions",             
            dataType: "JSON",             
            success: function(data){  
              writeListToHTML(data);     
            }
        });
    }

    showListDataCourse = () => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/list_data_m_course",             
            dataType: "JSON",             
            success: function(data){  
              writeListOptionCourse(data);     
            }
        });
    }

    writeListOptionCourse = (data) => {
        var result = "<option value='' selected>All List Questions</option>";
        if(data.length > 0) {
            for (var i = 0; i < data.length; i++) {
               result += "<option value='"+data[i].id_course+"'>"+data[i].course_name+"</option>";
            }
        }
        document.getElementById("id_course").innerHTML = result;
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
            url: "<?php echo base_url();?>App/delete_data_m_questions",
            data : {
              val : JSON.stringify(key)
            },             
            dataType: "JSON",             
            success: function(data){  
              location.reload();    
            }
        });
    }

    importExcelQuestions = (file) => {
          let result = ""
          if (file !== ''){
              var file_data = $('#file-import-questions')[0];
              var form_data = new FormData();
              form_data.append('file', file_data);
              $.ajax({
                   url:'<?php echo base_url();?>App/importExcelQuestions',
                   type:"POST",
                   data:form_data,
                   processData:false,
                   contentType:false,
                   cache:false,
                   async:false,
                    success: function(data){
                      console.log(data);
                      // if (data.status === 'success') {
                      //     result =  data.msg
                      // }else{
                      //     alert(data.msg);
                      // }
                 }
               });
          }else{
              alert('Please upload banner','error');
          }

          return result;
      }

    writeListToHTML = (data) => {
        var result = "";
        if(data.length > 0) {
          for (var i = 0; i < data.length; i++) {
            result += '<li class="list-group-item border-0 d-flex p-1 bg-gray-100 border-radius-lg">'+
                        '<div class="d-flex flex-column">'+
                          '<h6>('+(i+1)+') - '+data[i].course_name+' - Jawaban ('+data[i].answer+')-('+data[i].bobot+')</h6>'+
                          '<p class="mb-1 text-sm ">'+data[i].question_description+'</p>'+
                          '<div class="d-flex py-1">'+
                            '<div>'+
                          '</div>'+
                              '<div class="card-body p-1">'+
                                '<div class="row">'+
                                  '<div class="col-md-10 mb-2">'+
                                    '<div class="d-flex align-items-center border card-plain border-radius-lg">'+
                                      '<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">A</button>'+
                                      '<div class="align-self-center">' +
                                      '<h6 class="text-sm ml-3 justify-content-center">'+data[i].option_a+'</h6>'+
                                      '</div>'+
                                    '</div>'+
                                  '</div>'+
                                  '<div class="col-md-10 mb-2">'+
                                    '<div class="d-flex align-items-center border card-plain border-radius-lg">'+
                                      '<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">B</button>'+
                                      '<div class="align-self-center">' +
                                      '<h6 class="text-sm ml-3 justify-content-center">'+data[i].option_b+'</h6>'+
                                      '</div>'+
                                    '</div>'+
                                  '</div>'+
                                  '<div class="col-md-10 mb-2">'+
                                    '<div class="d-flex align-items-center border card-plain border-radius-lg">'+
                                      '<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">C</button>'+
                                      '<div class="align-self-center">' +
                                      '<h6 class="text-sm ml-3 justify-content-center">'+data[i].option_c+'</h6>'+
                                      '</div>'+
                                    '</div>'+
                                  '</div>'+
                                  '<div class="col-md-10 mb-2">'+
                                    '<div class="d-flex align-items-center border card-plain border-radius-lg">'+
                                      '<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">D</button>'+
                                      '<div class="align-self-center">' +
                                      '<h6 class="text-sm ml-3 justify-content-center">'+data[i].option_d+'</h6>'+
                                      '</div>'+
                                    '</div>'+
                                  '</div>'+
                                  '<div class="col-md-10 mb-2">'+
                                    '<div class="d-flex align-items-center border card-plain border-radius-lg">'+
                                      '<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">E</button>'+
                                      '<div class="align-self-center">' +
                                      '<h6 class="text-sm ml-3 justify-content-center">'+data[i].option_e+'</h6>'+
                                      '</div>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
                              '</div>'+
                          '</div>'+
                        '</div>'+
                        '<div class="ms-auto text-end">'+
                          '<a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="deleteData('+data[i].id_questions+')">'+
                            '<i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>'+
                            '<a class="btn btn-link text-dark px-3 mb-0" href="<?= base_url() ?>questions/edit/'+data[i].id_questions+'"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>'+
                          '</div>'+
                      '</li>';
          }
        }
        document.getElementById('count-list').innerHTML = 'List Questions - ' + data.length;
        document.getElementById('data-list').innerHTML = result;
    }
  </script>