<template>
  <v-card tile>
    <v-app-bar color="#333333" dark>
      <v-toolbar-title>
        <h1 class="font-weight-bold">AMuList</h1>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <ButtonLogout v-if="checkUser"/>
      <ButtonLogin v-else/>
    </v-app-bar>
  </v-card>
</template>

<script>
  import ButtonLogin from './ButtonLogin'
  import ButtonLogout from './ButtonLogout'

  export default {
    name: 'header',

    components :{
      ButtonLogin,
      ButtonLogout
    },

    data() {
      return {
        checkUser: Boolean
      }
    },

    methods: {
      IsLogin(){
        axios.get('/api/islogin')
        .then(response =>{
          this.checkUser = Boolean(response.data)
        })
        .catch(err => {
          console.log(err)
        })
      }
    },

    created () {
      this.IsLogin()
    }

  }
</script>
