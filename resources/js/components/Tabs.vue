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
      <router-view :playlistid="id"></router-view>
    </v-tabs-items>
  </v-content>
</template>

<script>
export default{
  data: function() {
    return {
      tab: null,
      items: [
        { name: 'Home', route: '/'},
        { name: 'Follows', route: '/Follows'},
        { name: 'Favorite', route: '/list'},
        { name: 'Profiel', route: '/Profiel'}
      ],
      ytdata: {},
      id:{}
    }
  },

  methods: {
    getLists(){
      axios.get('/api/list?ID=UCVPCrRPcM3elEAy3niJDykw')
      .then(response => {
        this.ytdata = response.data['items'],
        this.id = this.ytdata.map(item => item.id.playlistId).filter(Boolean),
        console.log(this.id)
      })
      .catch(err => {
        console.log(err)
      })
    }
  },

  watch: {
    items: function () {
      console.log('結果を表示します') 
      console.log(this.ytdata)
    }
  },

  created() {
    this.getLists();
  }

}
</script>
