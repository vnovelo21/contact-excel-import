<template>
    <div v-if="showContactTable === true && count(contacts) > 0" class="d-flex flex-column justify-content-center align-items-center">
        <div>
            <button @click="toggleContactTable()" class="btn btn-primary">Show Table</button>
        </div>
        <div style="padding: 10px;">
            <h4 class="text-center font-weight-bold">Contacts</h4>
            <table class="table table-striped" style="max-height:200px; overflow:scroll; text-align:center; margin:auto;">
                <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="contact in contacts" v-bind:key="contact.id">
                    <td>{{contact.firsname}}</td>
                    <td>{{contact.lastname}}</td>
                    <td>{{contact.email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        mounted(){
            this.showContactTable = false;
            this.$store.dispatch('fetchContacts')
        },
        data: function(){
            return {
                showContactTable: false 
            }
        },
        computed: {
            ...mapGetters([
                'contacts'
            ])
        },
        methods:{
            toggleContactTable: function(){
                console.log(this.showContactTable);
                console.log('toggling button')
                this.showContactTable = !this.showContactTable
            }
        }
    }
</script>

    
