  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row" id="data-list">
        <!-- <?php for ($i=0; $i < 7 ; $i++) { ?>
    
        <div class="col-xl-4 col-sm-6 py-3">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Ramadhan Ceria Bersama 2024</p>
                    <h5 class="font-weight-bolder">
                      Rp.150.000,-
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+Include</span> 
                      <ul class="text-danger">
                      <li>Tryout TWK 1</li>
                      <li>Tryout TWK 2</li>
                      <li>Tryout TWK 3</li>
                      </ul>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle" style="cursor: pointer;">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                  <p>
                      than last month than last month than last monththan last month than last monththan last monththan last monththan last monththan last month than last month than last month than last monththan last month than last monththan last monththan last monththan last monththan last month
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php       
        } ?> -->
      </div>
    </div>
  </main>

  <script>
    $(document).ready(function () {
      showListData();
    });

    showListData = () => {
      $.ajax({    
            type: "GET",
            url: "<?php echo base_url();?>App/list_data_m_package",             
            dataType: "JSON",             
            success: function(data){  
              writeListToHTML(data);     
            }
        });
    }

    writeListToHTML = (data) => {
        var result = "";
        if(data.length > 0) {
          for (var i = 0; i < data.length; i++) {
              let packageName = "";
              let arrayListCourse = data[i].list_course;
              if(arrayListCourse.length > 0) {
                  for (var ik = 0; ik < arrayListCourse.length; ik++) {
                    packageName += '<li>'+arrayListCourse[ik].course_name+'</li>';
                  }
              }
              result += '<div class="col-xl-4 col-sm-6 py-3">'+
                          '<div class="card">'+
                            '<div class="card-body p-3">'+
                              '<div class="row">'+
                                '<div class="col-8">'+
                                  '<div class="numbers">'+
                                    '<p class="text-sm mb-0 text-uppercase font-weight-bold">'+ data[i].package_name+'</p>'+
                                    '<h5 class="font-weight-bolder">'+formatRupiah(data[i].package_nominal, "Rp. ")+',-</h5>'+
                                    '<p class="mb-0">'+
                                      '<span class="text-success text-sm font-weight-bolder">+Include</span> '+
                                      '<ul class="text-danger">'+
                                        packageName+
                                      '</ul>'+
                                    '</p>'+
                                  '</div>'+
                                '</div>'+
                                '<div class="col-4 text-end">'+
                                  '<div onclick="checkoutPackage('+data[i].id_package+')" class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle" style="cursor: pointer;">'+
                                    '<i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>'+
                                  '</div>'+
                                '</div>'+
                                '<div class="col-12" style="border:1px solid silver;border-radius : 30px">'+
                                  '<p>'+data[i].package_description+'</p>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                        '</div>';
          }
        }
        document.getElementById('data-list').innerHTML = result;
    }

    checkoutPackage = (id) => {
        alert(id);
    }
    function formatRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }
  </script>