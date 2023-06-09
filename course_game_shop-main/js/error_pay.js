const link_pay = document.getElementById('link_error_message_pay');
const content_pay = document.getElementById('error_pay');

link_pay.addEventListener('click', function(event) {
    event.preventDefault();
    content_pay.style.display = 'none';
});