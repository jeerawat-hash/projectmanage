
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
                              <i class="fas fa-pencil-alt">
                              </i>
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
          <table class="table table-striped projects">
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
              <tbody>
                  <tr> 
                      <td>
                          <a>
                              ระบบบริการโครงการ
                          </a>
                          <br/>
                          <small>
                              สร้างวันที่ 01-01-2019
                          </small>
                          <br>
                          <small>
                              กำหนดส่ง 01-01-2020
                          </small>
                      </td>
                      
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                             ดำเนินการแล้ว 57%
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-warning">ดำเนินการ</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              ดูข้อมูล
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              แก้ไข
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              ลบ
                          </a>
                      </td>
                  </tr>
                  
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
                  <label for="inputName">ชื่อโครงการ</label>
                  <input type="text" id="inputName" class="form-control">
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
                    <label for="inputBudget">งบประมาณโครงการ</label>
                    <input type="number" id="inputBudget" class="form-control">
                  </div> 
                  <div class="form-group">
                    <label for="inputPeriodDate">ช่วงเวลาก่อนตรวจความคืบหน้า</label>
                    <input type="number" id="inputPeriodDate" class="form-control">
                  </div>
                </div> 



  


          </div>




          <div class="tab-pane fade" id="documentPanel" role="tabpanel">
            <h4>เอกสารที่เกี่ยวข้อง</h4>
             

            <div class="card-body">
            <div class="form-group">

              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="filename">
                <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
              </div>

            </div>
          </div>
















 
          </div>
          <div class="tab-pane fade" id="SignGroupPanel" role="tabpanel">
            <h4>กลุ่มผู้รับผิดชอบโครงการ</h4>
           
            <div class="card-body">
            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <label for="inputNameStatus">ชื่อ</label>
                  <select id="inputNameStatus" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                  </select>
                </div>
              </div>
              <div class="col-4">
                
                <div class="form-group">
                  <label for="inputRoleStatus">สิทธิการใช้งาน</label>
                  <select id="inputRoleStatus" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option>อ่าน</option>
                    <option>อ่าน/บันทึกผล</option>
                    <option>อ่าน/บันทึกผล/แก้ไข</option>
                  </select>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <label for="inputNameStatus">ชื่อ</label>
                  <select id="inputNameStatus" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                  </select>
                </div>
              </div>
              <div class="col-4">
                
                <div class="form-group">
                  <label for="inputRoleStatus">สิทธิการใช้งาน</label>
                  <select id="inputRoleStatus" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option>อ่าน</option>
                    <option>อ่าน/บันทึกผล</option>
                    <option>อ่าน/บันทึกผล/แก้ไข</option>
                  </select>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <label for="inputNameStatus">ชื่อ</label>
                  <select id="inputNameStatus" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                  </select>
                </div>
              </div>
              <div class="col-4">
                
                <div class="form-group">
                  <label for="inputRoleStatus">สิทธิการใช้งาน</label>
                  <select id="inputRoleStatus" class="form-control custom-select">
                    <option selected disabled>กรุณาเลือก</option>
                    <option>อ่าน</option>
                    <option>อ่าน/บันทึกผล</option>
                    <option>อ่าน/บันทึกผล/แก้ไข</option>
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

        <button type="button" class="btn btn-warning">บันทึก</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ออก</button>
      </div>
    </div>
  </div>
</div>
<!---- Modal Create Project ------>







































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




 

  $('#CreateProject').click(function() {
  
      $('#ModalPeriod').modal({
        backdrop: 'static', 
        keyboard: false
      });

    });

    




    $("#addRow").click(function () {
        var html = '';
            
        html += '<div class="row" id="inputDetailPeriodRow">';
        html += '<div class="col-7">';
        html += '<div class="form-group">';
        html += '<label for="inputPeriodDate">รายละเอียด</label>';
        html += '<input type="text" id="inputDetailPeriod" class="form-control">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-3">';
        html += '<div class="form-group">';
        html += '<label for="inputDetailPeriodDate">วันที่</label>';
        html += '<input type="text" id="inputDetailPeriodDate" class="form-control">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">ลบ</button>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
 
        $('#newRow').append(html);
    });

    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputDetailPeriodRow').remove();
    });






 





    });
</script>