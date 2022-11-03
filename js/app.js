const btn = document.querySelector('.btn');
const toggle = document.querySelector('#nav-links')

window.addEventListener('scroll',()=>{
    console.log(window);
    console.log('lavada');
    console.log(this.scrollY);
})

console.log(window);

// btn.addEventListener('click',()=>{
//     if(toggle.classList.contains('open-nav')){
//         toggle.classList.remove('open-nav')
//     }
//     else{
//     toggle.classList.add('open-nav')
//     }
//     console.log(toggle.classList);
// })


// let scrollval = window
// console.log(scrollval);
// console.log(scrollval.scrollTo);