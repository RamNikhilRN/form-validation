$('document').ready(function()
{    
   // name validation
    var nameregex = /^[a-zA-Z0-9 ]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
   
   // valid email pattern
   var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   
   $.validator.addMethod("validemail", function( value, element ) {
       return this.optional( element ) || eregex.test( value );
   });

  var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
   $.validator.addMethod("validpassword", function( value, element ) {
       return this.optional( element ) ||strongRegex.test( value );
   });
   
   $("#register-form").validate({
     
    rules:
    {
    username: {
     required: true,
     validname: true,
     minlength: 3
    },
    fullname: {
     required: true,
     validname: true,
     minlength: 4
    },
    email: {
     required: true,
     validemail: true
    },

    cemail: {
     required: true,
     equalTo: '#email'
  },
    password: {
     required: true,
     validpassword: true,
     minlength: 8,
     maxlength: 15
    },
    cpassword: {
     required: true,
     equalTo: '#password'
    },
     },
     messages:
     {
    name: {
     required: "Please Enter User Name",
     validname: "Name must contain only alphabets and space",
     minlength: "Your Name is Too Short"
       },
       email: {
       required: "Please Enter Email Address",
       validemail: "Enter Valid Email Address"
        },
    password:{
     required: "Please Enter Password",
     validpassword: "At least 8 character, lowercase,upper case, number",
     minlength: "Password at least have 8 characters"
     },
    cpassword:{
     required: "Please Retype your Password",
     equalTo: "Password Did not Match !"
     }
     },
     errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
     },
     highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
     },
     unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
     },
     
     submitHandler: function(form) {
                    form.submit();
     alert('ok');
                }
     }); 
 })