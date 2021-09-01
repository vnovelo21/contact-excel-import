let mutations = {
    FETCH_CONTACTS(state, contacts) {
        return state.contacts = contacts;
    },
    SET_MESSAGE(state, message) {
        return state.message = message;
    },
}
export default mutations