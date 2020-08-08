<template>
  <a-row class="r-padding-top-12" type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row class="r-product-actions">
        <a-col class="gutter-row r-btn--minus r-text-left" :xs="{ span: 7 }" :sm="{ span: 6 }"
               :lg="{ span: 6 }">
          <div class="r-btn-icon" @click="minus">
            <a-icon class="r-icon-empty" type="minus"/>
          </div>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 10 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
          <div class="r-action-height">
            <div class="r-product-cart" :class="{'r-product-cart__active': quantity > 0}">
              <div class="r-shopping-cart"></div>
              <span class="r-product-cart-count">{{ quantity }}</span>
            </div>
          </div>
        </a-col>
        <a-col class="gutter-row r-btn--plus r-text-right" :xs="{ span: 7 }" :sm="{ span: 6 }"
               :lg="{ span: 6 }">
          <div class="r-btn-icon" @click="plus">
            <a-icon class="r-icon-empty" type="plus"/>
          </div>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="false" class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row>
        <a-col class="gutter-row" :span="24">
          <a-button class="r-btn-secondary" @click="plus" block type="secondary"
                    :size=size>
            <a-icon type="shopping"/>
            Add to cart
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-product-actions',
  props: {
    isShowing: {type: Boolean, required: false, default: false},
    product: {type: Object, required: false, default: null},
    size: {type: String, required: false, default: 'default'},
  },
  data() {
    return {
      quantity: 0,
    };
  },
  created() {
    this.payload();
  },
  computed: mapGetters({
    store: 'shop/store',
    cart: 'cart/cart',
  }),
  methods: {
    payload() {
      this.quantity = this.product.quantity;
    },
    plus() {
      // console.log('Before adding', this.quantity);
      this.quantity++;
      this.product.quantity = this.quantity;

      this.updateItem();
    },
    minus() {
      if (this.quantity != 0) {
        this.quantity--;
      }
      this.product.quantity = this.quantity;
      this.updateItem();
    },
    updateVariant(key) {
      this.product.variant = this.product.variants[key - 1];
    },
    updateItem() {
      let cart = this.cart;
      let items = cart.items;

      let key = this.findKey(this.product);

      if (key != null) {
        console.log(this.product);

        if (parseFloat(items[key].quantity) > parseFloat(this.product.quantity)) {
          this.$message.success('Item removed from your bag');
        } else {
          this.$message.success('Item updated in your bag');
        }

        items[key] = this.product;
      } else {
        items.push(this.product);
        this.$message.success('Item added to your bag');
      }

      cart.items = items;
      cart.isVisible = false;
      this.$store.dispatch('cart/onCart', cart);
    },
    findKey() {
      let cart = this.cart;
      let items = cart.items;
      let $this = this;

      let key = null;
      items.forEach(function (item, index) {
        if (item.id == $this.product.id) {
          key = index;
        }
      });

      return key;
    }
  },
};
</script>
