
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">







      <!-- Default box -->
      <div class="card">
        <div class="card-header">
         <!-- <h3 class="card-title">Projects</h3> -->

         <button class="btn btn-primary btn-sm" id="CreateProject">
          <i class="fas fa-pencil-alt"> </i>
                              เพิ่มโครงการ
                </button>

          <div class="card-tools">
           <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects" id="ProjectsTable">
              <thead>
                  <tr> 
                      <th style="width: 20%">
                          ชื่อ
                      </th> 
                      <th>
                          ความคืบหน้า
                      </th>
                      <th style="width: 8%" class="text-center">
                          สถานะ
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody id="ProjectsTableDetail">
                  












                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->






 



<!---- Modal Create Project ------>

<div id="ModalPeriod" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="wizard-title">เพิ่มโครงการ</h5>  
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="CreateProjectTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#infoPanel" role="tab">รายละเอียด</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#budgetPanel" role="tab">งบประมาณและเวลา</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#documentPanel" role="tab">เอกสารที่เกี่ยวข้อง</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#SignGroupPanel" role="tab">ผู้รับผิดชอบ</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#TimeLinePanel" role="tab">ช่วงการปฏิบัติงาน</a>
          <li>
        </ul>
        
        <div class="tab-content mt-2">


          <div class="tab-pane fade show active" id="infoPanel" role="tabpanel">
            
            <h4>รายละเอียดโครงการ</h4>
            
 
              <div class="card-body">
                <div class="form-group">
                  <label for="inputProjectName">ชื่อโครงการ</label>
                  <input type="text" id="inputProjectName" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">คำอธิบาย</label>
                  <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                </div> 
                <div class="form-group">
                  <label for="inputClientCompany">บริษัทลูกค้า</label>
                  <input type="text" id="inputClientCompany" class="form-control">
                </div>
              </div> 
  


          </div>

 
          <div class="tab-pane fade" id="budgetPanel" role="tabpanel">
            <h4>งบประมาณและเวลาในการตรวจสอบ</h4>
             


                <div class="card-body">


                  <div class="form-group">
                    <label for="inputEndDate">วันส่งมอบงาน</label>
                    <input type="text" id="inputEndDate" class="form-control datepickerclass">
                  </div>

                  <div class="form-group">
                    <label for="inputPeriodEndDate">แจ้งเตือนก่อนส่งมอบงาน(<font color="red">จำนวนวัน</font>)</label>
                    <input type="number" id="inputPeriodEndDate" value="0" class="form-control">
                  </div>
 

                  <div class="form-group">
                    <label for="inputPeriodDate">ช่วงเวลาก่อนตรวจความคืบหน้า(<font color="red">จำนวนวัน</font>)</label>
                    <input type="number" id="inputPeriodDate" value="0" class="form-control">
                  </div>

                   <div class="form-group">
                    <label for="inputBudget">งบประมาณโครงการ</label>
                    <input type="number" id="inputBudget" value="0" class="form-control">
                  </div> 
 


                </div> 



  


          </div>




          <div class="tab-pane fade" id="documentPanel" role="tabpanel">
            <h4>เอกสารที่เกี่ยวข้อง</h4>
             

            <div class="card-body">
            <div class="form-group">

              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="DocFile" name="filename">
                <label class="custom-file-label" for="DocFile">เลือกไฟล์</label>
              </div>

            </div>
          </div>
















 
          </div>
          <div class="tab-pane fade" id="SignGroupPanel" role="tabpanel">
            <h4>กลุ่มผู้รับผิดชอบโครงการ</h4>
           
            <div class="card-body">
            <div  hidden class="row">
              <div class="col-8">
                <div class="form-group">
                  <label for="inputEmployeeGroup0">ชื่อ</label>
                  <select id="inputEmployeeGroup0" class="form-control custom-select">
                    <option value="<?php echo $MemberID; ?>" selected ><?php echo $MemberName; ?></option> 
                  </select>
                </div>
              </div>
              <div class="col-4">
                
                <div class="form-group">
                  <label for="inputEmployeeRole0">สิทธิการใช้งาน</label>
                  <select id="inputEmployeeRole0" class="form-control custom-select">
                    <option value="CER" selected >อ่าน/บันทึกผล/แก้ไข</option>  
                  </select>
                </div>

              </div>
            </div>


            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <label for="inputEmployeeGroup1">ชื่อ</label>
                  <select id="inputEmployeeGroup1" class="form-control custom-select">
                    <option value="0" selected disabled>กรุณาเลือก</option>
                    <?php 
  
                    foreach ($SignMember as $Member) {
                    ?>

                    <option value="<?php echo $Member->ID; ?>" ><?php echo $Member->Name; ?></option>

                    <?php
                    }
                     ?> 
                  </select>
                </div>
              </div>
              <div class="col-4">
                
                <div class="form-group">
                  <label for="inputEmployeeRole1">สิทธิการใช้งาน</label>
                  <select id="inputEmployeeRole1" class="form-control custom-select">
                    <option value="0" selected disabled>กรุณาเลือก</option>
                    <option value="R" >อ่าน</option>
                    <option value="SR" >อ่าน/บันทึกผล</option>
                    <option value="CER" >อ่าน/บันทึกผล/แก้ไข</option>
                  </select>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <label for="inputEmployeeGroup2">ชื่อ</label>
                  <select id="inputEmployeeGroup2" class="form-control custom-select">
                    <option value="0" selected disabled>กรุณาเลือก</option>
                    <?php 
  
                    foreach ($SignMember as $Member) {
                    ?>

                    <option value="<?php echo $Member->ID; ?>" ><?php echo $Member->Name; ?></option>

                    <?php
                    }
                     ?> 
                  </select>
                </div>
              </div>
              <div class="col-4">
                
                <div class="form-group">
                  <label for="inputEmployeeRole2">สิทธิการใช้งาน</label>
                  <select id="inputEmployeeRole2" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option value="R" >อ่าน</option>
                    <option value="SR" >อ่าน/บันทึกผล</option>
                    <option value="CER" >อ่าน/บันทึกผล/แก้ไข</option>
                  </select>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <label for="inputEmployeeGroup3">ชื่อ</label>
                  <select id="inputEmployeeGroup3" class="form-control custom-select">
                    <option value="0" selected disabled>กรุณาเลือก</option>
                    <?php 
  
                    foreach ($SignMember as $Member) {
                    ?>

                    <option value="<?php echo $Member->ID; ?>" ><?php echo $Member->Name; ?></option>

                    <?php
                    }
                     ?> 
                  </select>
                </div>
              </div>
              <div class="col-4">
                
                <div class="form-group">
                  <label for="inputEmployeeRole3">สิทธิการใช้งาน</label>
                  <select id="inputEmployeeRole3" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option value="R" >อ่าน</option>
                    <option value="SR" >อ่าน/บันทึกผล</option>
                    <option value="CER" >อ่าน/บันทึกผล/แก้ไข</option>
                  </select>
                </div>

              </div>
            </div>
          </div>











 
          </div>
           
          <div class="tab-pane fade" id="TimeLinePanel" role="tabpanel">
            <h4>รอบการตรวจความคืบหน้าโครงการ</h4>
 


            <div class="card-body">
            <div id="newRow"></div>
            </div>

            <button id="addRow" type="button" class="btn btn-info">เพิ่มรายการ</button>






          </div>
 
        </div>

     <!--
        <div class="progress mt-5">
          <div class="modalprogress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
        </div>
     -->

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
<!---- Modal Create Project ------>






<!---- Modal StampProject  ------>
  <div id="StampProject" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">บันทึกผลโครงการ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <input type="text" id="PeriodID" hidden>

          <div class="container">
                        
            <div class="row">
              <div class="col-6">
                  <div class="form-group">
                    <label> <font color="red">รายละเอียด</font></label>
                  </div> 
              </div>
              <div class="col-6">
                  <div class="form-group">
                    <label ><font color="red">วันที่</font></label>
                  </div> 
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                  <div class="form-group">
                    <label id="textPreiodDetail">รายละเอียด</label>
                  </div> 
              </div>
              <div class="col-6">
                  <div class="form-group">
                    <label id="txtPreiodDate">วันที่</label>
                  </div> 
              </div>
            </div>
            

            <input type="text" id="ProjectID" hidden >


            <div class="row">
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputComment">บันทึกข้อความ</label>
                    <input type="text" id="inputComment" class="form-control ">
                  </div> 
              </div> 
            </div>


          </div>


        </div>
        <div class="modal-footer">
          
          <div class="spinner-border text-warning" id="Preload" role="status">
          <span class="sr-only">Loading...</span>
          </div>

        <button type="button" class="btn btn-success" id="Save" >บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ออก</button>
        </div>
      </div>
    </div>
  </div>
<!---- Modal StampProject  ------>



<!---- Modal DelProject  ------>
  <div id="DelProject" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ยกเลิกโครงการ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


        <input type="text" id="ProjectID" hidden>

          <div class="container">
                        
            <div class="row">
              <div class="col-12">
                  <div class="form-group">
                    <label for="inputComment">บันทึกข้อความ</label>
                    <input type="text" id="inputComment" class="form-control ">
                  </div> 
              </div> 
            </div>

          </div>


        </div>
        <div class="modal-footer">
          
          <div class="spinner-border text-warning" id="Preload" role="status">
          <span class="sr-only">Loading...</span>
          </div>

        <button type="button" class="btn btn-danger" id="Save" >ยกเลิก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ออก</button>
        </div>
      </div>
    </div>
  </div>
<!---- Modal DelProject  ------>



<!---- Modal EditProject  ------>
  <div id="EditProject" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">แก้ไขวันที่ส่งมอบโครงการ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <input type="text" id="ProjectID" hidden>

           <div class="container">
                        
            <div class="row">
              <div class="col-6">
                  <div class="form-group">
                    <label for="inputEditDate">เลือกวันที่</label>
                    <input type="text" id="inputEditDate" class="form-control datepickerclass">
                  </div> 
              </div>
              <div class="col-6">
                  <div class="form-group">
                    <label for="inputComment">บันทึกข้อความ</label>
                    <input type="text" id="inputComment" class="form-control">
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































          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



<script> 
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


    <script type="text/javascript">
  $(function () {

 


    setInterval(function(){ 
 
        $.post("https://projectmanage.webclient.me/index.php/ProjectData/GetDataProjects",function(data){

          var obj = JSON.parse(data);
    

          console.log(obj);

          var html = '';
          for (var i = 0; i < obj.length; i++) {


                var status = '<span class="badge badge-warning">ดำเนินการ</span>';

                var Operand = '';

                if (obj[i].Progress == 0) {

                   status = '<span class="badge badge-success">เสร็จสิ้นรอการส่งมอบ</span>';

                   Operand += '<button class="btn btn-success btn-sm ProjectSuccess" data-projectid="'+obj[i].ID+'"> <i class="fas fa-pencil-alt"></i>ส่งบอบสำเร็จ</button>'; 

                }else{

                    Operand = '<a href="https://projectmanage.webclient.me/index.php/home/projectinfo/'+obj[i].ID+'" class="btn btn-primary btn-sm">ดูข้อมูล</a>';
                    

                    if (obj[i].Policy == "CER") {
        
                        Operand += '<button class="btn btn-warning btn-sm ProjectEdit" data-projectid="'+obj[i].ID+'"> <i class="fas fa-pencil-alt"></i>แก้ไข</button>'; 

                        Operand += '<button class="btn btn-success btn-sm ProjectStamp" data-projectid="'+obj[i].ID+'" > <i class="fas fa-pencil-alt"></i>บันทึกผล</button>'; 

                        Operand += '<button class="btn btn-danger btn-sm ProjectDel" data-groupid="'+obj[i].SignGroupID+'" data-projectid="'+obj[i].ID+'" > <i class="fas fa-trash"> </i> ยกเลิก </button> ';


                    }

                    if (obj[i].Policy == "SR") {
       

                        Operand += '<button class="btn btn-success btn-sm ProjectStamp" data-projectid="'+obj[i].ID+'" > <i class="fas fa-pencil-alt"></i>บันทึกผล</button>'; 

                    }


                }



                
                html += '<tr>';
                html += '<td>';
                html += '<a>';
                html += obj[i].Name;
                html += '</a><br/><small>สร้างวันที่ '+obj[i].BeginDate+' </small> <br> <small> กำหนดส่ง <font color="red">'+obj[i].EndDate+'</font></small>';
                html += '</td>';
                html += '<td class="project_progress">';
                html += '<div class="progress progress-sm">';
                html += '<div class="progress-bar bg-green" role="progressbar" aria-valuenow="'+obj[i].percent+'" aria-valuemin="0" aria-valuemax="100" style="width: '+obj[i].percent+'%">';
                html += '</div></div><small> ดำเนินการแล้ว '+obj[i].percent+'% </small> </td>';
                html += '<td class="project-state">';
                html += status;
                html += '<td class="project-actions text-right">';
                html += Operand;
                html += '</td></tr>';

          } 

          $("#ProjectsTable").find("#ProjectsTableDetail").html(html);
 
        }); 

    }, 1000);


   
    $("#ProjectsTable").find("#ProjectsTableDetail").on("click",'.ProjectDel',function(){


      var GroupID = $(this).attr("data-groupid");
      var ProjectID = $(this).attr("data-projectid");


      //alert(GroupID + ' ' + ProjectID);
      $("#DelProject").modal({backdrop: 'static', 
          keyboard: false});

      $("#DelProject").find("#Preload").hide();
      $("#DelProject").find("#ProjectID").val(ProjectID);


    });


    $("#ProjectsTable").find("#ProjectsTableDetail").on("click",'.ProjectStamp',function(){

      var ProjectID = $(this).attr("data-projectid");
 
      //alert("Stamp "+ProjectID);
   

      $("#StampProject").find("#Preload").hide();
      $("#StampProject").find("#ProjectID").val(ProjectID);

        $.post("https://projectmanage.webclient.me/index.php/ProjectData/GetDataAscPreiod",
          {
            ProjectID : ProjectID
          }
          ,function(data){

            var obj = JSON.parse(data);

            //console.log(obj);

            if (obj.length == 0) {
              
              swal("แจ้งเตือน!", "โครงการอยู่ระหว่างการส่งมอบ", "info");
              return false;

            }
            $("#StampProject").modal({backdrop: 'static', 
                                      keyboard: false});

            $("#StampProject").find("#PeriodID").val(obj[0].ID);
            $("#StampProject").find("#textPreiodDetail").text(obj[0].PeriodDetail);
            $("#StampProject").find("#txtPreiodDate").text(obj[0].DueDate);
 

          });


    });


    $("#ProjectsTable").find("#ProjectsTableDetail").on("click",'.ProjectEdit',function(){

      var ProjectID = $(this).attr("data-projectid");


      //alert("ProjectEdit "+ProjectID);
 
      $("#EditProject").modal({backdrop: 'static',
        keyboard: false});

      $("#EditProject").find("#Preload").hide();
      $("#EditProject").find("#ProjectID").val(ProjectID);

 

    });




    ///////// Activity Method ////////
    
    $("#EditProject").find("#Save").on("click",function(){

 

      var ProjectID = $("#EditProject").find("#ProjectID").val();
      var EditDate = $("#EditProject").find("#inputEditDate").val();
      var Comment = $("#EditProject").find("#inputComment").val();

      if (Comment == "") {
          swal("แจ้งเตือน!", "กรุณาระบุรายละเอียดการแก้ไขโครงการ", "error");
          return false;
      }
      if (EditDate == "") {
          swal("แจ้งเตือน!", "กรุณาระบุวันที่สิ้นสุดโครงการ", "error");
          return false;
      }


        $.post("https://projectmanage.webclient.me/index.php/ProjectData/EditProject",
          {
            ProjectID : ProjectID,
            EditDate : EditDate,
            Comment : Comment
          },function(data){


            if (data == 1) {
                 $("#EditProject").modal("hide");
                 swal("สำเร็จ!", "แก้ไขโครงการสำเร็จ", "success");
                 $("#EditProject").find("#Preload").hide();
                 $("#EditProject").find("#Save").show();
              }else{
                 $("#EditProject").modal("hide");
                 swal("ล้มเหลว!", "กรุณาลองใหม่ภายหลัง", "error");
                 $("#EditProject").find("#Preload").hide();
                 $("#EditProject").find("#Save").show();
              }


        });
 

    });


    $("#DelProject").find("#Save").on("click",function(){

      
        var projectid = $("#DelProject").find("#ProjectID").val();
        var Comment = $("#DelProject").find("#inputComment").val();

        
        if (Comment == "") {
          swal("แจ้งเตือน!", "กรุณาระบุรายละเอียดการยกเลิกโครงการ", "error");
          return false;
        }

        $("#DelProject").find("#Preload").show();
        $("#DelProject").find("#Save").hide();


        $.post("https://projectmanage.webclient.me/index.php/ProjectData/DelProject",
          {
            ProjectID : projectid,
            Comment : Comment
          }
          ,function(data){

            if (data == 1) {
                 $("#DelProject").modal("hide");
                 swal("สำเร็จ!", "ยกเลิกโครงการสำเร็จ", "success");
                 $("#DelProject").find("#Preload").hide();
                 $("#DelProject").find("#Save").show();
              }else{
                 $("#DelProject").modal("hide");
                 swal("ล้มเหลว!", "กรุณาลองใหม่ภายหลัง", "error");
                 $("#DelProject").find("#Preload").hide();
                 $("#DelProject").find("#Save").show();
              }

        });

      //swal("แจ้งเตือน!", "ยกเลิกโครงการ", "info");
       


    });

    $("#StampProject").find("#Save").on("click",function(){

        var periodid = $("#StampProject").find("#PeriodID").val();
        var Comment = $("#StampProject").find("#inputComment").val();
         

        if (Comment == "") {
          swal("แจ้งเตือน!", "กรุณาระบุรายละเอียดการปฏิบัติงาน", "error");
          return false;
        }
          
        $("#StampProject").find("#Preload").show();
        $("#StampProject").find("#Save").hide();
        
        $.post("https://projectmanage.webclient.me/index.php/ProjectData/StampPeriodProject",
          {
            PeriodID : periodid,
            Comment : Comment
          },function(data){

              if (data == 1) {
                 $("#StampProject").modal("hide");
                 swal("สำเร็จ!", "บันทึกรายการปฏิบัติงานสำเร็จ", "success");
                 $("#StampProject").find("#Preload").hide();
                 $("#StampProject").find("#Save").show();
              }else{
                 $("#StampProject").modal("hide");
                 swal("ล้มเหลว!", "กรุณาลองใหม่ภายหลัง", "error");
                 $("#StampProject").find("#Preload").hide();
                 $("#StampProject").find("#Save").show();
              }

          });

 

    });











    ///////// Activity Method ////////















 



    $("#ModalPeriod").find("#inputEmployeeGroup1").on("change",function(){

        var Index = $("#ModalPeriod").find('#inputEmployeeGroup1 option:selected').val();
    
        $("#ModalPeriod").find("#inputEmployeeGroup2 option[value='"+Index+"']").remove();
        $("#ModalPeriod").find("#inputEmployeeGroup3 option[value='"+Index+"']").remove(); 


    });

    $("#ModalPeriod").find("#inputEmployeeGroup2").on("change",function(){


        var Index = $("#ModalPeriod").find('#inputEmployeeGroup2 option:selected').val();
    
        $("#ModalPeriod").find("#inputEmployeeGroup1 option[value='"+Index+"']").remove();
        $("#ModalPeriod").find("#inputEmployeeGroup3 option[value='"+Index+"']").remove(); 



    });

    $("#ModalPeriod").find("#inputEmployeeGroup3").on("change",function(){


        var Index = $("#ModalPeriod").find('#inputEmployeeGroup3 option:selected').val();
    
        $("#ModalPeriod").find("#inputEmployeeGroup1 option[value='"+Index+"']").remove();
        $("#ModalPeriod").find("#inputEmployeeGroup2 option[value='"+Index+"']").remove(); 



    });












    //// hide preload 
    $("#ModalPeriod").find("#Preload").hide();

    $("#ModalPeriod").find("#Save").on("click",function(){


      var ProjectName = $("#ModalPeriod").find("#inputProjectName").val(); 
      var Description = $("#ModalPeriod").find("#inputDescription").val(); 
      var ClientCompany = $("#ModalPeriod").find("#inputClientCompany").val(); 
      var EndDate = $("#ModalPeriod").find("#inputEndDate").val(); 
      var Budget = $("#ModalPeriod").find("#inputBudget").val(); 
      var PeriodDate = $("#ModalPeriod").find("#inputPeriodDate").val(); 
      var PeriodEndDate = $("#ModalPeriod").find("#inputPeriodEndDate").val(); 
      var DocFile = $('#DocFile').prop('files')[0]; 







      if (ProjectName == "") {
              //alert("Please Fill ProjectName");
              swal("ผิดพลาด!", "กรุณาระบุชื่อโครงการ", "error");
              return false;
      }
      if (Description == "") {
              //alert("Please Fill Description");
              swal("ผิดพลาด!", "กรุณาระบุรายละเอียด", "error"); 
              return false;
      }
      if (ClientCompany == "") {
              //alert("Please Fill ClientCompany");
              swal("ผิดพลาด!", "กรุณาระบุข้อมูลบริษัท", "error"); 

              return false;
      }
      if (Budget == 0) {
              //alert("Please Fill Budget");
              swal("ผิดพลาด!", "กรุณาระบุจำนวนงบประมาณ", "error"); 

              return false;
      }
      if (PeriodDate == "") {
              //alert("Please Fill PeriodDate");
              swal("ผิดพลาด!", "กรุณาระบุวันที่แจ้งเตือน", "error"); 

              return false;
      } 

      if (DocFile == undefined) {

              //alert("Please Upload Docs");
              swal("ผิดพลาด!", "กรุณาระบุเอกสารที่เกี่ยวข้อง", "error"); 

              return false;

      }

      ////////// role 
      var EmployeeGroup0 = $("#ModalPeriod").find("#inputEmployeeGroup0").val(); 
      var EmployeeRole0 = $("#ModalPeriod").find("#inputEmployeeRole0").val(); 

      var EmployeeGroup1 = $("#ModalPeriod").find("#inputEmployeeGroup1").val(); 
      var EmployeeRole1 = $("#ModalPeriod").find("#inputEmployeeRole1").val(); 

      var EmployeeGroup2 = $("#ModalPeriod").find("#inputEmployeeGroup2").val(); 
      var EmployeeRole2 = $("#ModalPeriod").find("#inputEmployeeRole2").val(); 

      var EmployeeGroup3 = $("#ModalPeriod").find("#inputEmployeeGroup3").val(); 
      var EmployeeRole3 = $("#ModalPeriod").find("#inputEmployeeRole3").val(); 



      if (EmployeeGroup1 != null) {
          if (EmployeeRole1 == null) {
              //alert("Please SelectRole1");
              swal("ผิดพลาด!", "กรุณาระบุสิทธิการเข้าถึงข้อมูลลำดับที่ 1", "error"); 

              return false;
          }
      }
      if (EmployeeGroup2 != null) {
          if (EmployeeRole2 == null) {
              //alert("Please SelectRole2");
              swal("ผิดพลาด!", "กรุณาระบุสิทธิการเข้าถึงข้อมูลลำดับที่ 2", "error"); 
              
              return false;
          }
      }
      if (EmployeeGroup3 != null) {
          if (EmployeeRole3 == null) {
              //alert("Please SelectRole3");
              swal("ผิดพลาด!", "กรุณาระบุสิทธิการเข้าถึงข้อมูลลำดับที่ 3", "error"); 
              
              return false;
          }
      }
 

      var Employee = [ { Creator : { MemberID : EmployeeGroup0, MemberRole : EmployeeRole0 } },
                       { MemberID1 : EmployeeGroup1, MemberRole : EmployeeRole1 },
                       { MemberID2 : EmployeeGroup2, MemberRole : EmployeeRole2 },
                       { MemberID3 : EmployeeGroup3, MemberRole : EmployeeRole3 } ];
 
      ////////// role 



 

       /////// getData Period /////
      var DetailPeriodArray = new Array();
      var DatePeriodArray = new Array();
        DetailPeriodStart = 0;
        DatePeriodStart = 0;
       $(".inputDetailPeriod").each(function(){

          var DetailPeriod = $(this).val().trim();

          if (DetailPeriod == "") {
              //alert("Please Fill Period Detail");
              swal("ผิดพลาด!", "กรุณาระบุข้อมูลรอบการดำเนินการโครงการ", "error"); 

              return false;
          }


          DetailPeriodArray[DetailPeriodStart] = DetailPeriod;
          DetailPeriodStart += 1;

        });
 
       $(".inputDetailPeriodDate").each(function(){

          var PeriodDate = $(this).val().trim();

          if (PeriodDate == "") {
              //alert("Please Fill Period Date");
              swal("ผิดพลาด!", "กรุณาระบุข้อมูลวันที่รอบการดำเนินการโครงการ", "error"); 

              return false;
          }

          DatePeriodArray[DatePeriodStart] = PeriodDate;
          DatePeriodStart += 1;

        });


       if (DetailPeriodStart == 0) {

              //alert("Please Add Period");
              swal("ผิดพลาด!", "กรุณาเพิ่มข้อมูลรอบการดำเนินการโครงการ", "error"); 

              return false;

        }
       if (DatePeriodStart == 0) {

              //alert("Please Fill Period Date");
              swal("ผิดพลาด!", "กรุณาระบุข้อมูลวันที่รอบการดำเนินการโครงการ", "error"); 
              
              return false;

        }

        var PeriodInfo = { Detail : DetailPeriodArray , Date : DatePeriodArray };
        //console.log(PeriodInfo);
       /////// getData Period /////


  
        var data = new FormData();      
        ////// เพิ่มข้อมูลเข้า          
        data.append('ProjectName', ProjectName); 
        data.append('Description', Description); 
        data.append('ClientCompany', ClientCompany); 
        data.append('EndDate', EndDate); 
        data.append('Budget', Budget); 
        data.append('PeriodDate', PeriodDate); 
        data.append('PeriodEndDate', PeriodEndDate); 
        data.append('DocFile', DocFile); 
        data.append('Employee', JSON.stringify(Employee) );
        data.append('PeriodInfo', JSON.stringify(PeriodInfo) );
        ////// เพิ่มข้อมูลเข้า array    
         
 




        $("#ModalPeriod").find("#Save").hide();
        $("#ModalPeriod").find("#Preload").show();

        setTimeout(function(){ 
 
              
                $.ajax({
                   url : "https://projectmanage.webclient.me/index.php/ProjectData/CreateProjectData",
                   type : "POST",
                   data : data,
                   contentType : false,
                   cache : false,
                   processData : false,
                   success : function(data){

                    console.log(data);
                    if (data == 1) {

                      $("#ModalPeriod").find("#Save").show();
                      $("#ModalPeriod").find("#Preload").hide();
                      //alert("success");
                      swal("สำเร็จ!", "ดำเนินการเพิ่มข้อมูลสำเร็จ", "success"); 
                      $("#ModalPeriod").modal("hide");
                      
                    }else{
                      swal("ผิดพลาด!", "ดำเนินการเพิ่มข้อมูลล้มเหลวกรุณาลองใหม่ภายหลัง", "error"); 

                      $("#ModalPeriod").find("#Save").show();
                      $("#ModalPeriod").find("#Preload").hide();
                      return false;
                    }


                   },
                   error : function(data){



                   }
                });
                
 
        }, 2000);











    });






























 

  $('#CreateProject').click(function() {
  
      $('#ModalPeriod').modal({
        backdrop: 'static', 
        keyboard: false
      });

    });

    



    var htmladd = 0;
    $("#addRow").click(function () {
        var html = ''; 
        htmladd += 1;
            
        html += '<div class="row" id="inputDetailPeriodRow">';
        html += '<div class="col-7">';
        html += '<div class="form-group">';
        html += '<label for="inputPeriodDate">รายละเอียด</label>';
        html += '<input type="text" id="inputDetailPeriod" class="form-control inputDetailPeriod">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-3">';
        html += '<div class="form-group">';
        html += '<label for="inputDetailPeriodDate">วันที่</label>';
        html += '<input type="text" id="inputDetailPeriodDate'+htmladd+'" class="form-control inputDetailPeriodDate datepickerclass1 ">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-2">';
        html += '<div class="form-group">';
        html += '<label for="removeRow">ลบ</label>';
        html += '<button id="removeRow" type="button" class="btn btn-danger form-control">X</button>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
 
        $('#newRow').append(html);



        $("#inputDetailPeriodDate"+htmladd).datepicker({
            uiLibrary: 'bootstrap4',
            minDate: 0,
            dateFormat: 'yy-mm-dd'
        });


 

    });

    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputDetailPeriodRow').remove();
    });

    $(document).on('click', '.datepickerclass1', function () { 


          


    });




    //////// Date picker init ///////

    $(".datepickerclass").datepicker({
            uiLibrary: 'bootstrap4',
            minDate: 0,
            dateFormat: 'yy-mm-dd'
    });

    //////// Date picker init ///////



 





    });
</script>