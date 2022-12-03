function init(){

    var ApiList='http://localhost/mayahoney/public/apiLista'

    new Vue({

      // le asignamos el token
       http: {
                headers: {
                   'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
                }
            },
    
      el:'#Lista',
    
      data:{
        prueba:'Holaaaa',
        Lista_empleados:[],
        agregando:true,
        id_empleado:'',
        nombre:'',
        apellidos:'',
        cargo:'',
        usuario:'',
        buscar:''
      },

      //Al crear la pagina se iniciara 
      created:function(){
        this.mostrarLista();
      },
      // inicio de los metodos
      methods:{
       mostrarLista:function(){
        this.$http.get(ApiList).then(function(json){
            this.Lista_empleados=json.data;
            console.log(json.data);
        }).catch(function(json){
            console.log(json);
        });
       },//fin mostrarLista

       mostrarModal:function(){
        this.agregando=true,
        this.id_empleado='',
        this.usuario='',
        this.nombre='',
        this.apellidos='',
        this.cargo='';
        $('#modalEmp').modal('show');
       },//fin mostrarModal

       guardarEmpleado(){
        var Lista_empleados={
            id_empleado:this.id_empleado,
            usuario:this.usuario,
            nombre:this.nombre,
            apellidos:this.apellidos,
            cargo:this.cargo};

            this.$http.post(ApiList,Lista_empleados).then(function(j){
                console.log('Empleado guardado');
                this.mostrarLista();
            }).catch(function(j){
            });

            $('#modalEmp').modal('hide');
            console.log(Lista_empleados);
       },//fin guardarEmpleado

       editarEmpleado(id){
        this.agregando=false;
        this.id_empleado=id;

        this.$http.get(ApiList + '/' + id).then(function(json){
          this.id_empleado=json.data.id_empleado;
          this.usuario=json.data.usuario;
          this.nombre=json.data.nombre;
          this.apellidos=json.data.apellidos;
          this.cargo=json.data.cargo;
        });
        $('#modalEmp').modal('show');
       },//fin editarEmpleado

       actualizarEmpleado(){
        var jsonEmpleado={
          id_empleado:this.id_empleado,
          usuario:this.usuario,
          nombre:this.nombre,
          apellidos:this.apellidos,
          cargo:this.cargo};

        this.$http.patch(ApiList + '/' + this.id_empleado,jsonEmpleado).then(function(json){
          this.mostrarLista();
        });

        $('#modalEmp').modal('hide');
       },//fin actualizarEmpleado

       eliminarEmpleado(id){
        var confir=confirm('Está seguro de eliminar al empleado?')
        if(confir)
        {
          this.$http.delete(ApiList + '/' + id).then(function(json){
            this.mostrarLista();
          }).catch(function(json){

          });
        }
       },//fin eliminarEmpleado
      },//fin de metodos

      computed:{
      filtroEmpleados:function(){
        return this.Lista_empleados.filter((empleado)=>{
          return empleado.usuario.match(this.buscar.trim())
        });
      }      
     },//fin de computed

    });
    
    } window.onload=init;