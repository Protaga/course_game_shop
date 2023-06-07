const link_profile_php = document.getElementById('link_profile_php');
const profile_php = document.getElementById('header_nav_profile_content_php');

link_profile_php.addEventListener('click', function(event) {
    event.preventDefault();
    if (profile_php.style.display === 'block') {
        profile_php.style.display = 'none';
    } else {
        profile_php.style.display = 'block';
    }
});