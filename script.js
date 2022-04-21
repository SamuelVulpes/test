

const tl = gsap.timeline(
    {defaults:{duration: 0.74, ease: 'Power3.easeOut'}}
);

tl.fromTo(
    '.hero-image',
    {scale:1.3, boderRadius:'0rem'} ,
    {scale: 1, delay:0.35,duration:2.5}
);
tl.fromTo('.cta-2',
    {y:200, opacity:0.5} ,
    {y:0, opacity: 1},
    '<40%');
tl.fromTo('.cta-5',
    {y:-200, opacity:0.5} ,
    {y:0, opacity: 1},
    '<');
tl.fromTo('.cta-1',
    {x:200, opacity:0.5} ,
    {x:0, opacity: 1},
    '<40%');
tl.fromTo('.cta-3',
    {x:-200, opacity:0.5} ,
    {x:0, opacity: 1},
    '<');
tl.fromTo('.cta-4',
    {x:2000, opacity:0.5} ,
    {x:0, opacity: 1},
    '<');
tl.fromTo('.cta-6',
    {x:-2000, opacity:0.5} ,
    {x:0, opacity: 1},
    '<');
tl.fromTo('.cta-button',
    {y:20, opacity:0},
    {y:0, opacity:1},
    '<')

const button = document.querySelector('.cta-button');
button.addEventListener('mouseover', ()=>{
    gsap.fromTo('.cta-button', {scale: 1}, {scale: 0.9})
})
button.addEventListener('mouseout', ()=>{
    gsap.fromTo('.cta-button', {scale: 0.9}, {scale: 1})
})

button.addEventListener('click', ()=>{
    gsap.fromTo('.cta-button', {opacity:1}, {opacity:0.5, yoyo: true, repeat:1})
})

const button = document.querySelector('.cta-button');
button.addEventListener('click', ()=>{
    gsap.fromTo('.logo', {opacity:1}, {opacity:0})
})



const logo = document.querySelector('.logo');
const letters = logo.textContent.split('');
logo.textContent='';
letters.forEach((letter) =>{
    logo.innerHTML +=  '<span class="letter">' + letter + '</span>';
});


gsap.set('.letter',
    {display: 'inline-block'})
gsap.fromTo('.letter', {y:-40, opacity:0},{y:0, delay: 1, stagger:0.1, opacity:1})
