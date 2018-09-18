<?php include("include/head.php"); ?>

  <body class="be-animate">
    <div class="be-wrapper be-fixed-sidebar be-aside">

      <?php include("include/nav.php"); ?>

      <?php include("include/sidebar.php"); ?>

      <div class="be-content be-no-padding">
        <aside class="page-aside">
          <div class="be-scroller-aside">
            <div class="aside-content">
              <div class="content">
                <div class="aside-header">
                  <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon mdi mdi-caret-down"></span></button><span class="title">검색 설정</span>
                  <p class="description">다양한 검색 조건을 설정하여 원하는 데이터를 검색합니다.</p>
                </div>
              </div>
              <div class="aside-nav collapse">
                <div class="content">
                  <div class="form-group">
                    <label for="">시작일</label>
                    <div class="input-group input-group-sm date datetimepicker" data-min-view="2" data-date-format="yyyymmdd">
                      <input class="form-control" size="16" type="text" value="">
                      <div class="input-group-append">
                        <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="w-100">종료일</label>
                    <div class="input-group input-group-sm date datetimepicker" data-min-view="2" data-date-format="yyyymmdd">
                      <input class="form-control" size="16" type="text" value="">
                      <div class="input-group-append">
                        <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="period">주기설정</label>
                    <select id="period" name="period" class="select2 select2-sm">
                      <option value="D" selected="">일</option>
                      <option value="W">주</option>
                      <option value="M">월</option>
                      <option value="Q">분기</option>
                      <option value="H">반기</option>
                      <option value="Y">년</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="group_name">그룹명</label>
                    <input class="form-control form-control-sm" id="group_name" type="text" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="memo">메모</label>
                    <input class="form-control form-control-sm" id="memo" type="text" placeholder="">
                  </div>
                  <div class="accordion accordion-sm col-12 mb-0" id="accordion">
                      <div class="row">
                        <div class="card col-12">
                          <div class="card-header" id="headingOne">
                            <button class="btn pt-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" type="button"><i class="icon mdi mdi-chevron-right"></i> 브랜드 선택</button>
                          </div>
                          <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <div class="custom-controls-stacked row">
                                <div class="col-12"><label class="custom-control custom-checkbox" for="srhBiz"><input id="srhBiz" class="custom-control-input check_all" type="checkbox" checked><span class="custom-control-label">모두선택</span></label></div>
                                <div class="col-sm-6">
                                  <label class="custom-control custom-checkbox" for="srhBiz1"><input id="srhBiz1" name="biz_area[]" value="MELIKE" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">난이거</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz2"><input id="srhBiz2" name="biz_area[]" value="NBR" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">누벨르</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz3"><input id="srhBiz3" name="biz_area[]" value="RETTEB" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">리탭</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz4"><input id="srhBiz4" name="biz_area[]" value="BRD" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">블랑드</span></label>
                                </div>
                                <div class="col-sm-6">
                                  <label class="custom-control custom-checkbox" for="srhBiz5"><input id="srhBiz5" name="biz_area[]" value="YS" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">영시</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz6"><input id="srhBiz6" name="biz_area[]" value="JMU" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">진마유</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz7"><input id="srhBiz7" name="biz_area[]" value="KMZ" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">카마존</span></label>
                                  <label class="custom-control custom-checkbox" for="srhBiz8"><input id="srhBiz8" name="biz_area[]" value="COS" class="srhBiz custom-control-input" type="checkbox" checked><span class="custom-control-label">코스메리트</span></label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <a class="btn btn-lg btn-primary btn-block" href="#">검색</a>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <div class="main-content container-fluid">
          <div class="row be-booking-promos">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">메뉴 추가 및 수정<span class="card-subtitle">기존 메뉴의 설정을 수정하거나 새로운 메뉴를 추가합니다.</span></div>
                <div class="tab-container">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#menu_modify" data-toggle="tab" role="tab">메뉴 수정</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu_add" data-toggle="tab" role="tab">메뉴 추가</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="menu_modify" role="tabpanel">
                      <h4>메뉴 수정</h4>
                      <form>
                        <div class="form-group row">
                          <label for="menu_name1" class="col-12 col-sm-2 col-form-label text-sm-right">메뉴명</label>
                          <div class="col-12 col-sm-8 col-sm-10">
                            <select id="menu_name1" name="menu_name1" class="select2 select2-sm">
                              <option value="M_ID_00006">게시판</option>
                              <option value="M_ID_00007">공지사항</option>
                              <option value="M_ID_00008">일반 게시판</option>
                              <option value="M_ID_00009">매출데이터</option>
                              <option value="M_ID_00010">통계</option>
                              <option value="M_ID_00018">Overview</option>
                              <option value="M_ID_00022">매출종합</option>
                              <option value="M_ID_00023">공식몰매출(상품별)</option>
                              <option value="M_ID_00024">외부몰매출(상품별)</option>
                              <option value="M_ID_00030">데이터 등록</option>
                              <option value="M_ID_00031">상품별 매출 일괄등록</option>
                              <option value="M_ID_00019">매체데이터</option>
                              <option value="M_ID_00020">통계</option>
                              <option value="M_ID_00021">Overview</option>
                              <option value="M_ID_00026">데이터 등록</option>
                              <option value="M_ID_00027">ROAS 데이터 일괄등록</option>
                              <option value="M_ID_00001">환경설정</option>
                              <option value="M_ID_00005">메뉴관리</option>
                              <option value="M_ID_00011">사용자관리</option>
                              <option value="M_ID_00012">사용자그룹</option>
                              <option value="M_ID_00013">계정관리</option>
                              <option value="M_ID_00004">코드관리</option>
                              <option value="M_ID_00014">공통코드</option>
                              <option value="M_ID_00025">매장코드</option>
                              <option value="M_ID_00028">상품카테고리</option>
                              <option value="M_ID_00015">상품코드</option>
                              <option value="M_ID_00029">상품코드매핑</option>
                              <option value="M_ID_00016">사업영역코드</option>
                              <option value="M_ID_00017">회사코드</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="menu_id1" class="col-12 col-sm-2 col-form-label text-sm-right">메뉴ID</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="menu_id1" type="text" placeholder="" readonly></div>
                        </div>
                        <div class="form-group row">
                          <label for="title1" class="col-12 col-sm-2 col-form-label text-sm-right">제목</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="title1" type="text" placeholder=""></div>
                        </div>
                        <div class="form-group row">
                          <label for="memo1" class="col-12 col-sm-2 col-form-label text-sm-right">메모</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="memo1" type="text" placeholder=""></div>
                        </div>
                        <div class="form-group row">
                          <label for="url1" class="col-12 col-sm-2 col-form-label text-sm-right">URL</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="url1" type="url" placeholder=""></div>
                        </div>
                        <div class="form-group row">
                          <label for="seq1" class="col-12 col-sm-2 col-form-label text-sm-right">메뉴순서</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="seq1" type="text" placeholder=""></div>
                        </div>
                        <div class="form-group row pt-1 pb-1">
                          <label for="admin04" class="col-12 col-sm-2 col-form-label text-sm-right">삭제</label>
                          <div class="col-12 col-sm-8 col-lg-9 form-check mt-1">
                            <label for="admin04" class="custom-control custom-radio custom-control-inline">
                              <input class="custom-control-input" type="radio" name="radio-inline" checked="" id="admin04"><span class="custom-control-label">삭제</span>
                            </label>
                            <label for="admin05" class="custom-control custom-radio custom-control-inline">
                              <input class="custom-control-input" type="radio" name="radio-inline" id="admin05"><span class="custom-control-label">노출</span>
                            </label>
                          </div>
                        </div>
                        <div class="row pt-3">
                          <div class="col-12">
                            <p class="text-right">
                              <button class="btn btn-space btn-primary" type="submit">수정</button>
                            </p>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="menu_add" role="tabpanel">
                      <h4>메뉴 추가</h4>
                      <form>
                        <div class="form-group row">
                          <label for="menu_id2" class="col-12 col-sm-2 col-form-label text-sm-right">메뉴ID</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="menu_id2" type="text" placeholder="" readonly></div>
                        </div>
                        <div class="form-group row">
                          <label for="title2" class="col-12 col-sm-2 col-form-label text-sm-right">제목</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="title2" type="text" placeholder=""></div>
                        </div>
                        <div class="form-group row">
                          <label for="memo2" class="col-12 col-sm-2 col-form-label text-sm-right">메모</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="memo2" type="text" placeholder=""></div>
                        </div>
                        <div class="form-group row">
                          <label for="url2" class="col-12 col-sm-2 col-form-label text-sm-right">URL</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="url2" type="url" placeholder=""></div>
                        </div>
                        <div class="form-group row">
                          <label for="seq2" class="col-12 col-sm-2 col-form-label text-sm-right">메뉴순서</label>
                          <div class="col-12 col-sm-8 col-sm-10"><input class="form-control form-control-sm" id="seq2" type="text" placeholder=""></div>
                        </div>
                        <div class="form-group row pt-1 pb-1">
                          <label for="admin06" class="col-12 col-sm-2 col-form-label text-sm-right">삭제</label>
                          <div class="col-12 col-sm-8 col-lg-9 form-check mt-1">
                            <label for="admin06" class="custom-control custom-radio custom-control-inline">
                              <input class="custom-control-input" type="radio" name="radio-inline" checked="" id="admin06"><span class="custom-control-label">삭제</span>
                            </label>
                            <label for="admin07" class="custom-control custom-radio custom-control-inline">
                              <input class="custom-control-input" type="radio" name="radio-inline" id="admin07"><span class="custom-control-label">노출</span>
                            </label>
                          </div>
                        </div>
                        <div class="row pt-3">
                          <div class="col-12">
                            <p class="text-right">
                              <button class="btn btn-space btn-primary" type="submit">등록</button>
                            </p>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header card-header-divider">메뉴 설정<span class="card-subtitle">메뉴의 순서를 drag & drop으로 수정할 수 있습니다.</span></div>
                <div class="card-body">
                  <div class="dd" id="list1">
                    <ol class="dd-list">
                      <li class="dd-item" data-id="M_ID_00006">
                        <div class="dd-handle">게시판</div>
                        <ol class="dd-list">
                          <li class="dd-item" data-id="M_ID_00007">
                            <div class="dd-handle">공지사항</div>
                          </li>
                          <li class="dd-item" data-id="M_ID_00008">
                            <div class="dd-handle">일반 게시판</div>
                          </li>
                        </ol>
                      </li>
                      <li class="dd-item" data-id="M_ID_00009">
                        <div class="dd-handle">매출데이터</div>
                        <ol class="dd-list">
                          <li class="dd-item" data-id="M_ID_00010">
                            <div class="dd-handle">통계</div>
                            <ol class="dd-list">
                              <li class="dd-item" data-id="M_ID_00018">
                                <div class="dd-handle">Overview</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00022">
                                <div class="dd-handle">매출종합</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00023">
                                <div class="dd-handle">공식몰매출(상품별)</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00024">
                                <div class="dd-handle">외부몰매출(상품별)</div>
                              </li>
                            </ol>
                          </li>
                          <li class="dd-item" data-id="M_ID_00030">
                            <div class="dd-handle">데이터 등록</div>
                            <ol class="dd-list">
                              <li class="dd-item" data-id="M_ID_00031">
                                <div class="dd-handle">상품별 매출 일괄등록</div>
                              </li>
                            </ol>
                          </li>
                        </ol>
                      </li>
                      <li class="dd-item" data-id="M_ID_00019">
                        <div class="dd-handle">매체데이터</div>
                        <ol class="dd-list">
                          <li class="dd-item" data-id="M_ID_00020">
                            <div class="dd-handle">통계</div>
                            <ol class="dd-list">
                              <li class="dd-item" data-id="M_ID_00021">
                                <div class="dd-handle">Overview</div>
                              </li>
                            </ol>
                          </li>
                          <li class="dd-item" data-id="M_ID_00026">
                            <div class="dd-handle">데이터 등록</div>
                            <ol class="dd-list">
                              <li class="dd-item" data-id="M_ID_00027">
                                <div class="dd-handle">ROAS 데이터 일괄등록</div>
                              </li>
                            </ol>
                          </li>
                        </ol>
                      </li>
                      <li class="dd-item" data-id="M_ID_00001">
                        <div class="dd-handle">환경설정</div>
                        <ol class="dd-list">
                          <li class="dd-item" data-id="M_ID_00005">
                            <div class="dd-handle">메뉴관리</div>
                          </li>
                          <li class="dd-item" data-id="M_ID_00011">
                            <div class="dd-handle">사용자관리</div>
                            <ol class="dd-list">
                              <li class="dd-item" data-id="M_ID_00012">
                                <div class="dd-handle">사용자그룹</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00013">
                                <div class="dd-handle">계정관리</div>
                              </li>
                            </ol>
                          </li>
                          <li class="dd-item" data-id="M_ID_00004">
                            <div class="dd-handle">코드관리</div>
                            <ol class="dd-list">
                              <li class="dd-item" data-id="M_ID_00014">
                                <div class="dd-handle">공통코드</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00025">
                                <div class="dd-handle">매장코드</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00028">
                                <div class="dd-handle">상품카테고리</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00015">
                                <div class="dd-handle">상품코드</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00029">
                                <div class="dd-handle">상품코드매핑</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00016">
                                <div class="dd-handle">사업영역코드</div>
                              </li>
                              <li class="dd-item" data-id="M_ID_00017">
                                <div class="dd-handle">회사코드</div>
                              </li>
                            </ol>
                          </li>
                        </ol>
                      </li>
                    </ol>
                  </div>
                  <div class="mt-6">
                    <h4>Serialized Output:</h4>
                    <pre><code id="out1"></code></pre>
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

    <!-- menu -->
    <script src="assets/lib/jquery.nestable/jquery.nestable.js"></script>
    <script src="assets/js/app-ui-nestable-lists.js"></script>

    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.mailCompose();
        App.formElements();
        App.uiNestableLists();
      });
    </script>
  </body>
</html>