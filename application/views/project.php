
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">







      <!-- Default box -->
      <div class="card">
        <div class="card-header">
         <!-- <h3 class="card-title">Projects</h3> -->

         <button class="btn btn-primary btn-sm" id="modalToggle">
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

<div id="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="wizard-title">เพิ่มโครงการ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#infoPanel" role="tab">รายละเอียด</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ads" role="tab">งบประมาณ</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#placementPanel" role="tab">เอกสารที่เกี่ยวข้อง</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#schedulePanel" role="tab">ผู้รับผิดชอบ</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#reviewPanel" role="tab">ช่วงการปฏิบัติงาน</a>
          <li>
        </ul>
        
        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="infoPanel" role="tabpanel">
            <h4>Information</h4>
            <div class="form-group">
              <label for="campaignName">Campaign Name</label>
              <input type="text" class="form-text" id='campaignName'></input>
            </div>
            <button class="btn btn-secondary" id="infoContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="ads" role="tabpanel">
            <h4>Ads</h4>
            <div class="form-group">
              <label for="exampleInputFile">Fullscreen Ad Image</label>
              <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">Select a file to use as the fullscreen ad image. Please ensure the size is at least 1080x1920 with a 9:16 (portrait) aspect ratio.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Banner Ad Image</label>
              <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">Select a file to use as the banner ad image. Please ensure the size is exactly 1080x450 for proper rendering.</small>
            </div>
            <button class="btn btn-secondary" id="adsContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="placementPanel" role="tabpanel">
            <h4>Placement</h4>
            <div id="accordion" class="mb-3" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Entire Venue
                    </a>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block">
                    <div class="form-group">
                      <label for="venueSelect">Select a Venue</label>
                      <select class="form-control" id="venueSelect">
                        <option selected disabled>Choose a venue</option>
                        <option>Venue 1</option>
                        <option>Venue 2</option>
                        <option>Venue 3</option>
                        <option>Venue 4</option>
                        <option>Venue 5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Specific Kiosks
                    </a>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block">
                    <div class="form-group">
                      <label for="kioskSelectVenue">First, choose a venue.</label>
                      <select class="form-control" id="kioskSelectVenue">
                        <option selected disabled>Choose a venue</option>
                        <option>Venue 1</option>
                        <option>Venue 2</option>
                        <option>Venue 3</option>
                        <option>Venue 4</option>
                        <option>Venue 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect2">Then select kiosks (you can select multiple)</label>
                      <select multiple class="form-control" id="exampleSelect2">
                        <option>Kiosk 1</option>
                        <option>Kiosk 2</option>
                        <option>Kiosk 3</option>
                        <option>Kiosk 4</option>
                        <option>Kiosk 5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Specific Screens
                    </a>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="card-block">
                    <div class="form-group">
                      <label for="kioskSelectVenue">First, choose a venue.</label>
                      <select class="form-control" id="kioskSelectVenue">
                        <option selected disabled>Choose a venue</option>
                        <option>Venue 1</option>
                        <option>Venue 2</option>
                        <option>Venue 3</option>
                        <option>Venue 4</option>
                        <option>Venue 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect2">Then select screens (you can select multiple)</label>
                      <select multiple class="form-control" id="exampleSelect2">
                        <option>Kiosk 1 - Screen 1</option>
                        <option>Kiosk 1 - Screen 2</option>
                        <option>Kiosk 2 - Screen 1</option>
                        <option>Kiosk 2 - Screen 2</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-secondary" id="placementContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="schedulePanel" role="tabpanel">
            <h4>Schedule</h4>
            <div id="scheduleAccordion" class="mb-3" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Start and Stop Date
                    </a>
                  </h5>
                </div>

                <div id="scheduleAccordioncollapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block">
                    <div class="form-group row">
                      <label for="example-date-input" class="col-2 col-form-label">Start Date</label>
                      <div class="col-10">
                        <input class="form-control" type="date" value="2018-01-09" id="start-date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-date-input" class="col-2 col-form-label">Stop Date</label>
                      <div class="col-10">
                        <input class="form-control" type="date" value="2018-01-09" id="stop-date">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Rules for Specific Days
                    </a>
                  </h5>
                </div>
                <div id="scheduleAccordioncollapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block">
                    <h6>Play on the following days (check all that apply)</h6>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="sunday">
                        Sunday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="monday">
                        Monday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="tuesday">
                        Tuesday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="wednesday">
                        Wednesday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="thursday">
                        Thursday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="friday">
                        Friday
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="saturday">
                        Saturday
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Rules for Specific Times
                    </a>
                  </h5>
                </div>
                <div id="scheduleAccordioncollapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="card-block">
                    <h6>Play during the following timeframes (applies to each day)</h6>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">Start Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="13:45:00" id="start-time">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">End Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="13:45:00" id="end-time">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-secondary" id="scheduleContinue">Continue</button>
          </div>
          <div class="tab-pane fade" id="reviewPanel" role="tabpanel">
            <h4>Review</h4>
            <button class="btn btn-primary btn-block" id="activate">Activate this Campaign!</button>
          </div>
        </div>
        
     <!--
        <div class="progress mt-5">
          <div class="modalprogress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
        </div>
     -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save for later</button>
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




  $('#modalToggle').click(function() {
    $('#modal').modal({
      backdrop: 'static'
    });
  });






  $('#infoContinue').click(function (e) {
    e.preventDefault();
    $('.modalprogress-bar').css('width', '40%');
    $('.modalprogress-bar').html('Step 2 of 5');
    $('#myTab a[href="#ads"]').tab('show');
  });







  $('#adsContinue').click(function (e) {
    e.preventDefault();
    $('.modalprogress-bar').css('width', '60%');
    $('.modalprogress-bar').html('Step 3 of 5');
    $('#myTab a[href="#placementPanel"]').tab('show');
  });





  $('#placementContinue').click(function (e) {
    e.preventDefault();
    $('.modalprogress-bar').css('width', '80%');
    $('.modalprogress-bar').html('Step 4 of 5');
    $('#myTab a[href="#schedulePanel"]').tab('show');
  });




  $('#scheduleContinue').click(function (e) {
    e.preventDefault();
    $('.modalprogress-bar').css('width', '100%');
    $('.modalprogress-bar').html('Step 5 of 5');
    $('#myTab a[href="#reviewPanel"]').tab('show');
  });
  





  $('#activate').click(function (e) {
    e.preventDefault();
    var formData = {
      campaign_name: $('#campaignName').val(),
      start_date: $('#start-date').val(),
      end_date: $('#end-date').val(),
      days: {
        sunday: $('#sunday').prop('checked'),
        monday: $('#monday').prop('checked'),
        tuesday: $('#tuesday').prop('checked'),
        wednesday: $('#wednesday').prop('checked'),
        thurday: $('#thursday').prop('checked'),
        friday: $('#friday').prop('checked'),
        saturday: $('#saturday').prop('checked'),
      },
      start_time: $('#start-time').val(),
      end_time: $('#end-time').val()
    }
    alert(JSON.stringify(formData));
  })





})
</script>