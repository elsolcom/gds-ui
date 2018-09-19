<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="be-aside-header">
            <div class="row justify_end align_center">
              <div class="col-lg-2 text-right">
                <label class="custom-control custom-checkbox custom-control-inline m-0" for="delete_yn"><input type="checkbox" id="delete_yn" name="delete_yn" value="Y" class="custom-control-input"><span class="custom-control-label">삭제포함</span></label>
              </div>
              <div class="col-lg-2">
                <select id="biz_area" name="biz_area" class="select2 select2-sm">
                  <option value="">전체</option>
                  <option value="BRD">블랑드</option>
                  <option value="COS">코스메리트</option>
                  <option value="JMU">진마유</option>
                  <option value="KMZ">카마존</option>
                  <option value="MELIKE">난이거</option>
                  <option value="NBR">누벨르</option>
                  <option value="RETTEB">리탭</option>
                  <option value="YS">영시</option>
                </select>
              </div>
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
                    <table class="table table-striped table-hover">
                      <colgroup>
                        <col class="c10">
                        <col class="c40">
                        <col class="c50">
                      </colgroup>
                      <thead>
                        <tr>
                          <th scope="col">상품번호</th>
                          <th scope="col">상품명</th>
                          <th scope="col">설명</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr> 
                          <td>1452</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">CLP_campaign_CONTENT 스이거 CLP (stress)</a>

                          </td>
                          <td>GA &gt;&gt; CLP &gt;&gt; ga:campaign &gt;&gt; 난이거-스이거 CLP (stress)</td>
                        </tr>
                        <tr> 
                          <td>1451</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">CLP_campaign_CONTENT 치이거 CLP (chicken)</a></td>
                          <td>GA &gt;&gt; CLP &gt;&gt; ga:campaign &gt;&gt; 난이거-치이거 CLP (chicken)</td>
                        </tr>
                        <tr> 
                          <td>1434</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_campaign DR</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:campaign &gt;&gt; 난이거-@_dr_</td>
                        </tr>
                        <tr> 
                          <td>1433</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_campaign DA</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:campaign &gt;&gt; 난이거-@_da_</td>
                        </tr>
                        <tr> 
                          <td>1432</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_campaign SAB</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:campaign &gt;&gt; 난이거-@_sab_</td>
                        </tr>
                        <tr> 
                          <td>1431</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_campaign SA</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:campaign &gt;&gt; 난이거-@_sa_</td>
                        </tr>
                        <tr> 
                          <td>1414</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_medium organic</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:medium &gt;&gt; 난이거-@organic</td>
                        </tr>
                        <tr> 
                          <td>1413</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_medium viral</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:medium &gt;&gt; 난이거-@viral</td>
                        </tr>
                        <tr> 
                          <td>1412</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_medium cpc</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:medium &gt;&gt; 난이거-@cpc</td>
                        </tr>
                        <tr> 
                          <td>1411</td>
                          <td><a href="#" class="md-trigger" data-modal="md-scale">GROWTH_medium referral</a></td>
                          <td>GA &gt;&gt; 그로스데이터 &gt;&gt; ga:medium &gt;&gt; 난이거-@referral</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row be-datatable-footer">
                    <ul class="pagination justify_end col-12 m-0">
                      <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span class="mdi mdi-more" aria-hidden="true"></span></a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#">6</a></li>
                      <li class="page-item"><a class="page-link" href="#">7</a></li>
                      <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span class="mdi mdi-more" aria-hidden="true"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-container modal-effect-3 colored-header colored-header-primary full-width" id="md-scale">
            <div class="modal-content">
              <div class="modal-header modal-header-colored">
                <h3 class="modal-title">CLP_campaign_CONTENT 스이거 CLP (stress)</h3>
                <button class="close modal-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
              </div>
              <div class="modal-body">
                <div class="form-group row">
                  <label class="col-3 col-lg-9 col-form-label text-right" for="store_no">매장</label>
                  <div class="col-9 col-lg-3">
                    <select id="store_no" name="store_no" class="select2 select2-sm">
                      <option value="">선택</option>
                      <option value="1">공식몰(Cafe24)</option>
                      <option value="2">스토어팜</option>
                      <option value="3">셀메이트</option>
                      <option value="5">11번가</option>
                      <option value="6">티몬</option>
                      <option value="7">GS SHOP</option>
                      <option value="8">CJ오쇼핑</option>
                      <option value="9">지마켓</option>
                      <option value="10">옥션</option>
                      <option value="11">위메프</option>
                      <option value="12">쿠팡</option>
                      <option value="17">인터파크</option>
                      <option value="26">사방넷</option>
                      <option value="27">신세계몰</option>
                      <option value="28">다이소몰</option>
                      <option value="29">비즈마켓</option>
                      <option value="30">하프클럽</option>
                      <option value="31">스킨판다</option>
                      <option value="32">이마트몰</option>
                      <option value="51">리탭</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive noSwipe">
                  <table class="table table-striped table-hover">
                    <caption class="hdd">
                    SMS 메시지 리스트 테이블
                    </caption>
                    <colgroup>
                      <col class="c15">
                      <col class="c25">
                      <col class="c10">
                      <col class="c10">
                      <col class="c10">
                      <col class="c25">
                      <col class="c5">
                    </colgroup>
                    <thead>
                      <tr>
                        <th scope="col">상품코드</th>
                        <th scope="col">매장상품명</th>
                        <th scope="col">계정번호</th>
                        <th scope="col">삭제여부</th>
                        <th scope="col">상품코드2</th>
                        <th scope="col">메모</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" id="code" class="form-control form-control-xs" name="code" value=""></td>
                        <td><textarea name="prd_name" id="prd_name" class="form-control form-control-xs"></textarea></td>
                        <td><input type="text" id="account_no" class="form-control form-control-xs" name="account_no" value=""></td>
                        <td class="text-center"><label for="delete_yn_modal1" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="delete_yn_modal1" id="delete_yn_modal1" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
                        <td><input type="text" id="prd_code" class="form-control form-control-xs" name="prd_code" value=""></td>
                        <td><textarea name="memo" id="memo" class="form-control form-control-xs"></textarea></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><input type="text" id="code_823" class="form-control form-control-xs" name="code_823" value="@stress"></td>
                        <td class="tal"><textarea name="prd_name_823" id="prd_name_823" class="form-control form-control-xs">난이거 스이거 CLP (stress)</textarea></td>
                        <td><input type="text" id="account_no_823" class="form-control form-control-xs" name="account_no_823" value="905"></td>
                        <td class="text-center"><label for="delete_yn_modal2" class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="delete_yn_modal2" id="delete_yn_modal2" class="custom-control-input is-invalid" value="Y" /><span class="custom-control-label custom-control-color"><i class="blind">삭제</i></span></label></td>
                        <td><input type="text" id="prd_code_823" class="form-control form-control-xs" name="prd_code_823" value=""></td>
                        <td class="tal"><textarea name="memo_823" id="memo_823" class="form-control form-control-xs">GA &gt; CLP &gt; campaign-난이거</textarea></td>
                        <td class="btns03"><a href="javascript:;" class="btn btn-sm btn-primary" no="823">수정</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary modal-close" type="button" data-dismiss="modal">취소</button>
                <button class="btn btn-primary modal-close" type="button" data-dismiss="modal">등록</button>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div><!-- be-wrapper -->
    <script src="/assets/lib/jquery/jquery.min.js"></script>
    <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- form -->
    <script src="/assets/lib/summernote/summernote-bs4.min.js"></script>
    <script src="/assets/lib/summernote/summernote-ext-beagle.js"></script>
    <script src="/assets/lib/select2/js/select2.min.js"></script>
    <script src="/assets/lib/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/app-mail-compose.js"></script>
    <script src="/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/lib/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="/assets/js/app-form-elements.js"></script>

    <!-- Select Filter -->
    <script src="/assets/js/app-booking.js"></script>

    <script src="/assets/lib/jquery.niftymodals/js/jquery.niftymodals.js"></script>

    <script>
      $.fn.niftyModal('setDefaults',{
      	overlaySelector: '.modal-overlay',
      	contentSelector: '.modal-content',
      	closeSelector: '.modal-close',
      	classAddAfterOpen: 'modal-show'
      });

      $(document).ready(function(){
      	//-initialize the javascript
        App.init();
      	App.booking();
      });
    </script>

  </body>
</html>