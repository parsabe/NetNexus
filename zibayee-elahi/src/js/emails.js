document.addEventListener('DOMContentLoaded', function() {


    const emailForm= document.querySelector(".emailForm");
    const emailFormBtn= document.querySelector(".emailFormBtn");

    emailForm.onsubmit = (e)=>{
        e.preventDefault();
    }




    emailFormBtn.onclick = ()=>{
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/src/php/emails.php", true);
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
                      message: 'Your email has been registered.',
                      messageColor: '#004719',
                      position: 'topRight',
                      timeout: 5000,
                      
                  }); 
                  }
                  
                  else if(data === "Email already exists"){
                    iziToast.show({
                       color: 'red',
                      titleColor: '#580000',
                      theme: 'dark',
                      icon: 'bi bi-exclamation-triangle',
                      iconColor: '#580000',
                      title: 'Error',
                      message: 'Email already exists',
                      messageColor: '#580000',
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
                      message: 'Something went wrong',
                      messageColor: '#580000',
                      position: 'topRight',
                      timeout: 5000,
                    });  
                  }
                  else if(data === "valid mail"){
                    iziToast.show({
                       color: 'red',
                      titleColor: '#580000',
                      theme: 'dark',
                      icon: 'bi bi-exclamation-triangle',
                      iconColor: '#580000',
                      title: 'Error',
                      message: 'You need to enter a valid email',
                      messageColor: '#580000',
                      position: 'topRight',
                      timeout: 5000,
                    });  
                  }
                  else if(data === "valid mail"){
                    iziToast.show({
                       color: 'red',
                      titleColor: '#580000',
                      theme: 'dark',
                      icon: 'bi bi-exclamation-triangle',
                      iconColor: '#580000',
                      title: 'Error',
                      message: 'You need to enter a valid email',
                      messageColor: '#580000',
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
                      message: 'Something went wrong',
                      messageColor: '#580000',
                      position: 'topRight',
                      timeout: 5000,
                    });  
                  }
                  else {
                    iziToast.show({
                       color: 'red',
                      titleColor: '#580000',
                      theme: 'dark',
                      icon: 'bi bi-exclamation-triangle',
                      iconColor: '#580000',
                      title: 'Error',
                      message: 'Something is blocking the operation',
                      messageColor: '#580000',
                      position: 'topRight',
                      timeout: 5000,
                    });  
                  }
           
           
                }
              }
            }
        let emailFormData = new FormData(emailForm);
        xhr.send(emailFormData);
    }



    




});