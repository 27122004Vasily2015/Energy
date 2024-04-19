let login = document.getElementById("logIn");
login.addEventListener("click" , showModal);
function showModal(e){
    e.preventDefault();
    let modalka= document.getElementById("modalka");
    modalka.style.top = "0";

};

let closebtn = document.getElementById("close_btn");
closebtn.addEventListener("click" , closeModal);
function closeModal(e){
    e.preventDefault();
    let modalka= document.getElementById("modalka");
    modalka.style.top = "-110%";

};

let reg = document.getElementById("Reg");
reg.addEventListener("click" , showModal2);
function showModal2(e){
    e.preventDefault();
    let modalka2= document.getElementById("modalka2");
    modalka2.style.top = "0";
};

let closebtn2 = document.getElementById("close_btn2");
closebtn2.addEventListener("click" , closeModal2);
function closeModal2(e){
    e.preventDefault();
    let modalka2= document.getElementById("modalka2");
    modalka2.style.top = "-110%";
};

// const registerForm = document.registerForm;
// const submit = registerForm.submit;
// submit.addEventListener("click", validate);
 
// function validate(){
//     if(!registerForm.phone.checkValidity()){
//         console.log("phone is not valid");
//     }
// }

const passVal = document.password;
const phoneVal = document.phone;

const input2= document.getElementsByTagName("input");

function uaz(e){
for(elem of input2){
    const vaz = e.target;
    if(vaz.value.trim()===""){
        vaz.style.borderColor = "red"
    }else {
        vaz.style.borderColor="green"
    }
        
    }
}
for(elem of input2){
    elem.addEventListener("blur")
}

document.getElementById('scrollBtn').addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' }); // Магия с помощью одной кнопки!
    });

// function onblur(e){
//     if(passVal.value.trim()===""){
//         passVal.style.borderColor = "red"
//     }else{
//         passVal.style.borderColor = "green"
//     }
// }

// passVal.addEventListener("blur",onblur)
