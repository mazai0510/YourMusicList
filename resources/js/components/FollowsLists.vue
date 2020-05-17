<template>
  <v-card
    class="pa-5 ma-5"
  >
    <v-row>
      <v-col cols = 6>
        <iframe id="ytplayer" type="text/html" width=100% height="250"
        v-bind:src="ListID"
        frameborder="0"></iframe>
      </v-col>
      <v-col cols = 6>
        <v-card-title>プレイリスト名 : {{title}}</v-card-title>
        <v-card-subtitle class="pb-0">作成者 : {{author}}</v-card-subtitle>
      </v-col>
    </v-row>
  </v-card>
</template>

<script>
export default{
  //親コンポーネントからプレイリストID、プレイリスト名、作者名を受け取る
  props:{
    playlistid: String,
    author: String,
    title: String
  },
  //プレイリストのIDを返す
  data(){
    return {
      ListID: 'https://www.youtube.com/embed?listType=playlist&list=' + this.playlistid
    }
  }
}
</script>

