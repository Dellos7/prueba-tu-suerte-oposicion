const numTemas = urlParams.get('temas');
const numeroTemasEl = document.querySelector( 'input[name="numero-temas"]' );
numeroTemasEl.value = Number.parseInt(numTemas) || 0;