let actions = {
    createContacts({commit}) {
        axios.post('/contacts/import')
        .then(res => {
            commit('SET_MESSAGE', 'Succesfully Imported the Excel File!')
        })
        .catch(err => {
            commit('SET_MESSAGE', 'There was an Error Importing the Excel File!')
            console.log(err)
        })
    },
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