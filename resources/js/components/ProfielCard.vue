<template>
    <v-card
        class="ma-5 pa-5"
    >
        <v-avatar>
            <v-img src='/imgs/icon.jpg'></v-img>
        </v-avatar>
        <v-card-title>  
            <EditProfiel @EditAuthor="EditAuthor" :name="name" :intro="intro" />
        </v-card-title>
    </v-card>
</template>

<script>

import EditProfiel from "../components/EditProfiel.vue"

export default {
    name: "ProfielCard",

    components:{
        "EditProfiel" : EditProfiel
    },

    props:{
        name: String,
        intro: String
    },

    methods: {
        EditAuthor(...event){
            let [editedAuthor, editedIntro] = event
            this.$emit('EditAuthor', editedAuthor, editedIntro)
        }
    }
}
</script>
