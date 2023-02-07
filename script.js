//  select Add box
let addBox = document.querySelector('.addBox');
// top check box select
let classclickCounter= 0;  
let detectevent = ()=>{
    let  anycheck = 0;
    const check = document.querySelector('#check');
    let check2 = document.querySelectorAll('.check-2');
    let imageparentDiv = document.querySelectorAll('.imageparentDiv');
   let editimagebox = document.querySelector('#editimagebox'); 
   
   let imageLinkupdate = document.querySelectorAll('.imageLinkupdate');
 
    let selectbincolor = document.querySelector('#selectbincolor');
    let selectbincolor2 = document.querySelector('#selectbincolor2');
    for(i=0; i<check2.length; i++ ){
        if(check.checked){
            check2[i].checked = true;
        }
        if(check2[i].checked){
            anycheck++;
            selectbincolor.style.display = "block";
            selectbincolor2.style.display = "none";
        }
    }
    if(anycheck < 1){
        selectbincolor.style.display = "none";
        selectbincolor2.style.display = "block"; 
    }

    //  img detect loop
    for(i=0; i<imageparentDiv.length;i++){
        imageparentDiv[i].addEventListener('click',()=>{
           
            editimagebox.style.display = "flex";

        })
    }
}
let loadFile = function(event) {
    let imageLinkupdate = document.querySelectorAll('.imageLinkupdate');
   console.log(classclickCounter);
    imageLinkupdate[classclickCounter].src = URL.createObjectURL(event.target.files[0]);
};

detectevent();
let deleteProduct =()=>{
  const check2 = document.querySelectorAll('.check-2');
  const box = document.querySelectorAll('.box');
    for(i=0; i<check2.length;i++ ){
        if(check2[i].checked){
            box[i].remove();
        }
    }
}
//   for image change 
let closeimageeditDiv = ()=>{
    editimagebox.style.display = "none";
}