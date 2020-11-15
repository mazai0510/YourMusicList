<template>
    <div>
        {{author}}
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
                            v-model="author"
                            label="Name"
                            filled
                            color="primary"
                        >
                        </v-text-field>
                        <v-btn
                            color="success"
                            @click="overlay = false"
                        >
                            Hide Overlay
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
    }),

    props:{
        author: String
    }
}

</script>
