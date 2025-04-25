$(function () {
  $(".slider").slick({
    autoplay: true,
    arrows: false,
    asNavFor: ".thumbnail",
  });
  // サムネイルのオプション
  $(".thumbnail").slick({
    slidesToShow: 2,
    asNavFor: ".slider",
    focusOnSelect: true,
  });
});
