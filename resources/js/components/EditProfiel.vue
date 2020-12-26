<template>
    <div>
        <div class="pa-4 pt-4">
            ユーザーネーム
            {{name}}
        </div>
        <div class="pa-4 pt-4">
            自己紹介
            {{intro}}
        </div>
        <v-row
            align="center"
            justify="end"
        >
            <v-btn 
                rounded 
                color="primary" 
                dark　
                large
                @click="overlay = !overlay"
            >
                プロフィールを編集
            </v-btn>
            <v-overlay
                :value="overlay"
            >   
                <v-form>
                    <v-card
                        class="pa-4 pt-6"
                    >
                        <v-text-field
                            v-model="editedAuthor"
                            label="Name"
                            filled
                            color="primary"
                        >
                        </v-text-field>
                        <v-text-field
                            v-model="editedIntro"
                            label="Introduction"
                            color="primary"
                        >
                        </v-text-field>
                        <v-btn
                            color="success"
                            @click="EditAuthor"
                        >
                            編集完了
                        </v-btn>
                    </v-card>
                </v-form>
            </v-overlay>
        </v-row>
    </div>
</template>

<script>

export default {
    data: () => ({
      overlay: false,
      editedAuthor: String,
      editedIntro: String
    }),

    props:{
        name: String,
        intro: String
    },

    methods:{
        init: function() {
            this.editedAuthor = this.name,
            this.editedIntro  = this.intro
        },

        EditAuthor:function() {
            this.overlay = false,
            this.$emit('EditAuthor', this.editedAuthor, this.editedIntro)
        }
    },

    created() {
        this.init()
    }
}

</script>
