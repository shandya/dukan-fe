$(function() {
  $('.form-sort-product').select2({
    minimumResultsForSearch: -1
  });

  $('.form-control-range').each(function () {
    let _this = $(this);
    let labelContainer = _this.next().find('.label-value');
    let unit = _this.data('unit');

    labelContainer.html(_this.val() + unit);

    _this.on('input change mousemove', function() {
      labelContainer.html(_this.val() + unit);
    })
  })

  $('.collapse').collapse();

  $('.js-btn-toggle-filter').on('click', function() {
    $('.product-sidebar').toggleClass('modal-mobile-visible');
    $('body').toggleClass('overflow-hidden');
  })
});