document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        setTimeout(function() {
            document.querySelector('.wrapper').classList.add('visible');
            preloader.classList.add('hide');
            setTimeout(function() {
                preloader.classList.add('none');
            }, 1000);
        }, 1000);
    } else {
        setTimeout(function() {
            document.querySelector('.wrapper').classList.add('visible');
        }, 1000);
    }
    console.log(111111);
});
