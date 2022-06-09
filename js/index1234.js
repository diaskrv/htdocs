paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: totalPrice
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("https://herokuwebkai.herokuapp.com/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("https://herokuwebkai.herokuapp.com/Oncancel.php")
    }
}).render('#paypal-payment-button');
