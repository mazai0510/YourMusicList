<template>
  <ProfielCard @EditAuthor="EditAuthor" :name="name" :intro="intro" />
</template>

<script>

import ProfielCard from "../components/ProfielCard.vue"

export default {
  name: "Profiel",

  data(){
    return {
      name: this.author,
      intro: this.introduction
    }
  },

  components: {
    'ProfielCard': ProfielCard
  },

  props: {
    author: String,
    introduction: String
  },

  methods: {
    EditAuthor(...event) {
      let [editedAuthor, editedIntro] = event;
      this.name = editedAuthor;
      this.intro = editedIntro;
      let data = {
        'rename': editedAuthor,
        'introduction': editedIntro,
        'beforename': this.author
      };
      if(editedAuthor !== this.author){
        let axiosPut = axios.create({
          xsrfCookieName: "XSRF-TOKEN",
          withCredentials: true
        });
        axiosPut.put('/api/EditProfiels/{EditProfiel}',data)
        .then(response => {
          console.log(response)
        })
        .catch(err => {
          console.log(err)
        })
      }
    },
  }
}

</script>
