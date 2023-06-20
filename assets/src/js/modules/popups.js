export default () => {
    const html = document.getElementById('html');
    const popupElements = document.querySelectorAll('[data-popup]');
    const closeButtons = document.querySelectorAll('.contacts__popup-close');
    const popupContainers = document.querySelectorAll('.contacts__popup');
    popupElements.forEach((element) => {
        element.addEventListener('click', activatePopup);
    });

    closeButtons.forEach((button) => {
        button.addEventListener('click', removeActiveClass);
    });

    function removeActiveClass() {
        popupContainers.forEach((element) => {
            element.classList.remove('active');
            html.classList.remove('active');
        });
    }

    function activatePopup(event) {
        const clickedElement = event.target;
        const popupId = clickedElement.getAttribute('data-popup');
        const targetPopup = document.getElementById(popupId);
        if (targetPopup) {
            targetPopup.classList.add('active');
            html.classList.add('active');
        }
    }

    document.addEventListener('wpcf7mailsent', function (event) {
        setTimeout(function () {
            popupContainers.forEach((container) => {
                container.classList.remove('active');
                html.classList.remove('active');
            });
        }, 5000);
    });
}
