const link_key = document.getElementById('link_key_exists');
const content_key = document.getElementById('error_key_exists');

link_key.addEventListener('click', function (event) {
    event.preventDefault();
    content_key.style.display = 'none';
});