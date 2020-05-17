<template>
  <div class="my-2">
    <v-btn @click="Logout" light depressed>Logout</v-btn>
  </div>
</template>

<script>
export default {

  methods: {
    Logout:function() {
      axios.get('/api/getlogout')
      .then(response =>{
        console.log('logouted!!')
        this.$router.go({path: this.$router.currentRoute.path, force: true})
      })
      .catch(err =>{
        console.log(err)
      })
    }
  }
}
</script>
