<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row be-booking-promos">
            <div class="col-12">
              <div class="card">
                <div class="card-header card-header-divider">권한 설정</div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-sm-2">
                      <label for="group_id">그룹ID</label>
                      <select id="group_id" name="group_id" class="select2 select2-sm">
                        <option value="group1">그룹1</option>
                        <option value="group2">그룹2</option>
                        <option value="group3">그룹3</option>
                        <option value="group4">그룹4</option>
                        <option value="group5">그룹5</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="group_name">그룹명</label>
                      <input class="form-control form-control-sm" id="group_name" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="memo">메모</label>
                      <input class="form-control form-control-sm" id="memo" type="text" placeholder="">
                    </div>
                  </div>

                  <div id="all_menu_list" class="row">
                    <div class="form-group col-sm-2">
                      <label class="custom-control custom-checkbox" for="all_menu"><input id="all_menu" class="custom-control-input check_all" type="checkbox"><span class="custom-control-label">모두선택</span></label>
                    </div>
                    <div class="form-group col-sm-10 custom-controls-stacked">
                      <label class="custom-control custom-checkbox" for="m_id_all_R"><input class="custom-control-input" type="checkbox" class="c3" id="m_id_all_R" name="m_id_all_R" value="1" /><span class="custom-control-label">조회</span></label>
                      <label class="custom-control custom-checkbox" for="m_id_all_C"><input class="custom-control-input" type="checkbox" class="c3" id="m_id_all_C" name="m_id_all_C" value="2" /><span class="custom-control-label">등록/수정</span></label>
                      <label class="custom-control custom-checkbox" for="m_id_all_D"><input class="custom-control-input" type="checkbox" class="c3" id="m_id_all_D" name="m_id_all_D" value="4" /><span class="custom-control-label">삭제</span></label>
                    </div>
                  </div>

                  <div class="">
                    <div id="M_ID_00001_list" class="form-group row">
                      <div class="col-sm-2">
                        <label class="custom-control custom-checkbox" for="M_ID_00001"><input id="M_ID_00001" class="custom-control-input check_all" type="checkbox"><span class="custom-control-label">환경설정</span></label>
                      </div>
                      <div class="col-sm-10 custom-controls-stacked">
                        <label class="custom-control custom-checkbox" for="m_id_all_R"><input class="custom-control-input" type="checkbox" class="c3" id="m_id_all_R" name="m_id_all_R" value="1" /><span class="custom-control-label">조회</span></label>
                        <label class="custom-control custom-checkbox" for="m_id_all_C"><input class="custom-control-input" type="checkbox" class="c3" id="m_id_all_C" name="m_id_all_C" value="2" /><span class="custom-control-label">등록/수정</span></label>
                        <label class="custom-control custom-checkbox" for="m_id_all_D"><input class="custom-control-input" type="checkbox" class="c3" id="m_id_all_D" name="m_id_all_D" value="4" /><span class="custom-control-label">삭제</span></label>
                      </div>
                    </div>
                  </div>

                  <div class="custom-controls-stacked">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row invoice-footer">
            <div class="col-lg-12">
              <a href="group-write.php" class="btn btn-lg btn-space btn-primary">등록</a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- be-wrapper -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- form -->
    <script src="assets/lib/summernote/summernote-bs4.min.js"></script>
    <script src="assets/lib/summernote/summernote-ext-beagle.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/lib/select2/js/select2.full.min.js"></script>
    <script src="assets/js/app-mail-compose.js"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="assets/js/app-form-elements.js"></script>

    <!-- menu -->
    <script src="assets/lib/jquery.nestable/jquery.nestable.js"></script>
    <script src="assets/js/app-ui-nestable-lists.js"></script>

    <!-- Select Filter -->
    <script src="assets/js/app-booking.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.booking();
      });
    </script>


<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click', '.check_all, .c2', function(e){
            var area = $(this).attr("id");
            if( $(this).is(":checked") ){
                $("#"+area+"_list").find(":input[type=checkbox]").each(function(){
                    $(this).prop("checked", true);
                });
            }else{
                $("#"+area+"_list").find(":input[type=checkbox]").each(function(){
                    $(this).prop("checked", false);
                });
            }
        });

    });

    //-->
</script>

  </body>
</html>