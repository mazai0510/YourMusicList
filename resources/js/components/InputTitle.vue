<template>
    <v-text-field
        dense
        label="Regular"
        v-model="playlistTitle"
    ></v-text-field>
</template>

<script>
export default {
  name: "InputTitle",
  props:{
      value:String
  },

  computed: {
    playlistTitle:{ 
      get: function() {
        return this.value;
      },
      set: function(value){
        this.$emit("change",value)
      }
    }
  }
}
</script>

