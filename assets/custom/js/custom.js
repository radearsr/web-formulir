// Class Form
const FormMain = document.querySelector(".main-form");
const Form1    = document.querySelector(".first-form");
const Form2    = document.querySelector(".second-form");
const Form3    = document.querySelector(".third-form");
const Form4    = document.querySelector(".fourth-form");
const Form5    = document.querySelector(".fifth-form");

// Class Footer 
const footerMain  = document.querySelector(".f-main");
const footerForm1 = document.querySelector(".f-form1");
const footerForm2 = document.querySelector(".f-form2");
const footerForm3 = document.querySelector(".f-form3");
const footerForm4 = document.querySelector(".f-form4");
const footerForm5 = document.querySelector(".f-form5");


// Button Main Form
const btnLanjutMain = document.querySelector(".btn-lanjut-1");

// Button Form 1 
const btnLanjut1 = document.querySelector(".btn-lanjut-2");
const btnKembali1 = document.querySelector(".btn-kembali-main");

// Button Form 2
const btnLanjut2  = document.querySelector(".btn-lanjut-3");
const btnKembali2 = document.querySelector(".btn-kembali-1");


// Button Form 3
const btnLanjut3  = document.querySelector(".btn-lanjut-4");
const btnKembali3 = document.querySelector(".btn-kembali-2");


// Button Form 4
const btnLanjut4 = document.querySelector(".btn-lanjut-5");
const btnKembali4 = document.querySelector(".btn-kembali-3");

// Button Form 5
const btnKembali5 = document.querySelector(".btn-kembali-4");

/*===============Main Form=============*/
btnLanjutMain.addEventListener('click', function(){

    footerMain.classList.toggle("d-none");
    footerForm1.classList.toggle("d-none");
    FormMain.classList.toggle("d-none");
    Form1.classList.toggle("d-none");

}); 


/* =============First Form==============*/
btnLanjut1.addEventListener('click', function(){

    footerForm1.classList.toggle("d-none");
    footerForm2.classList.toggle("d-none");
    Form1.classList.toggle("d-none");
    Form2.classList.toggle("d-none");
    
    

});
btnKembali1.addEventListener('click', function(){

    footerForm1.classList.toggle("d-none");
    footerMain.classList.toggle("d-none");
    Form1.classList.toggle("d-none");
    FormMain.classList.toggle("d-none");

});


/* =============Second Form==============*/
btnLanjut2.addEventListener('click', function(){

    footerForm3.classList.toggle("d-none");
    footerForm2.classList.toggle("d-none");
    Form3.classList.toggle("d-none");
    Form2.classList.toggle("d-none");

});
btnKembali2.addEventListener('click', function(){

    footerForm2.classList.toggle("d-none");
    footerForm1.classList.toggle("d-none");
    Form2.classList.toggle("d-none");
    Form1.classList.toggle("d-none");

});


/* =============Third Form==============*/
btnLanjut3.addEventListener('click', function(){

    footerForm3.classList.toggle("d-none");
    footerForm4.classList.toggle("d-none");
    Form3.classList.toggle("d-none");
    Form4.classList.toggle("d-none");

});
btnKembali3.addEventListener('click', function(){

    footerForm2.classList.toggle("d-none");
    footerForm3.classList.toggle("d-none");
    Form2.classList.toggle("d-none");
    Form3.classList.toggle("d-none");

});


/* =============Fourth Form==============*/
btnLanjut4.addEventListener('click', function(){

    footerForm5.classList.toggle("d-none");
    footerForm4.classList.toggle("d-none");
    Form5.classList.toggle("d-none");
    Form4.classList.toggle("d-none");
    
});
btnKembali4.addEventListener('click', function(){

    footerForm4.classList.toggle("d-none");
    footerForm3.classList.toggle("d-none");
    Form4.classList.toggle("d-none");
    Form3.classList.toggle("d-none");

});


/* =============Fifth Form==============*/
btnKembali5.addEventListener('click', function(){

    footerForm5.classList.toggle("d-none");
    footerForm4.classList.toggle("d-none");
    Form5.classList.toggle("d-none");
    Form4.classList.toggle("d-none");

});