import axios from 'axios'
import Cookies from "js-cookie";

// state
const state = () => ({
  store: {},
  stores: {data: []},
  category: {},
  categories: [],
  hasStores: false,
  hasShop: false,
  notice: null,
  hasNotice: false,
  hasForm: true,
  isValid: true,
  hasCategories: true,
  drawer: {
    current: null,
    isVisible: false,
    message: null
  },
  modal: {
    current: null,
    isVisible: false,
    isClosable: false,
    message: null,
    redirectTo: null
  },
  hasOverlay: false,
  hasDrawer: false,
  hasModal: false,
  hasStoreTray: false,
  flush: {
    category: {},
    categories: [],
    hasCategories: true,
  },
  products: [],
  testimonials: [],
  filters: {
    stores: [],
    categories: [],
    products: [],
    discounts: [],
    brands: [],
    sort: null
  },
  sort: null,
  search: {
    params: {
      limit: 36,
      category_id: null,
      sort: 0,
      page: 1,
      term: null,
    }
  },
  processes: {
    isRunning: false,
    isFixed: false,
    isTray: false,
    isSuccess: false,
    isCategory: false,
    isProduct: false,
    isCategories: false,
    isProducts: false,
  },
  isDark: false,
  isRaised: false,
  hasFooter: true,
  hasDownload: true,
  hasSubscribe: true,
  redirectTo: null,
  errors: [],
})

// getters
const getters = {
  hasShop: state => state.hasShop,
  notice: state => state.notice,
  hasNotice: state => state.hasNotice,
  hasForm: state => state.hasForm,
  store: state => state.store,
  stores: state => state.stores,
  hasStores: state => state.stores.data.length > 0,
  category: state => state.category,
  categories: state => state.categories,
  hasCategories: state => state.categories.length > 0,
  flush: state => state.flush,
  drawer: state => state.drawer,
  hasDrawer: state => state.hasDrawer,
  hasOverlay: state => state.hasOverlay,
  modal: state => state.modal,
  hasModal: state => state.hasModal,
  hasStoreTray: state => state.hasStoreTray,
  products: state => state.products,
  testimonials: state => state.testimonials,
  filters: state => state.filters,
  sort: state => state.sort,
  isSearching: state => state.isSearching,
  search: state => state.search,
  processes: state => state.processes,
  isDark: state => state.isDark,
  isRaised: state => state.isRaised,
  hasFooter: state => state.hasFooter,
  hasDownload: state => state.hasDownload,
  hasSubscribe: state => state.hasSubscribe,
  redirectTo: state => stores.redirectTo,
  errors: state => state.errors,
}

// mutations
const mutations = {
  setStore(state, store) {
    console.log('store...', store);
    state.store = store;
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
  setIsValid(state, isValid) {
    state.isValid = isValid;
  },
  setStores(state, stores) {
    console.log('stores...', stores);
    state.stores = stores;

    console.log('hasStores...', state.hasStores);
  },
  setCategory(state, category) {
    state.category = category;
  },
  setCategories(state, categories) {
    state.categories = categories;
    state.hasCategories = categories.length > 0;
  },
  setFlushCategory(state, category) {
    state.flush.category = category;
  },
  setFlushCategories(state, categories) {
    state.flush.categories = categories;
  },
  setFlushProducts(state, products) {
    state.flush.products = products;
  },
  setDrawer(state, drawer) {
    state.drawer = drawer;
    state.hasDrawer = state.drawer.isVisible;
    state.hasModal = false;
    state.modal.isVisible = false;
  },
  setModal(state, modal) {
    state.modal = modal;
    state.hasDrawer = false;
    state.hasModal = state.modal.isVisible;
    state.drawer.isVisible = false;
  },
  setHasOverlay(state, hasOverlay) {
    console.log('setHasOverlay', hasOverlay);
    state.hasOverlay = hasOverlay;

    if (hasOverlay) {
      $('body').addClass('r-hide-body');
    } else {
      $('body').removeClass('r-hide-body');
    }
  },
  setFilters(state, filters) {
    state.filters = filters;
  },
  setFilter(state, filter) {
    state.filters[filter.key] = filter.value;
  },
  setTestimonials(state, testimonials) {
    state.testimonials = testimonials;
  },
  setSort(state, sort) {
    state.sort = sort;

    Cookies.set('sort', sort, {expires: 365});
  },
  setSearch(state, search) {
    state.search = search;

    Cookies.set('search', search, {expires: 365});
  },
  setProcess(state, process) {
    state.processes[process.key] = process.value;
  },
  setHasForm(state, hasForm) {
    state.hasForm = hasForm;
  },
  setIsDark(state, isDark) {
    state.isDark = isDark;
  },
  setHasFooter(state, hasFooter) {
    state.hasFooter = hasFooter;
  },
  setHasDownload(state, hasDownload) {
    state.hasDownload = hasDownload;
  },
  setHasSubscribe(state, hasSubscribe) {
    state.hasSubscribe = hasSubscribe;
  },
  setIsRaised(state, isRaised) {
    state.isRaised = isRaised;
  },
  setHasShop(state, hasShop) {
    state.hasShop = hasShop;
  },
  setErrors(state, errors) {
    state.errors = errors;
  },
}

// actions
const actions = {
  onFilters({dispatch, commit}, payload) {
    commit('setFilters', payload)
  },
  onSort({dispatch, commit}, payload) {
    commit('setSort', payload)
  },
  onSearch({dispatch, commit}, payload) {
    commit('setSearch', payload)
  },
  onHasShop({dispatch, commit}, payload) {
    commit('setHasShop', payload)
  },

  async onCategories({dispatch, commit, state}, payload) {

    dispatch('onProcess', {key: 'isCategories', value: true});

    await axios.post('/categories', payload).then(({data}) => {
      let categories = data.categories;
      commit('setCategories', categories);

      dispatch('onProcess', {key: 'isCategories', value: false});
    });
  },
  async onFlushCategory({dispatch, commit}, payload) {
    try {
      commit('setProcess', {key: 'isRunning', value: true});
      const {data} = await axios.post('/category', payload);
      commit('setFlushCategory', data.category);

      commit('setProcess', {key: 'isRunning', value: false});
      // console.log('response: onFlushCategory: ', data.category);

    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onFlushCategories({dispatch, commit}, payload) {
    try {
      commit('setProcess', {key: 'isRunning', value: true});
      const {data} = await axios.post('/categories', payload);
      commit('setFlushCategories', data.categories);

      commit('setProcess', {key: 'isRunning', value: false});
      // console.log('response: onFlushCategories: ', data.categories);

      // dispatch('shop/onImages', 300);

    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onFlushProducts({dispatch, commit}, payload) {
    commit('setProcess', {key: 'isRunning', value: true});
    await axios.post('/products', payload).then(({data}) => {
      let products = data.products;

      commit('setFlushProducts', products);
    });
  },
  async onStores({dispatch, commit}, payload) {
    commit('setProcess', {key: 'isTray', value: true});

    await axios.post('/shops', payload).then(({data}) => {
      let stores = data;
      // console.log('before onStores: ', stores);

      commit('setStores', stores);
      commit('setFilter', {key: 'stores', value: stores});

      setTimeout(() => {
        commit('setProcess', {key: 'isTray', value: false});
      }, 300);

      console.log('after onStores: ', stores);
    });
  },
  async onTestimonials({dispatch, commit, state}, payload) {
    try {
      commit('setProcess', {key: 'isRunning', value: true});

      await axios.post('/testimonials', payload).then(({data}) => {
        // console.log('response: testimonials', data.testimonials);

        commit('setTestimonials', data.testimonials);
        commit('setProcess', {key: 'isRunning', value: false});
      });

    } catch (e) {
      commit('setErrors', e)
    }
  },
  onIsFixed({commit}) {
    commit('setProcess', {key: 'isFixed', value: true});

    setTimeout(() => {
      commit('setProcess', {key: 'isFixed', value: false});
    }, 900);
  },
  async onProcess({dispatch, commit, state}, payload) {
    commit('setProcess', payload);
  },
  async onHasForm({dispatch, commit, state}, payload) {
    commit('setHasForm', payload);
  },
  onFooter({dispatch, commit, state}, payload) {
    commit('setHasFooter', payload);
  },
  onDownload({dispatch, commit, state}, payload) {
    commit('setHasDownload', payload);
  },
  onSubscribe({dispatch, commit, state}, payload) {
    commit('setHasSubscribe', payload);
  },
  onModal({dispatch, commit, state}, payload) {
    commit('setProcess', {key: 'isRunning', value: true});
    commit('setProcess', {key: 'isFixed', value: true});
    commit('setModal', payload);
    commit('setHasOverlay', state.hasModal);

    setTimeout(function () {
      commit('setProcess', {key: 'isRunning', value: false});
      commit('setProcess', {key: 'isFixed', value: false});
    }, 300);
  },
  onDrawer({dispatch, commit, state}, payload) {
    commit('setProcess', {key: 'isRunning', value: true});
    commit('setProcess', {key: 'isFixed', value: true});
    commit('setDrawer', payload);

    setTimeout(function () {
      commit('setProcess', {key: 'isRunning', value: false});
      commit('setProcess', {key: 'isFixed', value: false});
    }, 300);

    commit('setHasOverlay', state.hasDrawer);
  },
  onIsRaised({dispatch, commit}, payload) {
    commit('setIsRaised', payload);
  },
  onIsDark({dispatch, commit}, payload) {
    commit('setIsDark', payload);
  },
  onNotice({dispatch, commit}, payload) {
    commit('setNotice', payload);

    setTimeout(() => {
      commit('setHasNotice', false);
    }, 3000);
  },
  async onInit({dispatch, commit, state}, payload) {
    const search = Cookies.get('search');
    if (search) {
      commit('setSearch', JSON.parse(search));
    }
    const stores = Cookies.get('stores');
    if (stores) {
      commit('setStores', JSON.parse(stores));
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
