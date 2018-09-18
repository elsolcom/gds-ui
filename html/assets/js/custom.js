$("a").click(function(){
  if($(this).attr("href") == "#self"){
	return false;
  };
});

$(function(){
  //전체동의
  var $checkbox = $('input[type="checkbox"]'),
      $checkAll = $('.check-all');

  //전체 동의를 선택했을 경우
  $checkAll.on('click', function (e) {
    var $this = $(this);
    $checkbox.not($(this)).prop('checked', $this.prop('checked'));

    if($this.prop('checked') == true) $('.ui_name').focus();
  });
  
  //전체선택을 제외한 나머지
  $checkbox.not($checkAll).on('change', function () {
    $checkAll.prop('checked', false);
    if($checkbox.not($checkAll).filter(':checked').size() == $checkbox.not($checkAll).size()){
      $checkAll.trigger('click');	
    }
  });
});