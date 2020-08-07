$('.animate').scrolla({
  mobile: true,
  once: false
});

$("header a").click(function() {
  var headerHight = $("header").height();
  var speed = 500;
  var href = $(this).attr("href");
  var position = $(href).offset().top - headerHight;
  $("html, body").animate({
    "scrollTop": position
  }, speed, "swing");
  return false;
});
$("#pcSticker a").click(function() {
  var headerHight = $("header").height();
  var speed = 500;
  var href = $(this).attr("href");
  var position = $(href).offset().top - headerHight;
  $("html, body").animate({
    "scrollTop": position
  }, speed, "swing");
  return false;
});
$("#spSticker a").click(function() {
  var headerHight = $("header").height();
  var speed = 500;
  var href = $(this).attr("href");
  var position = $(href).offset().top - headerHight;
  $("html, body").animate({
    "scrollTop": position
  }, speed, "swing");
  return false;
});
$(function() {
  // 初期状態のボタンは無効
  $(".btn").prop("disabled", true);
  // チェックボックスの状態が変わったら（クリックされたら）
  $("input[type='checkbox']").on('change', function() {
    // チェックされているチェックボックスの数
    if ($(".chk:checked").length > 0 && $(".chk2:checked").length > 0) {
      // ボタン有効
      $(".btn").prop("disabled", false);
    } else {
      // ボタン無効
      $(".btn").prop("disabled", true);
    }
  });
});
