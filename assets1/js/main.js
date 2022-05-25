// ============Left sidebar js============
$(document).on('click', '#sidebar li', function() {
    $(this).addClass('active').siblings().removeClass('active')
});