let actions = {
    fetchContacts({commit}) {
        axios.get('/contacts')
        .then(res => {
            commit('FETCH_CONTACTS', res.data)
        })
        .catch(err => {
        console.log(err)
        })
    }
}

export default actions;