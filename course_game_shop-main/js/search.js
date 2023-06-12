const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();
    const gameRefs = document.getElementsByClassName('game_ref');

    for (let i = 0; i < gameRefs.length; i++) {
        const span = gameRefs[i].querySelector('span');
        const spanText = span.textContent.toLowerCase();

        if (spanText.includes(searchValue)) {
            gameRefs[i].style.display = 'inline-grid';
        } else {
            gameRefs[i].style.display = 'none';
        }
    }
});
