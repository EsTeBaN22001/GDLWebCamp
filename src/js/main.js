(function(){
  'use strict';

  const gift = document.querySelector('#gift');
  document.addEventListener('DOMContentLoaded', function(){

    // Datos del usuario
    const name = document.querySelector('#name');
    const surname = document.querySelector('#surname');
    const email = document.querySelector('#email');

    // Campo pases
    const passDay = document.querySelector('#pass-day');
    const completDay = document.querySelector('#complet-day');
    const passTwoDays = document.querySelector('#pass-two-days');

    // Buttons and Divs
    const calc = document.querySelector('#calc');
    const error = document.querySelector('#error');
    const btnRegistro = document.querySelector('#btnRegistro');
    const resumen = document.querySelector('#list-products');
    const total = document.querySelector('#sum-total');

    // Extras
    const camisas = document.querySelector('#camisa_evento');
    const etiquetas = document.querySelector('#etiquetas');

    calc.addEventListener('click', calcAmounts);

    function calcAmounts(event){
      event.preventDefault();
      if(gift.value === ''){
        alert('Debes elegir un regalo');
        gift.focus();
      }else{
        let ticketsDay = parseInt(passDay.value, 10) || 0;
        let ticketsTwoDays = parseInt(passTwoDays.value, 10) || 0;
        let ticketsCompletDay = parseInt(completDay.value, 10) || 0;
        let cantCamisas = parseInt(camisas.value, 10) || 0;
        let cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

        // Sumando todas las variables para obtener un total a pagar
        let totalToPay = ticketsDay * 30;
            totalToPay += ticketsTwoDays * 45;
            totalToPay += ticketsCompletDay * 50;
            totalToPay += (cantCamisas * 10) * .93;
            totalToPay += cantEtiquetas * 2;
        
        // Sección de resumen
        let productsList = [];

        if(ticketsDay >= 1){
          productsList.push(`${ticketsDay} Pases por día`);
        }

        if(ticketsTwoDays >= 1){
          productsList.push(`${ticketsTwoDays} Pases por 2 días`);
        }

        if(ticketsCompletDay >= 1){
          productsList.push(`${ticketsCompletDay} Pases completos`);
        }

        if(cantCamisas >= 1){
          productsList.push(`${cantCamisas} Camisas`);
        }

        if(cantEtiquetas >= 1){
          productsList.push(`${cantEtiquetas} Etiquetas`);
        }

        productsList.innerHTML = '';

        for (let i = 0; i < productsList.length; i++) {
          resumen.innerHTML += `${productsList[i]} <br/>`;
        }

        total.innerHTML = `$${totalToPay.toFixed(2)} <br/>`;
      }
    }

  }); //DOMContentLoaded
})();