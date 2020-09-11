
export default {
  name: 'employee-component',
  props:{
      usuario: String,
      listado: Array,
      booleanSelect: Boolean
  },
  data(){
      return{
          stringMessageInitial: 'Formato ',
          listaJSON: '',
          tag: '',
          contentPressedElement: 'No tocado',
          cssInitialColor: 'color:blue'
      }
  },
  methods:{
      over: function (item) {
              this.contentPressedElement = item.id + ' '+ item.first_name + ' '+ item.last_name + ' ' + item.gender;
              item.passover = true;
      },
      out: function (item) {
        this.contentPressedElement = "Empty";
        item.passover = false;
      }
  },
  computed:{
      stringMesaggeShow:{
          get:function(){
              if(this.booleanSelect){
                  return  this.stringMessageInitial + 'Lista'
              }else{
                  return  this.stringMessageInitial + 'Tabla'
              }
          
          },
          set:function(value){
              this.stringMesaggeShow=value;
          }
      }
  },
  
  created: function () {    
    console.log('el componente: ha sido creado')
    this.listaJSON = this.listado
    this.listaJSON.newProperty = 'passover'
    
    for(var i = 0; i < this.listaJSON.length; i++) {
      this.listaJSON[i].passover = false;        
    }
}
  
}


