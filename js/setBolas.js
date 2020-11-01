const numBolas = urlParams.get('bolas');
const numBolasInputEl = document.querySelector( 'input[name="numero-bolas"]' );
numBolasInputEl.value = Number.parseInt( numBolas ) || 0;