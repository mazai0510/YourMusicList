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
        <v-card-title>プレイリスト名 : AAA</v-card-title>
        <v-card-subtitle class="pb-0">作成者 : {{userData['name']}} </v-card-subtitle>
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
    playlistid: String
  },
  //プレイリストのIDを返す
  data(){
    return {
      ListID: 'https://www.youtube.com/embed?listType=playlist&list=' + this.playlistid,
      submitValue: true,
      userData: {},
      playlistTitle: ""
    }
  },

  methods: {
    submitlist: function(event) {
      let data = {
        'playlistid' : this.playlistid,
        'author' : this.userData['name'],
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
        .catch()(err => {
          console.log(err)
        })  
    },

    InputTitle (playlistTitle) {
      this.playlistTitle = playlistTitle
    },

    getUser(){
      axios.get('/api/getlogininfo')
      .then(response =>{
        this.userData = response.data,
        console.log(this.userData)
      })
      .catch(err => {
        console.log(err)
      })
    }
  },

  created() {
    this.getUser();
  }

}
</script>
