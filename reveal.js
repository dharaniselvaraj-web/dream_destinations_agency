window.addEventListener('scroll',function(){
    const reveals = document.querySelectorAll('.reveal');

    for (let i = 0; i < reveals.length; i++){
        let windowHwight = window.innerHeight;
        let elementTop = reveals[i].getBoundingClientRect().top;
        let revealPoint = 150;

        if (elementTop < windowHwight - revealPoint) {
            reveals[i].classList.add('active');
        }else{
            reveals[i].classList.remove('active');
        }
    }
});
    