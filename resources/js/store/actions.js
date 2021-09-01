let actions = {
    // createContact({commit}, post) {
    //     axios.post('/contacts/import', post)
    //         .then(res => {
    //             commit('CREATE_CONTACT', res.data)
    //         }).catch(err => {
    //         console.log(err)
    //     })
      
    // },
    fetchContacts({commit}) {
        axios.get('/contacts/import')
            .then(res => {
                commit('FETCH_CONTACTS', res.data)
            }).catch(err => {
            console.log(err)
        })
    }
}

export default actions;