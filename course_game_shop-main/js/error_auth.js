const link = document.getElementById('link_error_message');
const content = document.getElementById('error_auth');

link.addEventListener('click', function (event) {
    event.preventDefault();
    content.style.display = 'none';
});