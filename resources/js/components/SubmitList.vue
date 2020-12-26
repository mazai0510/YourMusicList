<template>
  <v-card
    class="pa-5 ma-5"
  >
    <v-row>
      <v-col cols = 6>
        <iframe 
        id="ytplayer" 
        type="text/html" 
        width=100% 
        height="250"
        v-bind:src="ListID"
        frameborder="0"></iframe>
      </v-col>
      <v-col cols = 6>
        <v-card-title class="pb-0">作成者 : {{author}} </v-card-title>
        <InputTitle :value="playlistTitle" @change="InputTitle"/>
        <ButtonSubmit :value="submitValue" @input="submitlist"/>
      </v-col>
    </v-row>
  </v-card>
</template>

<script>
import ButtonSubmit from './ButtonSubmit.vue'
import InputTitle from './InputTitle.vue'

export default {
  components:{
    'ButtonSubmit': ButtonSubmit,
    'InputTitle': InputTitle
  },
  //親コンポーネントからプレイリストID、プレイリスト名、作者名を受け取る
  props:{
    playlistid: String,
    author: String
  },
  //プレイリストのIDを返す
  data(){
    return {
      ListID: 'https://www.youtube.com/embed?listType=playlist&list=' + this.playlistid,
      submitValue: true,
      playlistTitle: ""
    }
  },

  methods: {
    submitlist: function(event) {
      let data = {
        'playlistid' : this.playlistid,
        'author' : this.author,
        'playlistTitle': this.playlistTitle
      };
      let axiosPost = axios.create({
        xsrfCookieName: "XSRF-TOKEN",
        withCredentials: true
      });
      axiosPost.post('/api/playlist',data)
        .then(response => {
          console.log('ok')
        })
        .catch(err => {
          console.log(err)
        })  
    },

    InputTitle (playlistTitle) {
      this.playlistTitle = playlistTitle
    }
  }
}
</script>
