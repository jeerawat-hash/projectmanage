 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">ข้อมูลโครงการ</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">

                <div class="container" style="overflow-x:auto;"> 

                  <table id="ProjectTable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ชื่อ</th>
                              <th>วันส่งมอบ</th>
                              <th>สถานะส่งมอบ</th>
                              <th>สถานะโครงการ</th>
                              <th></th> 
                          </tr>
                      </thead>
                      <tbody>

                        <?php 

                        foreach ($ProjectINFO as $value) {

                          if ($value->IsSuccess == 1) {
                              $value->IsSuccess = '<font color="green">สำเร็จ</font>';
                          }else{
                              $value->IsSuccess = '<font color="red">อยู่ระหว่างดำเนินการ</font>';
                          }

                          if ($value->IsCancel == 0) {
                              $value->IsCancel = '<font color="green">ปกติ</font>';
                          }else{
                              $value->IsCancel = '<font color="red">ยกเลิกโครงการ</font>';
                          }

                        ?> 

                          <tr>
                              <td><?php echo $value->Name; ?></td>
                              <td><?php echo $value->EndDate; ?></td>
                              <td><?php echo $value->IsSuccess; ?></td>
                              <td><?php echo $value->IsCancel; ?></td>
                              <td><a href="https://blueprojectmanagement.com/index.php/home/projectinfo/<?php echo $value->ID; ?>" class="btn btn-primary btn-sm">ดูข้อมูล</a></td> 
                          
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



<script type="text/javascript">
  $(document).ready(function() {
  
    $('#ProjectTable').DataTable();
  
  } );
</script>