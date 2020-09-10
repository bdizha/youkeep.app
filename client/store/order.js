import axios from 'axios'

// state
const state = () => ({
    current: null,
    order: null,
    search: {
        isSearching: false,
        term: null,
        suggestions: []
    },
    hasOrder: false,
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
    hasOrder: state => state.hasSearched,
    order: state => state.order,
    errors: state => state.errors,
    processes: state => state.processes
}

// mutations
const mutations = {
    setCurrent(state, current) {
        state.current = current;
    },
    setOrder(state, order) {
        state.order = order;
        state.hasOrder = order != null;
    },
    setSearch(state, search) {
        state.search = search;
        state.hasSearched = true;
    },
    setErrors(state, errors) {
        state.hasOrder = errors;
    },
    setProcess(state, process) {
        state.processes[process.key] = process.value;
    },
}

// actions
const actions = {
    onOrder({dispatch, commit, state}, payload) {
        commit('setOrder', payload);

        dispatch('base/onProcess', {key: 'isSuccess', value: false}, {root: true});
        console.log(payload, "setOrder >>>>");
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

        await axios.post('/order/search', payload).then(({data}) => {
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

            dispatch('account/onOrder', {}, {root: true});

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
        if (state.order != null) {
            fields.forEach(function (field) {
                mapFields[field] = form.createFormField({
                    value: state.order[field],
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