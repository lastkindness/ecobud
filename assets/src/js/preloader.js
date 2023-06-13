document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        checkUser();
        setTimeout(function() {
            document.querySelector('.wrapper').classList.add('visible');
            preloader.classList.add('hide');
            setTimeout(function() {
               preloader.classList.add('none');
            }, 4000);
        }, 4000);
    } else {
        setTimeout(function() {
            document.querySelector('.wrapper').classList.add('visible');
        }, 1000);
    }

    function checkUser() {
        if (sessionStorage.getItem('visited')) {
            preloader.classList.add('loader');
        } else {
            preloader.classList.add('lottie');
            sessionStorage.setItem('visited', 'true');
        }
    }
});
