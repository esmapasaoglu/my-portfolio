let menu = document.querySelector('#menu-bars') ;
let header = document.querySelector('header');

menu.onclick = () =>{
menu.classList.toggle('fa-times');
header.classList.toggle('active');

}


window.onscroll = () =>{
menu.classList.remove('fa-times');
header.classList.remove('active');

}



    const paylasButon = document.getElementById("paylas");
    paylasButon.addEventListener("click", async () =>{
 
        if (navigator.canShare) {
            
            try {
                
                await navigator.share({
                    title:"Esmanur Paşaoğlu",
                    text:"Esmanur Paşaoğlu'na ait proje 01.",
                    url:"https://github.com/esmapasaoglu/ITP-PROJE-ODEVI" 
                })
                console.log("Paylaş çalıştı")
            } catch (error) {
                console.log("Bir sorun oluştu.")
            }
 
        } else {
            Console.log("Tarayıcı desteklemiyor")
        }
    });
 
