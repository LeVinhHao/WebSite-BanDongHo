LinkImages = ['./images/CALVIN_KLEIN_ESTABLISHED_FIGURE_homepage.jpg','./images/Charriol_Home_banner.jpg','./images/Collection-Multifort.jpg'
,'./images/Eterna_Banner.jpg','./images/PRX_35mm_Home_Banner.jpg','./images/Rotary_1440x500.jpg','./images/Saint_Honore_1440x500_Banner.jpg']

const lstImg = document.querySelector('.header_slide-bg')
lstImg.style.width = LinkImages.length*100+"%";
var doc = ""
for (var i = 0; i < LinkImages.length; i++) {
    doc = doc + `
    <div class="header_slide-bg-img">
        <img class="" src="${LinkImages[i]}">
    </div>
    `
}
lstImg.innerHTML = doc


const listNut = document.querySelector('.ListNut')
var dsa = ""
var k=""
for(var i=0;i<LinkImages.length;i++){
    k=(i==0)?"active":""
    dsa = dsa+`
    <li value="${i+1}" class="ItemNut ${k}">
        <a class="ItemNut-link"></a>
    </li>
    `
}
listNut.innerHTML = dsa

const bg = document.querySelector('.header_slide-bg')
const dsNut = document.querySelectorAll('.ItemNut')

function SwapImages(a){
    bg.style=`width:${LinkImages.length*100}%;margin-left: -${(a-1)*100}%`
}

var index = 1
setInterval(function (){
    SwapImages(index)
    NutActive  = document.querySelector('.active')
    NutActive.classList.remove('active')
    dsNut[index-1].classList.add('active')
    index++
    if(index==LinkImages.length+1) index = 1
},10000)

var a = function(){
    index = this.value
    SwapImages(index)
    var NutActive  = document.querySelector('.active')
    NutActive.classList.remove('active')
    dsNut[index-1].classList.add('active')
}

for(var i=0;i<dsNut.length;i++){
    dsNut[i].onclick=a
}

const btnLeft = document.querySelector('.ti-angle-left')
btnLeft.addEventListener('click',function(){
    index--
    if(index==0) index = LinkImages.length
    console.log(index)
    SwapImages(index)
    NutActive  = document.querySelector('.active')
    NutActive.classList.remove('active')
    dsNut[index-1].classList.add('active')
})

const btnRight = document.querySelector('.btn-right-js')
btnRight.addEventListener('click',function(){
    index++
    if(index==LinkImages.length+1) index = 1
    console.log(index)
    SwapImages(index)
    NutActive  = document.querySelector('.active')
    NutActive.classList.remove('active')
    dsNut[index-1].classList.add('active')
})
$(function(){
    $(window).scroll(function () {
    if ($(this).scrollTop() > 100) $(".lentop").fadeIn();
            else $(".lentop").fadeOut();
    });
    $(".lentop").click(function () {
    $("body,html").animate({scrollTop: 0}, "slow");
    });
});