const uploadBtn=document.getElementById('linkbutton');
const uploadform=document.getElementById('mForm');

const formTop=document.getElementById('top');
const  file=document.getElementById('filepicker');
const progressloader=document.getElementById('loadblock');
const progresstext=document.getElementById('perc');
const progressbar=document.getElementById('loader');
const showlink=document.getElementById('videoblock');

const link=document.getElementById('link');
console.log(link);

uploadBtn.classList.add('dislinkbutton')
uploadBtn.classList.remove('linkbutton')

uploadBtn.disabled =true;

const baseurl="localhost/quickshare/download.php";

file.addEventListener('change',()=>{
    if(file.files.length>0){
        uploadBtn.disabled = false;
        uploadBtn.classList.remove('dislinkbutton')
        uploadBtn.classList.add('linkbutton')
    }
    else{

        uploadBtn.disabled =true;
        uploadBtn.classList.remove('linkbutton')
        uploadBtn.classList.add('dislinkbutton')
    }
})

// console.log(formTop)
let res=document.getElementById('mess');

uploadform.addEventListener('submit',uploadFile);

function uploadFile(event){
    event.preventDefault();

    // console.log(file.files.length);

    formTop.style.display='none'
    uploadBtn.style.display='none'
    progressloader.style.display='block'
    let formdata=new FormData(uploadform);
    console.log(formdata.get('file'));

    //ajax request to send data.
    const xhr=new XMLHttpRequest();
    xhr.open('POST','savefile.php');
    xhr.onreadystatechange = function() {
        if (xhr.status == 200) {
            
            document.getElementById('link').innerHTML=baseurl+`?download=${xhr.responseText}`;
            res.innerHTML=xhr.responseText
            
        }
    }
// update progress bar on upload  of data
    xhr.upload.addEventListener('progress',e=>{
        console.log(e)
        const perc=e.lengthComputable ? (e.loaded/e.total)*100:0;
        
        
        // console.log(perc);
        // progressbar.style.width=perc.toFixed(2)+'%';
        progresstext.innerHTML=Math.trunc(perc.toFixed(2))+'%'

        if(perc.toFixed(2)==100){

            progressbar.style.border="16px solid #3498db";
            setTimeout(() => {
                progressloader.style.display='none'
                showlink.style.display='block'
            },1000);
           
           
        }
    
        
        
    })
   
    xhr.send(new FormData(uploadform))

}

