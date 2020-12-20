<template>
  <v-content>
    <v-tabs
      v-model="tab"
      background-color="#333333"
      color="white"
      grow
      dark
    >
      <v-tab
        v-for="item in items"
        :key="item.name"
        :to="item.route"
      >
        {{ item.name }}
      </v-tab>
    </v-tabs>

    <v-tabs-items v-model="tab">
      <v-tab-item
        v-for="item in items"
        :key="item.name"
        :value="item.route"
      >
      </v-tab-item>
      <router-view :playlistid="id" :author="userData['name']"></router-view>
    </v-tabs-items>
  </v-content>
</template>

<script>
import Header from "./Header.vue"
export default {
  data: function() {
    return {
      tab: null,
      items: [
        { name: 'Home', route: '/'},
        { name: 'TimeLine', route: '/Follows'},
        { name: 'Playlists', route: '/List'},
        { name: 'Profiel', route: '/Profiel'}
      ],
      ytdata: {},
      id:{},
      userData: {}
    }
  },

  methods: {
    getLists: async function () {
      await axios.get('/api/getlogininfo')
      .then(response =>{
        this.userData = response?.data
        console.log("playlistid...")
        console.log(this.userData.channelid)
      })
      .catch(err => {
        console.log(err)
      })
      if(!!this.userData.channelid){
        axios.get('/api/list?ID=' + this.userData.channelid)
        .then(response => {
          this.ytdata = response.data['items'],
          this.id = this.ytdata?.map(item => item.id.playlistId).filter(Boolean)
        })
        .catch(err => {
          console.log(err)
        })
      }
    }
  },

  created() {
    this.getLists();
  }

}
</script>
