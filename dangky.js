
//code cho validator
function validator(option){
    var formElement= document.querySelector(option.form)
    if(formElement){
        option.rules.forEach(function(rule) {
            var inputElement=formElement.querySelector(rule.selector)
            var errorElement=inputElement.parentElement.querySelector('.form_message')
            if(inputElement){
                inputElement.onblur=function(){
                    var errorMessage=rule.test(inputElement.value)
                   
                    if(errorMessage){
                        errorElement.innerText=errorMessage
                    }else{
                        errorElement.innerText=''
                    }
                    
                }
                inputElement.oninput=function(){                
                        errorElement.innerText=''
                }
            }
        })
    }
}

validator.isEmail=function(selector){
    return {
        selector: selector,
        test: function(value){
            var regex= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(regex.test(value.trim())){
                return undefined
            }else if(value===""){
                return 'Vui lòng nhập email..'
            }else{
                return 'Chỉ được nhập email cho trường này..'
            }
        }
    };
}

validator.passWord=function(selector){
    return {
        selector: selector,
        test: function(value){
            return value.length>=6 ? undefined:'Vui lòng nhập tối thiểu 6 ký tự'
        }
    };
}
