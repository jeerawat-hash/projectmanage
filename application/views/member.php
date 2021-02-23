 <?php print_r($MemberINFO); ?>
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



<script type="text/javascript">
  $(document).ready(function() {
  
    $('#MemberTable').DataTable();
  
  } );
</script>