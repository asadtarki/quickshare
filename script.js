const cursor=document.getElementById('cursor');
const logo=document.getElementById('logo');
const form=document.getElementById('form');
//console.log(cursor);



document.querySelector('body').addEventListener('mousemove',(e)=>{
    cursor.style.visibility="visible"
    cursor.style.top=`${e.clientY-5}px`
    cursor.style.left=`${e.clientX+5}px`;
    let width=window.innerWidth;
    let height=window.innerHeight;
 
    if(width-e.clientX<20){
        
        cursor.style.display='none'
    }
    else{
        cursor.style.display="block"
    }
 
})

form.addEventListener('mouseenter',()=>{
   cursor.style.opacity=0;
})
form.addEventListener('mouseleave',()=>{
    cursor.style.opacity=1;
 })

logo.addEventListener('mouseenter',()=>{
    scale();
})

logo.addEventListener('mouseleave',()=>{
    unscale();

})






function unscale() {
    cursor.style.width="10px";
    cursor.style.height="10px";
    cursor.style.background="#fff"
}
function scale() {
    cursor.style.width="40px";
    cursor.style.height="40px";
    cursor.style.background="rgba(97, 151, 210,0.5)";
}


