 //../resources/js/components/Posts.vue
    
    <template>
        <div>
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
    
    </template>

    
