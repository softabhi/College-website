// window.onscroll = function() {fixNavbar()};
// let takeNabar = document.getElementById("navbar");
// var stricky = takeNabar.offsetTop;


//  function fixNavbar(){
//     if(window.pageXOffset >= stricky){
//         takeNabar.classList.add("stricky");
//     }else{
//         takeNabar.classList.remove("stricky");
//     }
    
// };

// window.onscroll = function() {myFunction()};

// var navbar = document.getElementById("navbar");
// var sticky = navbar.offsetTop;

// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// }


// let first_img = document.getElementById('IMG1');
// let second_img = document.getElementById('IMG2');
// let third_img = document.getElementById('IMG3');

// console.log(first_img);

// const imgs  = [first_img,second_img,third_img] ;
// const imgs = ["images/camp1.jpg","images/camp5.jpg","images/camp3.jpg"];
// let tem = 0;
// function slider_fun(){

//     //  first_img.src = "imgs[0]";
//     // console.log(imgs[1]);
//     let pic = document.getElementsByClassName('img1');
//     // let arr = document.getElementById("img1");
//     // console.log(typeof(pic));

//     // for( tem;tem<pic.length;tem++){
//     //     pic[tem].style.display = "none";
//     // }
//    if(tem<2){

//     pic[tem].style.display = "none";

//     tem++;
//    }

//    console.log(tem);
// //    else{

// //     pic[tem].style.display = "none";
// //     tem--;
// //    }
//     // tem++;



//      console.log("heelooo");
// }

// function slider_pun(){
//     let pic = document.getElementsByClassName('img1');
//     // let tem = 0;
//    if(tem>=0){
//     pic[tem].style.display = "none";
//     tem--;
//    }

//    console.log(tem);
// }

// let slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls





// // function plusSlides(n) {
// //   showSlides(slideIndex += n);
// //   console.log(n);
// // } 


// function showSlides(n) {
//     console.log("2n", n);
//     let i;
//     let slides = document.getElementsByClassName("img1");
//     // let dots = document.getElementsByClassName("dot");
//     if (n > slides.length) { slideIndex = 1 }
//     if (n < 1) { slideIndex = slides.length }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     // for (i = 0; i < dots.length; i++) {
//     //   dots[i].className = dots[i].className.replace(" active", "");
//     // }
//     slides[slideIndex - 1].style.display = "block";
//     // dots[slideIndex-1].className += " active";
// }

let slide_image = document.getElementsByClassName("img1");
for (i = 1; i < slide_image.length; i++) {
    slide_image[i].style.display = "none";
}

console.log("hello");


j = 0;


function next() {

    slide_image[j].style.display = "none"
    if (j >=2) {
        j = -1;
    }
    j++;
    // alert(j)

    slide_image[j].style.display = "block";
//    console.log(j);
}

function previous() {
    slide_image[j].style.display = "none";
    if (j == 0) {
        j = 3;
       
    }
     j--;
    slide_image[j].style.display = "block";
    
    // console.log(j);
}