function animacao(id){
    var img = document.getElementById(id);
    var src = img.getAttribute('src');

    if (src == "img/pocao_vazio.png"){
        // img.style.animationName = 'like';
        // img.style.animationDuration = '1s';
        // img.style.animationTimingFunction = "ease";

        img.style.animationName = 'like';
        img.style.animationDuration = '.1s';
        img.style.animationTimingFunction = 'ease-in-out';
        setTimeout(function (){
            img.style.display = 'none';
            img.src = "img/pocao_like.png";
        }, 90);
        setTimeout(function (){
            img.style.display = 'inline';
            img.style.animationName = 'like';
            img.style.animationDuration = '.1s';
            img.style.animationTimingFunction = 'ease-in-out';
            img.style.animationDirection = 'reverse';
        }, 180)
    } else {
        img.style.animationName = 'like';
        img.style.animationDuration = '.1s';
        img.style.animationTimingFunction = 'ease-in-out';
        setTimeout(function (){
            img.style.display = 'none';
            img.src = "img/pocao_vazio.png";
        }, 90);
        setTimeout(function (){
            img.style.display = 'inline';
            img.style.animationName = 'like';
            img.style.animationDuration = '.1s';
            img.style.animationTimingFunction = 'ease-in-out';
            img.style.animationDirection = 'reverse';
        }, 180)
        
    }
}

function mudatipo(){
    var x = document.getElementById('senha');

    if (x.type == "password"){
        x.type = "text";
    } else if (x.type == "text"){
        x.type = "password";
    }
}