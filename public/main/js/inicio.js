
    document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = [...document.querySelectorAll('#modelTabs button[data-bs-toggle="tab"]')];
    const prevBtn = document.getElementById('prevTab');
    const nextBtn = document.getElementById('nextTab');

    function showTab(index) {
    if (index >= 0 && index < tabButtons.length) {
    let tabTrigger = new bootstrap.Tab(tabButtons[index]);
    tabTrigger.show();
}
}

    prevBtn.addEventListener('click', function() {
    let currentIndex = tabButtons.findIndex(btn => btn.classList.contains('active'));
    showTab(currentIndex - 1);
});

    nextBtn.addEventListener('click', function() {
    let currentIndex = tabButtons.findIndex(btn => btn.classList.contains('active'));
    showTab(currentIndex + 1);
});
});

