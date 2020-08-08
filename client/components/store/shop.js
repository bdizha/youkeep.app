import axios from 'axios'
import Cookies from "js-cookie";

// state
const state = () => ({
  store: {},
  hasStore: false,
  category: {},
  product: {},
  products: [],
  categories: [],
  hasProducts: false,
  hasNotice: false,
  notice: null,
  hasCategories: false,
  hasSearched: false,
  filters: {
    stores: [],
    categories: [],
    products: [],
    discounts: [],
    brands: [],
    sort: null
  },
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
  },
  images: []
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
  products: state => state.products,
  hasCategories: state => state.hasCategories,
  hasProducts: state => state.hasProducts,
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
    window.scrollTo(0, 0);
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
  setCategories(state, categories) {
    state.categories = categories;
    state.hasCategories = categories.length;
  },
  setProducts(state, products) {
    state.products = products;
    state.hasProducts = products.data.length > 0;
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
  },
}

// actions
const actions = {
  async onCategory({dispatch, commit, state}, toRoute) {
    // console.log('response: route category', toRoute);

    try {
      dispatch('base/onProcess', {key: 'isCategory', value: true}, {root: true});
      dispatch('base/onProcess', {key: 'isCategories', value: true}, {root: true});
      dispatch('base/onProcess', {key: 'isProduct', value: true}, {root: true});

      console.log('toRoute: ', toRoute);
      let params = {
        with: ['categories', 'products']
      };
      dispatch('base/onProcess', {key: 'isFixed', value: true}, {root: true});

      await axios.post(toRoute, params).then(({data}) => {
        let category = data.category;
        commit('setCategory', category);

        console.log('setCategory data >>>>> ', category);

        if (category.products != undefined) {
          let products = category.products;

          setTimeout(() => {
            dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});
          }, 300);

          console.log('onCategory products >>>>> ', products);
          commit('setProducts', products);

          commit('setImages', 600);
        }

        if (category.categories != undefined) {
          let categories = category.categories;

          console.log('onCategory categories data >>>>> ', categories);

          commit('setCategories', categories);
          dispatch('base/onProcess', {key: 'isCategories', value: false}, {root: true})
        }

        if (data.product != undefined) {
          let product = data.product;
          commit('setProduct', product);

          let modal = {};
          modal.isVisible = true;
          modal.isClosable = true;
          modal.current = 'product';

          // fire off the product modal
          dispatch('base/onModal', modal, {root: true});
        }

        setTimeout(() => {
          dispatch('base/onProcess', {key: 'isProduct', value: false}, {root: true});
        }, 1200);

        // set the store object
        // force the store to change
        commit('setStore', category.store);
      });

    } catch (e) {
      console.error('onStore errors');
      console.log(e);
    }
  },
  async onStore({dispatch, commit}, toRoute) {
    console.log('response: route store', toRoute);
    try {
      dispatch('base/onProcess', {key: 'isCategory', value: true}, {root: true});
      dispatch('base/onProcess', {key: 'isCategories', value: true}, {root: true});

      // console.log('toRoute: ', toRoute);
      let params = {};

      await axios.post(toRoute, params).then(({data}) => {
        let store = data.store;
        commit('setStore', store);

        console.log('setStore', store);

        let params = {
          store_id: store.id,
          level: 1,
          limit: 12,
          with: ['breadcrumbs', 'photos']
        };

        // dispatch('onFlush', params);
        dispatch('onCategories', params);
      });

    } catch (e) {
      console.error('onStore errors');
      console.log(e);
    }
  },
  async onCategories({dispatch, commit, state}, payload) {

    dispatch('base/onProcess', {key: 'isCategories', value: true}, {root: true});
    dispatch('base/onProcess', {key: 'isFixed', value: true}, {root: true});

    await axios.post('/categories', payload).then(({data}) => {
      let categories = data.categories;

      if (!payload.is_strict || categories.length > 0) {
        commit('setCategories', categories);
      } else {
        // try removing the category filter
        payload.category_id = null;
        payload.is_strict = false;

        dispatch('onCategories', payload);
        // console.log('response: in strict mode onCategories: ', payload);
        return false;
      }

      setTimeout(() => {
        dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});
      }, 600);

      dispatch('base/onProcess', {key: 'isCategory', value: false}, {root: true});
      dispatch('base/onProcess', {key: 'isCategories', value: false}, {root: true});

    });
  },
  async onProducts({dispatch, commit}, payload) {
    dispatch('base/onProcess', {key: 'isProduct', value: true}, {root: true});

    await axios.post('/products', payload).then(({data}) => {
      // console.log('response: onProducts data: ', data);

      let products = data;
      commit('setProducts', products);
      commit('setImages', 200);

      dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});

      setTimeout(() => {
        dispatch('base/onProcess', {key: 'isProduct', value: false}, {root: true});
        commit('setImages', 600);
      }, 600);
    });
  },
  onProduct({dispatch, commit}, payload) {
    commit('setProduct', payload);


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
  onImages({dispatch, commit}, time) {
    commit('setImages', time);
  },
  async onSearch({dispatch, commit}, payload) {

    commit('setProcess', {key: 'isSearching', value: true});

    await axios.post('/search', payload).then(({data}) => {
      // console.log('response: onSearch data: ', data);

      let search = data;
      commit('setSearch', search);
      console.log('response: onSearch: ', search);

      setTimeout(() => {

        commit('setProcess', {key: 'isSearching', value: false});
      }, 600);
    });
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
