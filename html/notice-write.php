<?php include("include/head.php"); ?>

  <body>
    <div class="be-wrapper">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">

        <div class="main-content container-fluid">
          <div class="email-head">
            <div class="email-head-title">Compose new notice<span class="icon mdi mdi-edit"></span></div>
          </div>
          <div class="email-compose-fields">
            <div class="subject">
              <div class="form-group row pt-2">
                <label class="col-md-1 control-label">제목</label>
                <div class="col-md-11">
                  <input class="form-control" type="text">
                </div>
              </div>
            </div>
            <div class="attachments">
              <div class="form-group row">
                <label class="col-12 col-sm-1 col-form-label" for="file-1">첨부파일</label>
                <div class="col-12 col-sm-6">
                  <input class="inputfile" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple>
                  <label class="btn-secondary" for="file-1"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label>
                </div>
              </div>
            </div>
          </div>
          <div class="email editor">
            <div id="email-editor"></div>
          </div>
          <div class="row invoice-footer mt30">
            <div class="col-lg-12">
              <a href="javascript:history.back()" class="btn btn-lg btn-space btn-secondary">취소</a>
              <button type="submit" class="btn btn-lg btn-space btn-primary">등록</button>
            </div>
          </div>
        </div>

      </div>

    </div><!-- be-wrapper -->
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>

    <!-- write -->
    <script src="assets/lib/summernote/summernote-bs4.min.js" type="text/javascript"></script>
    <script src="assets/lib/summernote/summernote-ext-beagle.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/js/app-mail-compose.js" type="text/javascript"></script>

    <!-- file -->
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="assets/js/app-form-elements.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.mailCompose();
        App.formElements();
      });
    </script>
  </body>
</html>