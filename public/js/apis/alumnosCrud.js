function init(){

    var Apialumnos='http://localhost/mayahoney/public/apiLista'

    new Vue({
        // le asignamos el token
       http: {
        headers: {
           'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
        }
    },

    el:'#alumnos',
    
      data:{
        mensaje:'Estamos probando el pinche perro vue',
        matricula:null,
        nombre:'',
        apellidos:'',
        grupo:'',
        
      },


    });
    
    } window.onload=init;