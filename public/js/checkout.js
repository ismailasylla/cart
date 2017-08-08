var stripe = Stripe('pk_test_naXSQ2aEuAxP4seYiG5Kq599');

stripe.createToken(card).then(function(result) {
    // handle result.error or result.token
});

var $form = $('checkout-form');
$form.submit(function(event){
$('charge-error').addClass(hidden);
$form.find('button').prop('disabled', true);

    stripe.createToken('bank_account', {
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }).then(function(result) {
        // handle result.error or result.token
    });

    return false;

});

function stripeResponseHandler(){
    if(response.error){
      $('#charge-error').removeClass('hidden');
      $('#charge-error').text(response.error.message);
      $form.find('button').prop('disabled', false);

    }else{
        var token = response.id;
        $form.append($('<input type= "hidden" name="stripeToken"/>').val(token));

        // submit the form

        $form.get(0).submit();
    }
}


