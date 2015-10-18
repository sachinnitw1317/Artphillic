$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
}); $(document).on('click', '.panele-heading span.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panele-collapsed')) {
        $this.parents('.panele').find('.panele-body').slideUp();
        $this.addClass('panele-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panele').find('.panele-body').slideDown();
        $this.removeClass('panele-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '.panele div.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panele-collapsed')) {
        $this.parents('.panele').find('.panele-body').slideUp();
        $this.addClass('panele-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panele').find('.panele-body').slideDown();
        $this.removeClass('panele-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});