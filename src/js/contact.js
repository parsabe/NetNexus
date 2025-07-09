
document.addEventListener('DOMContentLoaded', function() {

const contactForm = document.querySelector(".contactForm"),
contactFormBtn = document.querySelector(".contactFormBtn");

    contactForm.onsubmit = (e)=>{
        e.preventDefault();
    }

    contactFormBtn.onclick = ()=>{
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/src/php/contact.php", true);
        xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status === 200){
                  let data = xhr.response;
                  if(data === "success"){
  
                    iziToast.show({
                      color: 'green',
                      titleColor: '#004719',
                      theme: 'dark',
                      icon: 'bi bi-check',
                      iconColor: '#004719',
                      title: 'Success',
                      message: 'Your message has been sent',
                      messageColor: '#004719',
                      position: 'topRight',
                      timeout: 5000,
                      
                  }); 
                  }
                  else if(data === "Something went wrong"){
                    iziToast.show({
                       color: 'red',
                      titleColor: '#580000',
                      theme: 'dark',
                      icon: 'bi bi-exclamation-triangle',
                      iconColor: '#580000',
                      title: 'Error',
                      message: 'Something went wrong.',
                      messageColor: '#580000',
                      position: 'topRight',
                      timeout: 5000,
                    });  
                  }
                  else if(data === "Failed to insert data"){
                    iziToast.show({
                       color: 'red',
                      titleColor: '#580000',
                      theme: 'dark',
                      icon: 'bi bi-exclamation-triangle',
                      iconColor: '#580000',
                      title: 'Error',
                      message: 'Failed to insert data.',
                      messageColor: '#580000',
                      position: 'topRight',
                      timeout: 5000,
                    });  
                  }
                  else if(data === "Something is blocked"){
                    iziToast.show({
                       color: 'red',
                      titleColor: '#580000',
                      theme: 'dark',
                      icon: 'bi bi-exclamation-triangle',
                      iconColor: '#580000',
                      title: 'Error',
                      message: 'Something is blocked.',
                      messageColor: '#580000',
                      position: 'topRight',
                      timeout: 5000,
                    });  
                  }
          
                }
              }
            }
        let contactFormData = new FormData(contactForm);
        xhr.send(contactFormData);
    }
    
    




});