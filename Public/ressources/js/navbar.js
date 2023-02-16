

// Start Toggle Header profile
const toggleProfileNav = document.querySelector('#user_connect');
const showProfileNav = document.querySelector('#user_connect_navbar');
toggleProfileNav.addEventListener('click', () => {
    if(showProfileNav.classList=="show"){
        showProfileNav.classList.remove("show");
    }else{
        showProfileNav.classList.add("show")
    }
});
// End Toggle Header profile



// Start Toggle Header profile
const togglePannerNav = document.querySelector('#toogle_panner');
const showPannerNav = document.querySelector('#openMod');

console.log(togglePannerNav);
console.log(showPannerNav)
togglePannerNav.addEventListener('click', (e) => {
    e.preventDefault();
    if(showPannerNav.classList=="show"){
        showPannerNav.classList.remove("show");
    }else{
        showPannerNav.classList.add("show")
    }
});
// End Toggle Header profile
