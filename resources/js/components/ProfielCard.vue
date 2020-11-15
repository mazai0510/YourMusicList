<template>
    <v-card
        class="ma-5 pa-5"
    >
        <v-avatar>
            <v-img src='/imgs/icon.jpg'></v-img>
        </v-avatar>
        <v-card-title>  
            <EditProfiel :author="author" />
        </v-card-title>
        <v-card-text>
            hello
        </v-card-text>
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
        author: String
    }
}
</script>
