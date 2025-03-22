
    document.addEventListener('DOMContentLoaded', function () {
    const tabs = [...document.querySelectorAll('#modelTabs .nav-link')];
    const prevBtn = document.getElementById('prevTab');
    const nextBtn = document.getElementById('nextTab');

    function getActiveIndex() {
    return tabs.findIndex(tab => tab.classList.contains('active'));
}

    function showTab(index) {
    tabs[index].click();
}

    prevBtn.addEventListener('click', () => {
    let current = getActiveIndex();
    let prevIndex = (current - 1 + tabs.length) % tabs.length;
    showTab(prevIndex);
});

    nextBtn.addEventListener('click', () => {
    let current = getActiveIndex();
    let nextIndex = (current + 1) % tabs.length;
    showTab(nextIndex);
});
});

