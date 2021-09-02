<template>
    <div v-if="contacts.length > 0" class="p-2">
        <div>
            <button @click="toggleContactTable()" class="btn btn-primary">Show Table</button>
        </div>
        <div  v-if="contacts.length > 0 && showContactTable" v-bind:style="styleObject">
            <h4 class="text-center font-weight-bold">Contacts</h4>
            <table id="contact-table" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="contact in contacts" v-bind:key="contact.id">
                    <td>{{contact.firstname}}</td>
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
            if(this.contacts.length > 0){
                this.showContactTable = true;
            }
            else{
                this.showContactTable = false;
            }
            this.$store.dispatch('fetchContacts');
        },
        data: function(){
            return {
                showContactTable: false,
                styleObject: {
                    padding: "10px",
                    maxHeight:"50vh", 
                    overflowY:"scroll",
                    textAlign:"center", 
                    margin:"auto"
                }, 
            }
        },
        computed: {
            ...mapGetters([
                'contacts'
            ])
        },
        methods:{
            toggleContactTable: function(){
                this.showContactTable = !this.showContactTable;
            }
        }
    }
</script>

    
