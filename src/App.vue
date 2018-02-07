<script>
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css'
export default {
  name: 'app',
  data :function(){
    return {
      lista : [],
      selected : '',
      
    }
  },
  
  created() {
    axios.get('./lista.json')
    .then(response => {
      // JSON responses are automatically parsed.
      this.lista = (response.data)
    })
    .catch(e => {
      this.errors.push(e)
    })

  },
  methods: {
    changed: function (sel) {
      this.showing = lista["sel"]
    }
  }

}

</script>
<template>
  <div class="container" role="tablist">
  <h2>Lista</h2>
      <b-card no-body v-for="(value,index,key) in lista" class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-btn block href="#" v-b-toggle="'accordion'+ key" variant="">{{index}}</b-btn>
        </b-card-header>
        <b-collapse :id="'accordion'+ key"  accordion="my-accordion" role="tabpanel">
          <b-card-body>
            
                <table class="table table-striped  card-text" >
                  <thead>
                    <tr>
                      <th>Arquivo</th>
                      <th>Nome</th>
                    </tr>
                  </thead>
                  <tbody>
                     <tr v-for="(l) in value">
                        <td>
                          <a target="_blank" :href="l.url"><img src="./assets/pdf.png"></a>
                        </td>
                        <td>
                          <span><b>{{l.nome}}</b></span>
                        </td>

                     </tr>
                  </tbody>
               </table>
          </b-card-body>
        </b-collapse>
      </b-card>
      
      
    </div>
</template>



<style scopped>

</style>
