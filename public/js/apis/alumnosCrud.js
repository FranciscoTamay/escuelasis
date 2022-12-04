function init(){

    var Apialumnos='http://127.0.0.1:8000/apiAlumnos'

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
        alumnos:[],
        nombre:'',
        apellidos:'',
        grupo:'',
        
      },

      created() {
        this.getAlumnos();
      },

      methods: {
        getAlumnos:function(){
            this.$http.get(Apialumnos).then(function(json){
                this.alumnos=json.data;
            }).catch(function(json){
                console.log.json;
            });
        },
      },


    });
    
    } window.onload=init;