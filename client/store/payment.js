import axios from 'axios'

// state
const state = () => ({
    current: null,
    address: null,
    search: {
        isSearching: false,
        term: null,
        suggestions: []
    },
    hasAddress: false,
    errors: [],
    processes: {
        isRunning: false,
        isSuccess: false,
    }
})

// getters
const getters = {
    current: state => state.current,
    search: state => state.search,
    hasAddress: state => state.hasSearched,
    address: state => state.address,
    errors: state => state.errors,
    processes: state => state.processes
}

// mutations
const mutations = {
    setCurrent(state, current) {
        state.current = current;
    },
    setAddress(state, address) {
        state.address = address;
        state.hasAddress = address != null;
    },
    setSearch(state, search) {
        state.search = search;
        state.hasSearched = true;
    },
    setErrors(state, errors) {
        state.hasAddress = errors;
    },
    setProcess(state, process) {
        state.processes[process.key] = process.value;
    },
}

// actions
const actions = {
    onAddress({dispatch, commit, state}, payload) {
        commit('setAddress', payload);

        dispatch('base/onProcess', {key: 'isSuccess', value: false}, {root: true});
        console.log(payload, "setAddress >>>>");
    },
    async onProcess({dispatch, commit, state}, payload) {
        try {
            commit('setProcess', payload);
        } catch (e) {
            commit('setErrors', e)
        }
    },
    async onSearch({commit}, payload) {
        dispatch('base/onProcess', {key: 'isSearching', value: true});

        await axios.post('/address/search', payload).then(({data}) => {
            console.log('response: onSearch data: ', data);

            let search = data;
            commit('setSearch', search);
            console.log('response: onSearch: ', search);

            setTimeout(() => {
                dispatch('base/onProcess', {key: 'isSearching', value: false});
            }, 600);
        });
    },
    async onPost({dispatch, commit, state}, payload) {
        console.log('response: onPost', payload);

        let params = payload.params;
        let route = payload.route;
        let current = payload.current;

        commit('setCurrent', current);

        dispatch('base/onProcess', {key: 'isRunning', value: true}, {root: true});
        dispatch('base/onProcess', {key: 'isSuccess', value: false}, {root: true});

        await axios.post(route, params).then(({data}) => {
            console.log('response: onPost data::', data);

            dispatch('account/onAddresses', {}, {root: true});

            let modal = {};
            modal.isVisible = false;
            modal.current = null;

            dispatch('base/onProcess', {key: 'isSuccess', value: true}, {root: true});
            setTimeout(() => {
                dispatch('base/onProcess', {key: 'isRunning', value: false}, {root: true});
            }, 900);

            setTimeout(() => {
                dispatch('base/onModal', modal, {root: true});
            }, 3600);
        });
    },
    async onForm({dispatch, commit, state}, payload) {
        let form = payload.form;
        let fields = payload.fields;

        let mapFields = {};
        if (state.address != null) {
            fields.forEach(function (field) {
                mapFields[field] = form.createFormField({
                    value: state.address[field],
                });
            });
        } else {
            fields.forEach(function (field) {
                mapFields[field] = form.createFormField({
                    value: null,
                });
            });
        }

        return mapFields;
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}