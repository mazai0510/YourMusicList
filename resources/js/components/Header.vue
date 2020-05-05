<template>
  <v-card tile>
    <v-app-bar color="#333333" dark>
      <v-toolbar-title>
        <h1 class="font-weight-bold">AMuList</h1>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <login/>
    </v-app-bar>
  </v-card>
</template>

<script>
  import login from './login'

  export default {
    name: 'header',

    components :{
      login
    }

  }
</script>
