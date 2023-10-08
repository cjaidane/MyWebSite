document.querySelector( "section form button ")
        .addEventListener('click',function(event){
            event.preventDefault()

            let hasError = false
            const regexInput =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
            const regexInput1 =/^[\s]{1,50}$/;

            /*const Inputverifmail =function(){
                if (this.value.match(regexInput) == null) {
                    this.classList.add('error')
                    this.previousElementSibling.classList.add('error')
                    hasError = true
                }
                else{
                    this.classList.remove('error')
                    this.previousElementSibling.classList.remove('error')
                    hasError = false
                }
            }
            const Inputverifmdp =function(){
                if (this.value== '') {
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
            

            let mailInput=document.getElementById('email')
            if (mailInput.value.match(regexInput) == null) {
                mailInput.classList.add('error')
                mailInput.previousElementSibling.classList.add('error')
                hasError = true
            }
            mailInput.addEventListener('input', function(){
                if (this.value.match(regexInput) == null) {
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

            let passwordInput=document.getElementById('password')
            if (passwordInput.value == '') {
                passwordInput.classList.add('error')
                passwordInput.previousElementSibling.classList.add('error')
                hasError = true
            }
            passwordInput.addEventListener('input',function(){
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
                document.querySelector(" section form ")
                        .submit()
            }

        })

