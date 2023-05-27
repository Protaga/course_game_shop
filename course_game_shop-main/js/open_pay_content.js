const open_cross_container = document.getElementById('open_cross_container');
const open_pay_content = document.getElementById('pay_content');

open_cross_container.addEventListener('click', function(event) {
    event.preventDefault();
    open_pay_content.style.display = 'flex';
});