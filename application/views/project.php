
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="CreateProjectTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#infoPanel" role="tab">รายละเอียด</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#budgetPanel" role="tab">งบประมาณ</a>
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
            <h4>Information</h4>
            



















            <button class="btn btn-secondary" id="infoContinue">ต่อไป</button>
          </div>




          <div class="tab-pane fade" id="ads" role="tabpanel">
            <h4>Ads</h4>
             



















            <button class="btn btn-secondary" id="budgetContinue">ต่อไป</button>
          </div>




          <div class="tab-pane fade" id="documentPanel" role="tabpanel">
            <h4>document</h4>
             

















            <button class="btn btn-secondary" id="documentContinue">ต่อไป</button>
          </div>
          <div class="tab-pane fade" id="SignGroupPanel" role="tabpanel">
            <h4>SignGroup</h4>
           













            <button class="btn btn-secondary" id="SignGroupContinue">ต่อไป</button>
          </div>
           
          <div class="tab-pane fade" id="TimeLinePanel" role="tabpanel">
            <h4>TimeLine</h4>











 









          </div>








        </div>

     <!--
        <div class="progress mt-5">
          <div class="modalprogress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
        </div>
     -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">บันทึกผล</button>
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






    <script type="text/javascript">
  $(function () {




  $('#CreateProject').click(function() {
    $('#ModalPeriod').modal({
      backdrop: 'static', 
      keyboard: false
    });
  });

 
  $('#infoContinue').click(function (e) {
    e.preventDefault(); 
    $('#CreateProjectTab a[href="#budgetPanel"]').tab('show');
  });


 
  $('#budgetContinue').click(function (e) {
    e.preventDefault(); 
    $('#CreateProjectTab a[href="#documentPanel"]').tab('show');
  });





  $('#documentContinue').click(function (e) {
    e.preventDefault(); 
    $('#CreateProjectTab a[href="#SignGroupPanel"]').tab('show');
  });




  $('#SignGroupContinue').click(function (e) {
    e.preventDefault(); 
    $('#CreateProjectTab a[href="#TimeLinePanel"]').tab('show');
  });
  




 





})
</script>