// let category = document.getElementById("category");
// let benefit = document.getElementById("benefit");
// category.onclick = function(){
//     benefit.classList.toggle("benefit--active")
// };
// let category2 = document.getElementById("category2");
// let benefit2 = document.getElementById("benefit2");
// category2.onclick = function(){
//     benefit2.classList.toggle("benefit--active")
// };
// let category3 = document.getElementById("category3");
// let benefit3 = document.getElementById("benefit3");
// category3.onclick = function(){
//     benefit3.classList.toggle("benefit--active")
// };
// let category4 = document.getElementById("category4");
// let benefit4 = document.getElementById("benefit4");
// category4.onclick = function(){
//     benefit4.classList.toggle("benefit--active")
// };
// let category5 = document.getElementById("category5");
// let benefit5 = document.getElementById("benefit5");
// category5.onclick = function(){
//     benefit5.classList.toggle("benefit--active")
// };

let items=document.querySelector ('.benefits__list').children;
let filterList=document.querySelector ('.categories__list').children;
for(let i = 0;i<filterList.length;i++){
    filterList[i].onclick = function(){



        const displayItems = this.getAttribute('data-filter');
        for(let z = 0; z<items.length;z++){
            items[z].style.transform='scale(0)';
            setTimeout(()=>{
                items[z].style.display = 'none';
            }, 200);
            if((items[z].getAttribute('data-benefit') == displayItems) || displayItems == 'all'){
                items[z].style.transform = 'scale(1)';
                setTimeout(()=>{
                    items[z].style.display = 'block';
                }, 200);
            }
        }
    }
};
