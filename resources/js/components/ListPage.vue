<template>
   <v-card
      class="pa-5 ma-5"
   >
      <v-card-title> 作成したプレイリスト </v-card-title>
      <v-card-text class="text--primary"></v-card-text>
      <div v-for="item in playlistid">
         <SubmitList :playlistid="item" :author="author" />
      </div>
   </v-card>
</template>

<script>
import SubmitList from "./SubmitList.vue"

export default {
   name: "list",
   
   components: {
      'SubmitList': SubmitList
   },

   props: {
      playlistid: Object,
      author: String
   },
}

</script>
