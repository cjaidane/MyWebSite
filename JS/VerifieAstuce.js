// Vérifiaction pour l'astuce
document.getElementsByTagName("form")[0]
        .addEventListener('submit',function(event){
            event.preventDefault()

            let hasError = false
            const regexInput1 =/^[\s]{1,50}$/;
            /*const InputVerifMessage=function(){
                if (this.value.match(regexInput1) == null) {
                    this.classList.add('error')
                    this.previousElementSibling.classList.add('error')
                    hasError = true
                }
                else{
                    this.classList.remove('error')
                    this.previousElementSibling.classList.remove('error')
                    hasError = false
                }
            }*/

            let firstNameInput=document.getElementById('firstName')
            if (firstNameInput.value == '') {
                firstNameInput.classList.add('error')
                firstNameInput.previousElementSibling.classList.add('error')
                hasError = true
            }
            firstNameInput.addEventListener('input',function(){
                if (this.value == '') {
                    this.classList.add('error')
                    this.previousElementSibling.classList.add('error')
                    hasError = true
                }
                else{
                    this.classList.remove('error')
                    this.previousElementSibling.classList.remove('error')
                    hasError = false
                }
            })


            let textArea=document.getElementById('astuce')
            if (textArea.value == '') {
                textArea.classList.add('error')
                textArea.previousElementSibling.classList.add('error')
                hasError = true
            }
            textArea.addEventListener('input',function(){
                if (this.value == '') {
                    this.classList.add('error')
                    this.previousElementSibling.classList.add('error')
                    hasError = true
                }
                else{
                    this.classList.remove('error')
                    this.previousElementSibling.classList.remove('error')
                    hasError = false
                }
            })


            if (!hasError){
                    event.preventDefault();
                    fetch("../php/ast.php",{
                        method:"post",
                        body:new FormData(this)
                    })
            }
        })