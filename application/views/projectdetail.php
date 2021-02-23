<?php print_r($GroupSign); ?>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

          <div class="card-tools">
             
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row"> 
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">งบประมาณโครงการ</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo number_format($ProjectINFO["ProjectInfo"][0]->Budget,2); ?> บาท</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">รายการดำเนินโครงการ</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $ProjectINFO["ProjectInfo"][0]->CoutPreiod; ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>บันทึกผลช่วงการดำเนินโครงการ</h4>
                     



                  <?php 

                  for ($i=0; $i < count($ProjectINFO["Period"]); $i++) {  
                    ?>


                    

                    <div class="post clearfix">
                      <div class="user-block">  
                        <small>
                         วันที่ <?php echo  '<font color="red">'.$ProjectINFO["Period"][$i]->DueDate.'</font>'; ?>
                        </small> 
                        <small> 
                         <?php 
                          if ($ProjectINFO["Period"][$i]->SignStatus == "" ) {
                            echo '<font color="red">รอลงบันทึก</font>';
                          }else{

                            echo '<font color="green">บันทึกโดย '.$ProjectINFO["Period"][$i]->SignStatus.'</font>';
                          }
                          ?>
                        </small> 
                        <span class="username">
                           <?php echo $ProjectINFO["Period"][$i]->PeriodDetail; ?> 
                        
                           <p> 
                           <?php 
                            if ($ProjectINFO["Period"][$i]->Comment == "" ) {
                              echo '<font color="red">ไม่มีบันทึกภายใน</font>';
                            }else{

                              echo '<font color="green">'.$ProjectINFO["Period"][$i]->Comment.'</font>';
                            }
                            ?>
                          </p> 

                        </span> 
                      </div>   
                    </div>
 

                  <?php
                  }

                   ?>

                     

                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><?php echo $ProjectINFO["ProjectInfo"][0]->Name; ?></h3>
              <p class="text-muted"><?php echo $ProjectINFO["ProjectInfo"][0]->Detail; ?></p>
              <br>
              <div class="text-muted">
                <p class="text-sm">ลูกค้า
                  <b class="d-block"><?php echo $ProjectINFO["ProjectInfo"][0]->ClientCompany; ?></b>
                </p>
                <p class="text-sm">ผู้ดูแลโครงการ
                  <b class="d-block"><?php echo $ProjectINFO["ProjectInfo"][0]->CreateMemberName; ?></b>
                </p>

                <p class="text-sm">วันส่งมอบ
                  <b class="d-block"><?php echo $ProjectINFO["ProjectInfo"][0]->EndDate; ?></b>
                </p>

                <p class="text-sm">บันทึกข้อความการแก้ไข
                  <b class="d-block"><?php echo $ProjectINFO["ProjectInfo"][0]->Remark; ?></b>
                </p>



                <p class="text-sm">ผู้เกี่ยวข้อง

                  <?php

                  for ($i=0; $i < count($GroupSign); $i++) { 
                    ?>

                      <b class="d-block"><?php echo $GroupSign[$i]->name; ?></b> <br>


                    ?>  
                  }

                   ?>
                  
                
                </p>
              



              </div>

              <h5 class="mt-5 text-muted">เอกสารโครงการ</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo $ProjectINFO["ProjectInfo"][0]->DocFile; ?>" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> <?php echo basename($ProjectINFO["ProjectInfo"][0]->DocFile); ?></a>
                </li>   
              </ul>
              <div class="text-center mt-5 mb-3"> 


              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>