<template>
  <v-carousel
    cycle
    height="400"
    hide-delimiter-background
    interval="4000"
    class="pa-10"
  >
    <v-carousel-item
      v-for="(item, i) in items"
      :key="i"
      :src="item.src"
      reverse-transition="fade-transition"
      transition="fade-transition"
    >
    </v-carousel-item>
  </v-carousel>
</template>

<script>
export default {
  data () {
    return {
      items: [
          {
            src: '/imgs/home1.jpg',
          },
          {
            src: '/imgs/home2.jpg',
          },
          {
            src: '/imgs/home3.jpg',
          },
        ],
    }
  }
}
</script>
