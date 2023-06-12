const close_cross_container = document.getElementById('close_cross_container');
const close_pay_content = document.getElementById('pay_content');

close_cross_container.addEventListener('click', function (event) {
    event.preventDefault();
    close_pay_content.style.display = 'none';
});