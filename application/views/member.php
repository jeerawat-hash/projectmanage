    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



            <div class="card ">
              <div class="card-header">

                <?php  

                  if ($PositionID < 3) {
                    ?> 
                    <button class="btn btn-primary btn-sm" id="Register">
                    <i class="fas fa-pencil-alt"> </i> เพิ่มผู้ใช้งาน </button>
                    <?php 
                  } 

                ?>

              </div>
              
              <!-- /.card-header -->
              <div class="card-body">

                <div class="container">
                  
                  <table id="MemberTable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ชื่อ</th>
                              <th>ตำแหน่ง</th>
                              <th>หมายเลขโทรศัพท์</th>
                              <th>Email</th>
                              <th hidden></th> 
                          </tr>
                      </thead>
                      <tbody>

                        <?php 

                        foreach ($MemberINFO as $value) {
 

                        ?> 

                          <tr>
                              <td><?php echo $value->Name; ?></td>
                              <td><?php echo $value->Detail; ?></td>
                              <td><?php echo $value->Telephone; ?></td>
                              <td><?php echo $value->Email; ?></td>
                              <td hidden>-</td> 
                          
                          </tr>




                        <?php
                        }
                         ?>
                          



                      </tbody>
                  </table>




                </div>

              </div>
            </div>

 

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->










<!---- Modal Register  ------>
  <div id="RegisterModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ลงทะเบียนผู้ใช้งานใหม่</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
 
           <div class="container">
                        
            <div class="row">
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmployeeName">ชื่อ - สกุล</label>
                    <input type="text" id="inputEmployeeName" class="form-control ">
                  </div> 
              </div>
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" id="inputUsername" class="form-control">
                  </div> 
              </div>
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" class="form-control">
                  </div> 
              </div>
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputDOB">วันเกิด</label>
                    <input type="text" id="inputDOB" class="form-control datepickerclass">
                  </div> 
              </div>
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputTelephone">เบอร์โทรศัพท์</label>
                    <input type="text" id="inputTelephone" class="form-control">
                  </div> 
              </div>
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="text" id="inputEmail" class="form-control">
                  </div> 
              </div>
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputLineToken">LineToken</label>
                    <input type="text" id="inputLineToken" class="form-control">
                  </div> 
              </div>
            </div> 


          </div>

 

        </div>
        <div class="modal-footer">
          
          <div class="spinner-border text-warning" id="Preload" role="status">
          <span class="sr-only">Loading...</span>
          </div>

        <button type="button" class="btn btn-warning" id="Save" >บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ออก</button>
        </div>
      </div>
    </div>
  </div>
<!---- Modal EditProject  ------>







<script type="text/javascript">
  $(document).ready(function() {
  
    $('#MemberTable').DataTable();





    $("#Register").on("click",function(){

      $("#RegisterModal").find("#Preload").hide();
      $("#RegisterModal").modal();


    });

    $("#RegisterModal").find("#Save").on("click",function(){


      var Name = $("#inputEmployeeName").val();
      var Username = $("#inputUsername");
      var Password = $("#inputPassword");
      var DOB = $("#inputDOB");
      var Telephone = $("#inputTelephone");
      var Email = $("#inputEmail");
      var LineToken = $("#inputLineToken");

      if (Name == "") {
 
              swal("ผิดพลาด!", "กรุณาระบุชื่อสกุล", "error"); 
              return false;
      }
      if (Username == "") {
 
              swal("ผิดพลาด!", "กรุณาระบุ Username", "error"); 
              return false;
      }
      if (Password == "") {
 
              swal("ผิดพลาด!", "กรุณาระบุ Password", "error"); 
              return false;
      }
      if (DOB == "") {
 
              swal("ผิดพลาด!", "กรุณาระบุ วันเกิด", "error"); 
              return false;
      }
      if (Telephone == "") {
 
              swal("ผิดพลาด!", "กรุณาระบุ โทรศัพท์", "error"); 
              return false;
      }
      if (Email == "") {
 
              swal("ผิดพลาด!", "กรุณาระบุ Email", "error"); 
              return false;
      }
















    });




















    //////// Date picker init ///////

    $(".datepickerclass").datepicker({
            uiLibrary: 'bootstrap4',
            minDate: 0,
            dateFormat: 'yy-mm-dd'
    });

    //////// Date picker init ///////

  
  } );
</script>