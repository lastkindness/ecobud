export default () => {
    if($('.contacts__popup-load').length) {
        $('input.contacts__popup-load').on('change', function() {
            const fileName = $(this).val().split('\\').pop();
            $('span.text').text(fileName);
        });
    };
};
