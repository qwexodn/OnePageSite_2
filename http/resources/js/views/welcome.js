


(function(){
    let gallery = document.querySelectorAll('.gallery-content > .gallery');
    let gallery_screen = document.querySelector('.gallery-show');

    gallery.forEach(function(ele){
        let children = ele.children;

        ele.addEventListener('mouseover', function(){
            children[1].classList.remove('hidden');
            children[1].classList.add('show');
        });
        ele.addEventListener('mouseleave', function(){
            children[1].classList.remove('show');
            children[1].classList.add('hidden');
        });
        ele.addEventListener('click', function(){
            let screen = (gallery_screen.children)[0];
            screen.src = ele.getAttribute('mm');
            console.log(screen);

            gallery_screen.classList.add('show');
            gallery_screen.classList.remove('hidden');
        });
    });


    window.addEventListener('resize', ()=>{
        // gallery.style['height'] = gallery.style['width'];
        // console.log(gallery.style['width']);
        gallery.forEach((ele)=>{

            ele.style['height'] = (ele.clientWidth - ele.clientWidth*0.2) + 'px';
        })
    });
    window.addEventListener('load', ()=>{
        gallery.forEach((ele)=>{
            ele.style['background-image'] = 'url(' + ele.getAttribute('mm') + ')';
            ele.style['height'] = (ele.clientWidth - ele.clientWidth*0.2) + 'px';
        })
    });

    gallery_screen.addEventListener("click", ()=>{
        gallery_screen.classList.add('hidden');
        gallery_screen.classList.remove('show');
    })
})();