import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
    cart: {},
    address: {},
    addresses: [],
    card: {},
    cards: [],
    coupon: {},
})

// getters
const getters = {
    cart: state => state.cart,
    address: state => state.address,
    addresses: state => state.addresses,
    card: state => state.card,
    cards: state => state.cards,
    coupon: state => state.coupon,
}

// mutations
const mutations = {
    setCart(state, cart) {
        console.log(cart);
        console.log("cart items set");

        let items = cart.items;
        let subTotal = 0;
        let grandTotal = 0;
        let serviceRate = 0.024;
        let count = 0;

        let discountTotal = 0.00;

        let tempItems = [];

        items.forEach(function (item) {
            let price = item.variant.price;
            let discount = item.variant.discount;
            if (item.quantity > 0) {
                tempItems.push(item);

                if (discount < price) {
                    discountTotal += parseInt(discount * item.quantity);
                }
                subTotal += parseInt(price * item.quantity);
                count++;
            }
        });

        items = tempItems;
        cart.items = items;

        cart.count = count;
        let amounts = {};
        cart.summary = [];
        amounts.subTotal = {
            key: 1,
            name: 'Sub Total',
            value: 'R' + subTotal.toFixed(2)
        };
        cart.summary.push(amounts.subTotal);

        let serviceFee = subTotal * serviceRate;

        if (serviceFee < 15) {
            serviceFee = 15;
        }

        amounts.serviceFee = {
            key: 2,
            name: 'Service Fee',
            value: 'R' + serviceFee.toFixed(2)
        };
        cart.summary.push(amounts.serviceFee);

        let deliveryFee = 25.00;
        amounts.deliveryFee = {
            key: 3,
            name: 'Delivery Fee',
            value: 'R' + deliveryFee.toFixed(2)
        };
        cart.summary.push(amounts.deliveryFee);

        amounts.discountTotal = {
            key: 4,
            name: 'Discount Total',
            value: 'R' + discountTotal.toFixed(2)
        };
        cart.summary.push(amounts.discountTotal);

        grandTotal =
            subTotal +
            deliveryFee +
            serviceFee;
        //     discountTotal;

        grandTotal = subTotal;

        amounts.total = {
            key: 5,
            name: 'Total',
            value: 'R' + grandTotal.toFixed(2)
        };
        cart.summary.push(amounts.total);

        cart.amounts = amounts;
        cart.total = grandTotal.toFixed(2);
        state.cart = cart;
    },
    setCard(state, card) {
        state.card = card;
    },
    setCards(state, cards) {
        state.cards = cards;
    },
    setPayment(state, payment) {
        state.payment = payment;
    },
    setPayments(state, payments) {
        state.payments = payments;
    },
    setCoupon(state, coupon) {
        state.coupon = coupon;
    }
}

// actions
const actions = {
    async onCart({commit}, payload) {
        commit('setCart', payload);

        await axios.post('/cart', {cart: payload});
    },
    onCard({commit}, payload) {
        commit('setCard', payload)
    },
    onCards({commit}, payload) {
        commit('setCards', payload)
    },
    onPayment({commit}, payload) {
        commit('setPayment', payload)
    },
    onPayments({commit}, payload) {
        commit('setPayments', payload)
    },
    onCoupon({commit}, payload) {
        commit('setCoupon', payload)
    },
    async onInit({dispatch, commit, state}, payload) {
        const cart = Cookies.get('cart');
        if (cart) {
            commit('setCart', JSON.parse(cart));
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
