import axios from 'axios'
import Cookies from "js-cookie";

// state
const state = () => ({
  store: {},
  hasStore: false,
  category: {},
  product: {},
  products: [],
  hasNotice: false,
  notice: null,
  hasCategories: false,
  hasSearched: false,
  filters: [
    {
      id: 1,
      name: 'Size'
    },
    {
      id: 2,
      name: 'Color'
    },
    {
      id: 3,
      name: 'Volume'
    },
    {
      id: 4,
      name: 'Mass'
    },
    {
      id: 5,
      name: 'Brand'
    },
    {
      id: 6,
      name: 'Collection'
    },
    {
      id: 7,
      name: 'Store'
    },
  ],
  sort: null,
  isSearching: false,
  search: {
    data: null
  },
  processes: {
    isCategory: false,
    isCategories: false,
    isSlider: false,
    isSearching: false,
    isProduct: true
  }
})

// getters
const getters = {
  store: state => state.store,
  hasStore: state => state.hasStore,
  notice: state => state.notice,
  hasNotice: state => state.hasNotice,
  category: state => state.category,
  product: state => state.product,
  categories: state => state.categories,
  categoriesReverse: state => state.categories,
  products: state => state.products,
  productsReverse: state => state.products,
  filters: state => state.filters,
  sort: state => state.sort,
  search: state => state.search,
  hasSearched: state => state.hasSearched,
  processes: state => state.processes
}

// mutations
const mutations = {
  setCategory(state, category) {
    state.category = category;
  },
  setProduct(state, product) {
    state.product = product;
  },
  setStore(state, store) {
    state.store = store;
    state.hasStore = store.id != undefined;

    console.log('response: store data: ', state.store);

    Cookies.set('store', store, {expires: 365});
  },
  setNotice(state, notice) {
    state.notice = notice;
    state.hasNotice = notice !== null;

    console.log('response: state.hasNotice data: ', state.hasNotice);
    console.log('response: state.notice data: ', state.notice);
  },
  setHasNotice(state, hasNotice) {
    state.hasNotice = hasNotice;
  },
  setFilters(state, filters) {
    state.filters = filters;
  },
  setFilter(state, filter) {
    state.filters[filter.key] = filter.value;
  },
  setSort(state, sort) {
    state.sort = sort;
  },
  setSearch(state, search) {
    state.search = search;
    state.hasSearched = true;

    Cookies.set('store_search', search, {expires: 365});
  },
  setProcess(state, process) {
    state.processes[process.key] = process.value;
  }
}

// actions
const actions = {
  async onStore({dispatch, commit}, route) {
    console.log('response: route store', route);
    try {
      dispatch('base/onProcess', {key: 'isCategories', value: true}, {root: true});

      // console.log('route: ', route);
      let params = {};

      await axios.post(route, params).then(({data}) => {
        let store = data.store;
        commit('setStore', store);

        if (store.categories != undefined) {
          let categories = store.categories;
          dispatch('base/onProcess', {key: 'isCategories', value: false}, {root: true})
        }

        console.log('onStore', store);
      });

    } catch (e) {
      console.error('onStore errors');
      console.log(e);
    }
  },
  async onCategories({dispatch, commit, state}, payload) {
    try {
      dispatch('base/onProcess', {key: 'isCategories', value: true}, {root: true});
      dispatch('base/onProcess', {key: 'isFixed', value: true}, {root: true});

      return await axios.post('/categories', payload).then(({data}) => {
        let categories = data.categories;

        setTimeout(() => {
          dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});
        }, 300);

        dispatch('base/onProcess', {key: 'isCategory', value: false}, {root: true});
        dispatch('base/onProcess', {key: 'isCategories', value: false}, {root: true});

        return categories;
      });
    } catch (e) {
      console.error('onCategories errors');
      console.log(e);
    }
  },
  async onProducts({dispatch, commit}, payload) {
    dispatch('base/onProcess', {key: 'isProduct', value: true}, {root: true});

    try {
      return await axios.post('/products', payload).then(({data}) => {
        console.log('response: onProducts data: ', data);
        let products = data;

        dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});

        setTimeout(() => {
          dispatch('base/onProcess', {key: 'isProduct', value: false}, {root: true});
        }, 600);

        return products;
      });

    } catch (e) {
      console.error('onProducts errors');
      console.log(e);
    }
  },
  async onProduct({dispatch, commit, state}, params) {
    dispatch('base/onProcess', {key: 'isProduct', value: true}, {root: true});

    try {
      let route = params.route;

      await axios.post(route, params).then(({data}) => {

        let product = data.product;
        let category = data.category;
        let store = data.store;
        let categories = data.categories;

        commit('setStore', store);
        commit('setProduct', product);


        // console.log('setProduct', data);
        commit('setCategory', category);

        dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});

        setTimeout(() => {
          dispatch('base/onProcess', {key: 'isProduct', value: false}, {root: true});
        }, 600);
      });

    } catch (e) {
      console.error('onProduct errors');
      console.log(e);
    }
  },
  onFilters({dispatch, commit}, payload) {
    commit('setFilters', payload)
  },
  onSort({dispatch, commit}, payload) {
    commit('setSort', payload)
  },
  onNotice({dispatch, commit}, payload) {
    commit('setNotice', payload);

    setTimeout(() => {
      // commit('setHasNotice', false);
    }, 1200);
  },
  async onSearch({dispatch, commit}, payload) {

    try {
      commit('setProcess', {key: 'isSearching', value: true});

      await axios.post('/search', payload).then(({data}) => {
        // console.log('response: onSearch data: ', data);

        let search = data;
        commit('setSearch', search);
        console.log('response: onSearch: ', search);

        setTimeout(() => {
          commit('setProcess', {key: 'isSearching', value: false});
        }, 300);
      });

    } catch (e) {
      console.error('onSearch errors');
      console.log(e);
    }
  },
  async onInit({dispatch, commit, state}, payload) {
    const store = Cookies.get('store');

    console.log('Found store', JSON.parse(store));
    if (store) {
      commit('setStore', JSON.parse(store));
    }

    const search = Cookies.get('store_search');
    if (search) {
      commit('setSearch', JSON.parse(search));
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
