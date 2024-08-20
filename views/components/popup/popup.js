document.addEventListener("DOMContentLoaded", ()=> {
    const popupElems = document.querySelectorAll('.popup');
    popupElems.forEach(popup => {
        const popupId = document.getElementById(popup.dataset.id);
        const offset = popup.querySelector('.offset');
        const close = popup.querySelector('.close');

        offset.addEventListener("click", ()=> {
            popupId.classList.remove("is-active");
        });
        close.addEventListener("click", ()=> {
            popupId.classList.remove("is-active");
        });
    });
});