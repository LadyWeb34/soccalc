// var total = 0;
// let optionTest = document.querySelectorAll('.form-check-input');
// for(i = 0; i < optionTest.length; i++){
//     let dataOption = optionTest[i].getAttribute('data-points');
//     for(x = 0; x < dataOption.length; x++) {
//         dataOption[x].forEach(function (num) {
//             total += num;
//           });
//     }
// }
let sum = 0;
let finalSum = 0;
let btnTest = document.querySelector('#btn-test');
let optionTest = document.querySelectorAll('.form-check-input');
const falseBlock = document.querySelector('#false_position');
const trueBlock = document.querySelector('#true_position');
for(i = 0; i < optionTest.length; i++){
    let dataOption = optionTest[i].getAttribute('data-points');
    finalSum += parseInt(dataOption);
    console.log(finalSum); 
    optionTest[i].onclick = function(){
        let dataClickOption = this.getAttribute('data-points'); 
        // console.log(dataClickOption)
        sum += parseInt(dataClickOption);
        btnTest.onclick = function(){
            if(sum === finalSum){
                trueBlock.style.display = 'block';
                falseBlock.style.display = 'none';
                sum = 0;
            }else{
                falseBlock.style.display = 'block';
                trueBlock.style.display = 'none';
                sum = 0;
            }
        }
    }
};