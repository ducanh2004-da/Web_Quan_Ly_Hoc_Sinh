$.noConflict();
jQuery('.regis-btn').click(function(){
    console.log('hi');
    jQuery('.input-field').toggle();
})
jQuery('.login-inp').hide();
jQuery('.register').click(function(){
    jQuery('.register-inp').toggle();
    jQuery('.login-inp').hide();
})
jQuery('.login').click(function(){
    jQuery('.register-inp').hide();
    jQuery('.login-inp').toggle();
})
let i =0;
let txt1 = 'Welcome my master';
function sltext1(){
    document.getElementById('text-intro').innerHTML = txt1.slice(0,i);
    i++;
    if(i>=txt1.lenght){
        i=0;
    }
}
setInterval(sltext1,300);
jQuery('.about-1').mouseenter(()=>{
    var t1 = $("<p class='ab1 text-center'></p>").text("London");
    jQuery('.ab1').css('color','red');
    jQuery('.ab1').css('backgroundcolor','red');
    jQuery('.ab1').css('opacity','1');
    jQuery('.about-1').append(t1);
})
jQuery('.about-1').mouseleave(()=>{
    jQuery('.ab1').hide();
})
jQuery('.about-2').mouseenter(()=>{
    var t1 = $("<p class='ab2 text-center'></p>").text("paris");
    jQuery('.ab2').css('color','red');
    jQuery('.ab2').css('backgroundcolor','red');
    jQuery('.about-2').append(t1);
})
jQuery('.about-2').mouseleave(()=>{
    jQuery('.ab2').hide();
})
jQuery('.about-3').mouseenter(()=>{
    var t1 = $("<p class='ab3 text-center'></p>").text("HongKong");
    jQuery('.ab3').css('color','red');
    jQuery('.ab3').css('backgroundcolor','red');
    jQuery('.ab1').css('opacity','1');
    jQuery('.about-3').append(t1);
})
jQuery('.about-3').mouseleave(()=>{
    jQuery('.ab3').hide();
})
let txt2 = 'safefvrgweqedsvwegafawea weg regreg regetgre grthrege gg f resgaetg gsggsg';
let j = 0;
let txt3 = 'gerhfvgetqrh wegwe fdb ergwrg sdgsg dsve geweg rgweg ergewge erg ';
let k =0;
function sltext2(){
    document.getElementById('blq1').innerHTML = txt2.slice(0,j);
    j++;
    if(j>=txt2.lenght){
        j=0;
    }
}
setInterval(sltext2,150);
function sltext3(){
    document.getElementById('blq2').innerHTML = txt3.slice(0,k);
    k++;
    if(k>=txt3.lenght){
        k=0;
    }
}
setInterval(sltext3,150);
jQuery('.tt-creater').hide();
jQuery('.cre-1').click(()=>{
    jQuery('.tt-creater').toggle();
    jQuery('.cre-img').attr('src',"{{ asset('images/hongkong.jpg') }}");
    jQuery('.fb').text("andohehe");
    jQuery('.phone').text("012345678");
    jQuery('.yahoo').text("anhdoyahoo@fafw");
})
jQuery('.cre-2').click(()=>{
    jQuery('.tt-creater').toggle();
    jQuery('.cre-img').attr('src',"{{ asset('images/hongkong.jpg') }}");
    jQuery('.fb').text("DoDucAng");
    jQuery('.phone').text("0353199400");
    jQuery('.yahoo').text("ducanhyahoo@fafw");
})