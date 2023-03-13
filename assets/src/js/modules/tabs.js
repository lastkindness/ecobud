export default () => {
    $('.tabs__nav')
        .on('click', 'li:not(.active)', function () {
            $(this)
                .addClass('active')
                .siblings()
                .removeClass('active')
                .closest('.tabs')
                .find('.tabs__grid')
                .removeClass('active')
                .eq($(this)
                    .index())
                .addClass('active');
        });
}
