<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="be-aside-header">
            <div class="row justify_end align_center">
              <div class="col-lg-6">
                <div class="be-aside-header-search">
                  <div class="input-group input-search input-group-sm">
                    <input class="form-control" type="text" placeholder="Search" name="sch_word"><span class="input-group-btn"><button class="btn btn-secondary" type="button" id="btn_search"><i class="icon mdi mdi-search"></i></button></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card card-table">
                <div class="card-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover custom-controls-stacked">
                      <colgroup>
                        <col class="c5">
                        <col class="c15">
                        <col class="c50">
                        <col class="c5">
                        <col class="c5">
                        <col class="c10">
                        <col class="c10">
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">번호</th>
                          <th scope="col">코드</th>
                          <th scope="col">코드명</th>
                          <th scope="col">순서</th>
                          <th scope="col">삭제</th>
                          <th scope="col">등록일</th>
                          <th scope="col">수정</th>
                        </tr>
                      </thead>
                      <tbody>

<tr>
  <td>28</td>
  <td><div class="row m-0"><input type="text" id="code_type_39" class="form-control form-control-sm col-sm-9" name="code_type_39" value="PG"/><button type="button" onclick="javascript:sub_view(39);" id="detail_39" class="btn btn-sm btn-primary">▼</button></div></td>
  <td><input type="text" id="code_type_name_39" class="form-control form-control-sm" name="code_type_name_39" value="PG사 (Pay Gateway)"/></td>
  <td></td>
  <td><label for="delete_yn_39" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="delete_yn_39" id="delete_yn_39" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td class="cell-detail">2018-08-24 <span class="cell-detail-description">11:11:09</span></td>
  <td><a href="javascript:;" class="mdi mdi-settings code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="수정"><i class="blind">수정</i></a></td>
</tr>
<tr class="sub_39 sub_tr">
  <td></td>
  <td><input type="text" id="code_39" class="form-control form-control-sm" name="code_39" value=""/>
    </td>
  <td><input type="text" id="code_name_39" class="form-control form-control-sm" name="code_name_39"/></td>
  <td><input type="text" id="code_order_39" class="form-control form-control-sm" name="code_order_39" value=""/></td>
  <td><label for="sub_write_delete_yn_39" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="sub_write_delete_yn_39" id="sub_write_delete_yn_39" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td></td>
  <td><a href="javascript:;" class="mdi mdi-collection-plus code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="등록"><i class="blind">등록</i></a></td>
</tr>
<tr class="sub_39 sub_tr">
  <td></td>
  <td><input type="text" id="edit_code_144" class="form-control form-control-sm" name="edit_code_144" value="KCP"/>
    </td>
  <td><input type="text" id="edit_code_name_144" class="form-control form-control-sm" name="edit_code_name_144" value="KCP"/></td>
  <td><input type="text" id="edit_code_order_144" class="form-control form-control-sm" name="edit_code_order_144" value="1"/></td>
  <td><label for="sub_edit_delete_yn_144" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="sub_edit_delete_yn_144" id="sub_edit_delete_yn_144" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td class="cell-detail">2018-08-24 <span class="cell-detail-description">11:11:09</span></td>
  <td><a href="javascript:;" class="mdi mdi-settings code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="수정"><i class="blind">수정</i></a></td>
</tr>
<tr class="sub_39 sub_tr">
  <td></td>
  <td><input type="text" id="edit_code_145" class="form-control form-control-sm" name="edit_code_145" value="NPAY"/>
    </td>
  <td><input type="text" id="edit_code_name_145" class="form-control form-control-sm" name="edit_code_name_145" value="네이버페이"/></td>
  <td><input type="text" id="edit_code_order_145" class="form-control form-control-sm" name="edit_code_order_145" value="2"/></td>
  <td><label for="sub_edit_delete_yn_145" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="sub_edit_delete_yn_145" id="sub_edit_delete_yn_145" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td class="cell-detail">2018-08-24 <span class="cell-detail-description">11:11:09</span></td>
  <td><a href="javascript:;" class="mdi mdi-settings code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="수정"><i class="blind">수정</i></a></td>
</tr>
<tr class="sub_39 sub_tr">
  <td></td>
  <td><input type="text" id="edit_code_146" class="form-control form-control-sm" name="edit_code_146" value="KPAY"/>
    </td>
  <td><input type="text" id="edit_code_name_146" class="form-control form-control-sm" name="edit_code_name_146" value="카카오페이"/></td>
  <td><input type="text" id="edit_code_order_146" class="form-control form-control-sm" name="edit_code_order_146" value="3"/></td>
  <td><label for="sub_edit_delete_yn_146" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="sub_edit_delete_yn_146" id="sub_edit_delete_yn_146" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td class="cell-detail">2018-08-24 <span class="cell-detail-description">11:11:09</span></td>
  <td><a href="javascript:;" class="mdi mdi-settings code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="수정"><i class="blind">수정</i></a></td>
</tr>
<tr class="sub_39 sub_tr">
  <td></td>
  <td><input type="text" id="edit_code_147" class="form-control form-control-sm" name="edit_code_147" value="KGB"/>
    </td>
  <td><input type="text" id="edit_code_name_147" class="form-control form-control-sm" name="edit_code_name_147" value="KG모빌리언스"/></td>
  <td><input type="text" id="edit_code_order_147" class="form-control form-control-sm" name="edit_code_order_147" value="4"/></td>
  <td><label for="sub_edit_delete_yn_147" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="sub_edit_delete_yn_147" id="sub_edit_delete_yn_147" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td class="cell-detail">2018-08-24 <span class="cell-detail-description">11:11:09</span></td>
  <td><a href="javascript:;" class="mdi mdi-settings code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="수정"><i class="blind">수정</i></a></td>
</tr>
<tr class="sub_39 sub_tr">
  <td></td>
  <td><input type="text" id="edit_code_148" class="form-control form-control-sm" name="edit_code_148" value="PAYCO"/>
    </td>
  <td><input type="text" id="edit_code_name_148" class="form-control form-control-sm" name="edit_code_name_148" value="NHN 페이코"/></td>
  <td><input type="text" id="edit_code_order_148" class="form-control form-control-sm" name="edit_code_order_148" value="5"/></td>
  <td><label for="sub_edit_delete_yn_148" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="sub_edit_delete_yn_148" id="sub_edit_delete_yn_148" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td class="cell-detail">2018-08-24 <span class="cell-detail-description">11:11:09</span></td>
  <td><a href="javascript:;" class="mdi mdi-settings code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="수정"><i class="blind">수정</i></a></td>
</tr>
<tr class="sub_39 sub_tr">
  <td></td>
  <td><input type="text" id="edit_code_149" class="form-control form-control-sm" name="edit_code_149" value="PAYNOW"/>
    </td>
  <td><input type="text" id="edit_code_name_149" class="form-control form-control-sm" name="edit_code_name_149" value="LGU+ 페이나우"/></td>
  <td><input type="text" id="edit_code_order_149" class="form-control form-control-sm" name="edit_code_order_149" value="6"/></td>
  <td><label for="sub_edit_delete_yn_149" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="sub_edit_delete_yn_149" id="sub_edit_delete_yn_149" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
  <td class="cell-detail">2018-08-24 <span class="cell-detail-description">11:11:09</span></td>
  <td><a href="javascript:;" class="mdi mdi-settings code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="수정"><i class="blind">수정</i></a></td>
</tr>
<tr>
  <td colspan="7">&nbsp;</td>
</tr>
<tr>
    <td></td>
    <td><input type="text" id="code_type" class="form-control form-control-sm" name="code_type" value=""></td>
    <td><input type="text" id="code_type_name" class="form-control form-control-sm" name="code_type_name" value=""></td>
    <td></td>
    <td><label for="delete_yn" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="delete_yn" id="delete_yn" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>

    <td></td>
    <td><a href="javascript:;" class="mdi mdi-collection-plus code_settings" ct_pkid="" data-toggle="tooltip" data-placement="left" title="" data-original-title="등록"><i class="blind">등록</i></a></td>
</tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
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

    <!-- Select Filter -->
    <script src="assets/js/app-booking.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
        App.init();
      	App.booking();
      });
    </script>

<script>
    function sub_view(pkid){
        if($(".sub_"+pkid).css("display") == 'none')
            $("#detail_"+pkid).text('▲')
        else
            $("#detail_"+pkid).text('▼')

        $(".sub_"+pkid).toggle();
    }
</script>
  </body>
</html>