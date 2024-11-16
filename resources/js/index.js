const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))


const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
        toastBootstrap.show()
    })
}


const modals = document.querySelectorAll('.modal');
let currentModalIndex = 0;
document.addEventListener('keydown', (event) => {
    if ((event.key === 'ArrowLeft' || event.key === 'ArrowRight') && modals.length > 0) {
        Array.from(modals).map((m) => { $(m).modal('hide') });
        currentModalIndex = (currentModalIndex + (event.key === 'ArrowRight' ? 1 : -1) + modals.length) % modals.length;
        $(modals[currentModalIndex]).modal('show');
    }
});