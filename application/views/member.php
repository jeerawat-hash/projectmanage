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
                              <th>LineToken</th>
                              <th ></th> 
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
                              <td><?php echo $value->LineToken; ?></td>
                              <td >
                              <button class="btn btn-warning btn-sm BtnMemberEdit" data-id="<?php echo $value->ID; ?>" > <i class="fas fa-pencil-alt"> </i> แก้ไขข้อมูล </button>
                              </td> 
                          
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
                  <label for="inputPosition">ตำแหน่ง</label>
                  <select id="inputPosition" class="form-control custom-select">
                    <option value="0" selected disabled>กรุณาเลือก</option>
                    <option value="1" >ผู้อำนวยการ</option>
                    <option value="2" >ผู้จัดการ</option>
                    <option value="3" >ที่ปรึกษา</option>
                    <option value="4" >พนักงาน</option>
                  </select>
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
<!---- Modal Register  ------>





<!---- Modal Edit  ------>
<div id="EditModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">แก้ไขข้อมูลผู้ใช้งานระบบ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
 
           <div class="container">

                    <input type="text" hidden id="inputEmployeeID" class="form-control ">
                        
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
                    <input type="text" disabled id="inputUsername" class="form-control">
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
                  <label for="inputPosition">ตำแหน่ง</label>
                  <select id="inputPosition" class="form-control custom-select">
                    <option value="0" selected disabled>กรุณาเลือก</option>
                    <option value="1" >ผู้อำนวยการ</option>
                    <option value="2" >ผู้จัดการ</option>
                    <option value="3" >ที่ปรึกษา</option>
                    <option value="4" >พนักงาน</option>
                  </select>
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
          
          <div class="spinner-border text-success" id="Preload" role="status">
          <span class="sr-only">Loading...</span>
          </div>

        <button type="button" class="btn btn-success" id="Save" >บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ออก</button>
        </div>
      </div>
    </div>
  </div>
<!---- Modal Edit  ------>






<script type="text/javascript">
  $(document).ready(function() {
  
    $('#MemberTable').DataTable();





    $("#Register").on("click",function(){

      $("#RegisterModal").find("#Preload").hide();
      $("#RegisterModal").modal();


    });

    $("#MemberTable").on("click",'.BtnMemberEdit',function(){

      var ID = $(this).attr("data-id");
 
      $("#EditModal").find("#Preload").hide();

      $.post("https://blueprojectmanagement.com/index.php/home/GetDataMemberByID",
      {
        MemberID : ID
      },function(data){

        var obj = JSON.parse(data);
        var ID = obj[0].ID;
        var Name = obj[0].Name;
        var Telephone = obj[0].Telephone;
        var Email = obj[0].Email;
        var LineToken = obj[0].LineToken;
        var Username = obj[0].Username;
        $("#EditModal").find("#inputEmployeeID").val(ID);
        $("#EditModal").find("#inputEmployeeName").val(Name);
        $("#EditModal").find("#inputUsername").val(Username); 
        $("#EditModal").find("#inputTelephone").val(Telephone);
        $("#EditModal").find("#inputEmail").val(Email);
        $("#EditModal").find("#inputLineToken").val(LineToken);
        
        $("#EditModal").modal();
        

      });
 

    });

    $("#RegisterModal").find("#Save").on("click",function(){


      var Name = $("#RegisterModal").find("#inputEmployeeName").val();
      var Username = $("#RegisterModal").find("#inputUsername").val();
      var Password = $("#RegisterModal").find("#inputPassword").val();
      var DOB = $("#RegisterModal").find("#inputDOB").val();
      var Telephone = $("#RegisterModal").find("#inputTelephone").val();
      var Email = $("#RegisterModal").find("#inputEmail").val();
      var LineToken = $("#RegisterModal").find("#inputLineToken").val();
      var Position = $("#RegisterModal").find("#inputPosition").val();


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
      if (Position == null) {
 
              swal("ผิดพลาด!", "กรุณาระบุเลือกตำแหน่ง", "error"); 
              return false;
      }
 

      $.post("https://blueprojectmanagement.com/index.php/home/Register",
        {
          PositionID : Position,
          Username : Username,
          Password : Password,
          Name : Name,
          DOB : DOB,
          Telephone : Telephone,
          Email : Email,
          LineToken : LineToken
        }
        ,function(data){


                  if (data == 1) {
                      $("#RegisterModal").find("#Save").show();
                      $("#RegisterModal").find("#Preload").hide();
                      //alert("success");
                      swal("สำเร็จ!", "ดำเนินการเพิ่มข้อมูลสำเร็จ", "success"); 
                      $("#RegisterModal").modal("hide");
                      
                    }else{
                      swal("ผิดพลาด!", "ดำเนินการเพิ่มข้อมูลล้มเหลวกรุณาลองใหม่ภายหลัง", "error"); 

                      $("#RegisterModal").find("#Save").show();
                      $("#RegisterModal").find("#Preload").hide();
                      return false;
                    } 

        });

 

    });




















    //////// Date picker init ///////

    $(".datepickerclass").datepicker({
            uiLibrary: 'bootstrap4', 
            dateFormat: 'yy-mm-dd'
    });

    //////// Date picker init ///////

  
  } );
</script>