<template>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div>
            <button @click="toggleContactTable()" class="btn btn-primary">Show Table</button>
        </div>
        <div v-if="showContactTable === true && 0 === 0" style="padding: 10px;">
            <h4 class="text-center font-weight-bold">Contacts</h4>
            <table class="table table-striped">
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
    export default {
        mounted(){
            this.showContactTable = false;
        },
        data: function(){
            return {
                showContactTable: false 
            }
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

    
