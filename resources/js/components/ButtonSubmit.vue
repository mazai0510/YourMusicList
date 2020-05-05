<template>
  <div>
    <v-btn
      color="blue"
      dark
      @click="sheet = !sheet"
    >
      Submit
    </v-btn>
    <v-bottom-sheet v-model="sheet">
      <v-sheet class="text-center" height="200px">
        <v-btn
          class="mt-6"
          text
          color="red"
          @click="clicked"
        >confirm</v-btn>
        <div class="py-3">投稿しますか？</div>
      </v-sheet>
    </v-bottom-sheet>
  </div>
</template>

<script>

export default {
    data: ()=>({
        sheet: false
    }),

    props: {
      value:{
        type: Boolean,
        default: false
      }
    },

    methods:{
      clicked:function() {
        this.sheet = !this.sheet,
        this.$emit('input', this.sheet)
      }
    }
  }
</script>
