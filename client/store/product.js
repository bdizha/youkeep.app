import axios from 'axios'

// state
const state = () => ({
    products: [],
    hasProducts: false
})

// getters
const getters = {
    products: state => state.products,
    hasProducts: state => state.hasProducts
}

// mutations
const mutations = {
    setProducts(state, products) {
        state.products = products;
        state.hasProducts = products.data.length > 0;
    }
}

// actions
const actions = {
    async onProducts({dispatch, commit}, payload) {
        dispatch('base/onProcess', {key: 'isProduct', value: true}, {root: true});

        await axios.post('/product/list', payload).then(({data}) => {
            // console.log('response: onProducts data: ', data);

            commit('setProducts', data);

            setTimeout(() => {
                dispatch('base/onProcess', {key: 'isProduct', value: false}, {root: true});
            }, 600);
        });
    },
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}