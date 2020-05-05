<template>
  <v-app>
    <Header/>
    <Tabs/>
    <Footer/>
  </v-app>
</template>

<script>
import Header from './components/Header'
import Tabs from './components/Tabs'
import Footer from './components/Footer'

export default {
  name: 'App',

  components: {
    Header,
    Tabs,
    Footer
  },

  data: () => ({
    //
  })
}
</script>
