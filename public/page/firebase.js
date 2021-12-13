window.onload=function(){
    // alert('ok')
    render();
}
function render()
{
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();

}
function phoneAuth()
{
    var phone_number=document.getElementById('phone').value;
    // alert(phone_number);
firebase.auth().signInWithPhoneNumber(phone_number, window.recaptchaVerifier).then(function(confirmationResult){
      // SMS sent. Prompt user to type the code from the message, then sign the
      // user in with confirmationResult.confirm(code).
      window.confirmationResult = confirmationResult;
      coderesult=confirmationResult;
      console.log(coderesult);
      alert('message sent');
      console.log('aaaa')
      // ...
    }).catch(function(error) {
      // Error; SMS not sent
      // ...
      alert(error.message);

    });
}