<template>
  <v-card
    class="ma-5"
  >
   <v-card-title> A </v-card-title>
    <v-card-subtitle class="pb-0">作成したプレイリスト</v-card-subtitle>
    <v-card-text class="text--primary">
    </v-card-text>
  </v-card>
</template>

<script>

export default {
  name: "Profiel",
  
  data: function() {
    return{
      items: {}
    }
  },

  methods: {
    postList(){
      let data = {
        'playlistid' : 'xxxxxxx123',
        'author' : 'mazai'
      };
      let axiosPost = axios.create({
        xsrfCookieName: "XSRF-TOKEN",
        withCredentials: true
      });
      axiosPost.post('/api/playlist',data)
        .then(response => {
          console.log('ok');
        })
        .catch()(err => {
          console.log(err);
        })
      }
   },

   created() {
      //this.postList();
   }
}

</script>
