

const sendMessage=async (e)=>{
  try{
    e.preventDefault();
    const response= await fetch('./index.php/frontend/store',{
      method:'POST',
      body:new FormData(e.target)
    })
    if(response.status==500){
      throw "the message could not be sent. Not working server"
    }
    const json= await response.json();
    if(!json.status){
      const message= json.error ?`${json.message}\ndata incorrect:${Object.values(json.error).join('\n')}`:json.message;
      throw message;
    }
    alert(json.message)
    e.target.querySelectorAll('input,textarea').forEach(el=>el.value='')
  }catch(e){
    alert(e);
  }
  
 
  e.preventDefault();
}
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById('contactoForm').onsubmit=sendMessage;
});
