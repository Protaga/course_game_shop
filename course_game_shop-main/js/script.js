const link_profile = document.getElementById('link_profile');
const profile = document.getElementById('header_nav_profile_content');

link_profile.addEventListener('click', function (event) {
    event.preventDefault();
    if (profile.style.display === 'block') {
        profile.style.display = 'none';
    } else {
        profile.style.display = 'block';
    }
});
