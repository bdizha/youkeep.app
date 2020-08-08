import axios from 'axios'

// state
const state = () => ({
    current: null,
    errors: [],
    isValid: true,
    processes: {
        isRunning: false,
        isSuccess: false,
    }
})

// getters
const getters = {
    current: state => state.current,
    errors: state => state.errors,
    isValid: state => state.isValid,
    processes: state => state.processes
}

// mutations
const mutations = {
    setIsValid(state, isValid) {
        state.isValid = isValid;
    },
    setCurrent(state, current) {
        state.current = current;
    },
    setErrors(state, errors) {
        state.errors = errors;
    },
    setProcess(state, process) {
        state.processes[process.key] = process.value;
    },
}

// actions
const actions = {
    async onPost({dispatch, commit, state}, payload) {
        console.log('response: form onPost', payload);

        let params = payload.params;
        let route = payload.route;
        let current = payload.current;
        let message = payload.message;

        commit('setCurrent', current);

        dispatch('base/onProcess', {key: 'isRunning', value: true}, {root: true});
        dispatch('base/onProcess', {key: 'isSuccess', value: false}, {root: true});
        dispatch('base/onHasForm', true, {root: true});
        dispatch('onIsValid', true);

        return await axios.post(route, params).then(({data}) => {
            console.log('response: form onPost data::', data);
            console.log('response: form onPost data::', data);

            dispatch('base/onNotice', message, {root: true});

            dispatch('base/onHasForm', false, {root: true});
            dispatch('base/onProcess', {key: 'isSuccess', value: true}, {root: true});

            setTimeout(() => {
                dispatch('base/onProcess', {key: 'isRunning', value: false}, {root: true});
            }, 300);

            setTimeout(() => {
                let isRegistering = current === 'register';
                let modal = {
                    current: isRegistering ? 'secure' : null,
                    isVisible: isRegistering
                };

                console.log('isRegistering', isRegistering);
                console.log('isRegistering current', current);

                dispatch('base/onModal', modal, {root: true});
                dispatch('base/onHasForm', true, {root: true});
                dispatch('base/onProcess', {key: 'isSuccess', value: false}, {root: true});

                dispatch('base/onNotice', null, {root: true});
            }, 4500);

            return {data};
        }).catch(error => {
            setTimeout(() => {
                dispatch('form/onIsValid', false, {root: true});

                dispatch('base/onProcess', {key: 'isRunning', value: false}, {root: true});
                dispatch('base/onHasForm', true, {root: true});
            }, 300);

            throw error;
        })
    },
    onCurrent({dispatch, commit, state}, payload) {
        commit('setCurrent', payload);
    },
    onIsValid({dispatch, commit, state}, payload) {
        commit('setIsValid', payload);
    },
    async onProcess({dispatch, commit, state}, payload) {
        try {
            commit('setProcess', payload);
        } catch (e) {
            commit('setErrors', e)
        }
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}