import axios from 'axios'
import Cookies from "js-cookie";

// state
const state = () => ({
  store: {},
  stores: {data: []},
  category: {},
  products: [],
  categories: [],
  hasProducts: false,
  departments: [],
  positions: [],
  position: {},
  storeCategories: [],
  hasStores: false,
  hasShop: false,
  notice: null,
  hasNotice: false,
  hasForm: true,
  isValid: true,
  hasCategories: false,
  hasCategory: false,
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
  reviews: [],
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
    isCareers: false,
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
  hasStores: state => state.hasStores,
  category: state => state.category,
  departments: state => state.departments,
  positions: state => state.positions,
  position: state => state.position,
  categories: state => state.categories,
  storeCategories: state => state.storeCategories,
  hasCategories: state => state.hasCategories,
  hasProducts: state => state.hasProducts,
  hasCategory: state => state.hasCategory,
  drawer: state => state.drawer,
  hasDrawer: state => state.hasDrawer,
  hasOverlay: state => state.hasOverlay,
  modal: state => state.modal,
  hasModal: state => state.hasModal,
  hasStoreTray: state => state.hasStoreTray,
  products: state => state.products,
  reviews: state => state.reviews,
  hasReviews: state => state.reviews.length > 0,
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
    // console.log('store...', store);
    state.store = store;
  },
  setNotice(state, notice) {
    state.notice = notice;
    state.hasNotice = notice !== null;
  },
  setHasNotice(state, hasNotice) {
    state.hasNotice = hasNotice;
  },
  setIsValid(state, isValid) {
    state.isValid = isValid;
  },
  setStores(state, stores) {
    state.stores = stores;
    state.hasStores = stores.data != undefined && stores.data.length > 0;
  },
  setCategory(state, category) {
    state.category = category;
    state.hasCategory = category != null;
  },
  setCategories(state, categories) {
    state.categories = categories;
    state.hasCategories = categories.length > 0;
  },
  setProducts(state, products) {
    state.products = products;
    state.hasProducts = products.data != undefined && products.data.length > 0;
  },
  setPositions(state, positions) {
    state.positions = positions;
  },
  setPosition(state, position) {
    state.position = position;
  },
  setDepartments(state, departments) {
    state.departments = departments;
  },
  setStoreCategories(state, storeCategories) {
    state.storeCategories = storeCategories;
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
    // console.log('setHasOverlay', hasOverlay);
    state.hasOverlay = hasOverlay;
  },
  setFilters(state, filters) {
    state.filters = filters;
  },
  setFilter(state, filter) {
    state.filters[filter.key] = filter.value;
  },
  setReviews(state, reviews) {
    state.reviews = reviews;
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
  onHasDownload({dispatch, commit}, payload) {
    commit('setHasDownload', payload)
  },
  onHasSubscribe({dispatch, commit}, payload) {
    commit('setHasSubscribe', payload)
  },
  async onCategory({dispatch, commit, state}, params) {
    try {
      dispatch('base/onProcess', {key: 'isCategory', value: true}, {root: true});
      dispatch('base/onProcess', {key: 'isCategories', value: true}, {root: true});
      dispatch('base/onProcess', {key: 'isProduct', value: true}, {root: true});

      let route = params.route;

      console.log("onCategory params", params);
      console.trace();

      dispatch('base/onProcess', {key: 'isFixed', value: true}, {root: true});

      await axios.post(route, params).then(({data}) => {
        let category = data.category;
        let categories = data.categories;
        let products = data.products;

        commit('setCategory', category);
        commit('setCategories', categories);
        commit('setStores', []);

        setTimeout(() => {
          dispatch('base/onProcess', {key: 'isCategories', value: false}, {root: true});
          dispatch('base/onProcess', {key: 'isProduct', value: false}, {root: true});
        }, 300);

        commit('setProducts', products);

        if (category.filters != undefined) {
          let filters = category.filters;

          commit('setFilters', filters);
        }
      });

    } catch (e) {
      console.error('onCategory errors');
      console.log(e);
    }
  },
  async onCategories({dispatch, commit, state}, payload) {

    try {
      dispatch('base/onProcess', {key: 'isCategories', value: true}, {root: true});
      dispatch('base/onProcess', {key: 'isFixed', value: true}, {root: true});

      commit('setCategories', []);

      await axios.post('/categories', payload).then(({data}) => {
        let categories = data.categories;
        commit('setCategories', categories);

        setTimeout(() => {
          dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});
        }, 300);

        dispatch('base/onProcess', {key: 'isCategory', value: false}, {root: true});
        dispatch('base/onProcess', {key: 'isCategories', value: false}, {root: true});
      });
    } catch (e) {
      console.error('onCategories errors');
      console.log(e);
    }
  },
  async onPosition({dispatch, commit}, payload) {
    try {
      commit('setProcess', {key: 'isCareers', value: true});
      const {data} = await axios.get(payload.route, {});
      commit('setPosition', data.position);

      // console.log('setPosition data >>>>> ', data);

      commit('setProcess', {key: 'isCareers', value: false});

    } catch (e) {
      console.error('on error: ', e);
    }
  },
  async onCareers({dispatch, commit}, payload) {
    try {
      commit('setProcess', {key: 'isCareers', value: true});
      const {data} = await axios.post('/careers', payload);
      commit('setDepartments', data.departments);
      commit('setPositions', data.positions);

      // console.log('setPositions data >>>>> ', data);

      commit('setProcess', {key: 'isCareers', value: false});

    } catch (e) {
      console.error('on error: ', e);
    }
  },
  async onStoreCategories({dispatch, commit}, payload) {
    try {
      commit('setProcess', {key: 'isRunning', value: true});
      const {data} = await axios.post('/categories', payload);
      commit('setStoreCategories', data.categories);

      // console.log('setStoreCategories', data.categories);

      commit('setProcess', {key: 'isRunning', value: false});

    } catch (e) {
      console.error('on error: ', e);
    }
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

      // console.log('after onStores: ', stores);
    });
  },
  async onReviews({dispatch, commit, state}, payload) {
    try {
      commit('setProcess', {key: 'isRunning', value: true});

      await axios.get('/testimonials', payload).then(({data}) => {
        // console.log('response: reviews', data);

        commit('setReviews', data.testimonials);
        commit('setProcess', {key: 'isRunning', value: false});
      });

    } catch (e) {
      console.error('on error: ', e);
    }
  },
  onIsFixed({commit}) {
    commit('setProcess', {key: 'isFixed', value: true});

    commit('setProcess', {key: 'isFixed', value: false});
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
    }, 24000);
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
