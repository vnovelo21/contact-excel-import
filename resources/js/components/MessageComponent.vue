<template>
    <div v-if="message.length > 0" class="alert alert-success" role="alert">
        {{message}}
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        mounted(){
            this.showContactTable = false;
            this.$store.dispatch('fetchContacts')
        },
        updated() {
            if(message){
                this.showMessage();
            }
        },
        data: function(){
            return {
                show: false,

            }
        },
        methods: {
            showMessage() {
                this.show = true;
                this.body = this.message;
   
                setTimeout(() => {this.hideMessage()},3000);
            },
            hideMessage() {
                this.show = false;
            }
        },
        computed: {
            ...mapGetters([
                'message'
            ])
        }
    }
</script>

    
