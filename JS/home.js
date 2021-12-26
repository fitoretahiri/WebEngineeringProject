window.onscroll = sliderFunction();

function sliderFunction(){
    var sliderList = document.getElementsByClassName('inside-carousel');

    if(!sliderList[0].classList.contains('show-content')){
        sliderList[0].classList.add('show-content');
    }

    for(var slide of sliderList){
        if(!slide.classList.contains('show-content')){
            slide.classList.add('hidden-content');
        }
    }

    var index = 0;
    var slider = document.getElementsByClassName('carousel')[0];

    slider.addEventListener('click', function(){
        index++;
        for(var slide of sliderList){
            if(slide.classList.contains('show-content') && index <3 ){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.nextElementSibling.classList.remove('hidden-content');
                slide.nextElementSibling.classList.add('show-content');
                break;
            } else if(slide.classList.contains('show-content') && index == 3){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.remove('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.add('show-content');
                index = 0;
                break;
            }
        }
    })
}
