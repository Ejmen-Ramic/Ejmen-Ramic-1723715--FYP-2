/* PAYPAL 

function initPayPalButton() {
	paypal.Buttons({
			style: {
					shape: 'rect',
					color: 'gold',
					layout: 'vertical',
					label: 'paypal',
					
			},

			createOrder: function(data, actions) {
					return actions.order.create({
							purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
					});
			},

			onApprove: function(data, actions) {
					return actions.order.capture().then(function(orderData) {
							
							// Full available details
							console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

							// Show a success message within this page, e.g.
							const element = document.getElementById('paypal-button-container');
							element.innerHTML = '';
							element.innerHTML = '<h3>Thank you for your payment!</h3>';

							// Or go to another URL:  actions.redirect('thank_you.html');
							
					});
			},

			onError: function(err) {
					console.log(err);
			}
	}).render('#paypal-button-container');
}
initPayPalButton();

*/

/* PROGRESS BAR */

var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

function increase() {
	// Change the variable to modify the speed of the number increasing from 0 to (ms)
	let SPEED = 40;
	// Retrieve the percentage value
	let limit = parseInt(document.getElementById("value1").innerHTML, 10);

	for(let i = 0; i <= limit; i++) {
					setTimeout(function () {
									document.getElementById("value1").innerHTML = i + "%";
					}, SPEED * i);
	}
}

increase();