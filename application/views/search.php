<?php print_r($ProjectINFO); ?>
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

                <div class="container">
                  
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


                          <tr>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td><a href="https://projectmanage.webclient.me/index.php/home/projectinfo/" class="btn btn-primary btn-sm">ดูข้อมูล</a></td> 
                          
                          </tr>



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