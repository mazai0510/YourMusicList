<template>
  <main>
    <div v-for="item of listItems" :key="item.number">
      <FollowsLists v-bind:playlistid="item.playlistid" :author="item.author" :title="item.title"></FollowsLists>
    </div>
  </main>
</template>

<script>
import FollowsLists from "../components/FollowsLists.vue"

export default {
  name: 'FollowsPage',
  components: {
      'FollowsLists': FollowsLists
  },

  data: function() {
    return {
      listItems:{}
    }
  },

  methods: {
    GetPlayLists(){
      axios.get('/api/playlist')
      .then(response => {
        this.listItems = response.data;
        console.log(response.data);
      })
      .catch(err => {
               console.log(err);
      })
    },
  },

  created(){
    this.GetPlayLists();
  }
}
</script>
