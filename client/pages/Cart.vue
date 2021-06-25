<template>
  <div class="r-cart-drawer">
    <r-drawer
      placement="right"
      current="cart-drawer"
    >
      <a-row type="flex" justify="start" align="middle">
        <a-col :span="24" class="r-cart-body">
          <h4 v-if="false && hasItems" class="r-heading">
            {{ 'Your Cart (' + cart.count + ')' }}
          </h4>
          <div v-if="false" class="r-line"></div>
          <a-row :gutter="12" type="flex" justify="start" align="middle"
                 v-for="(item, index) in cart.items"
                 :key="index+1"
          >
            <a-col class="gutter-row" :xs="{ span: 15 }"
                   :sm="{ span: 16 }" :lg="{ span: 16 }"
            >
              <a-row :gutter="12" class="gutter-row" type="flex" justify="start" align="middle">
                <a-col class="gutter-row" :xs="{ span: 7 }"
                       :sm="{ span: 6 }" :lg="{ span: 6 }"
                >
                  <div class="gutter-box">
                    <a-avatar
                      shape="square"
                      size="large"
                      slot="avatar"
                      :src="'/storage/product/' + item.thumbnail"
                    >
                    </a-avatar>
                  </div>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 17 }"
                       :sm="{ span: 16 }" :lg="{ span: 16 }"
                >
                  <h3 class="r-product-text-cart">
                    {{ item.name }}
                  </h3>
                </a-col>
              </a-row>
            </a-col>
            <a-col class="gutter-row" :xs="{ span: 9 }"
                   :sm="{ span: 8 }" :lg="{ span: 8 }"
            >
              <a-row :gutter="12" class="gutter-row" type="flex" justify="start" align="middle">
                <a-col class="gutter-row" :xs="{ span: 24 }"
                       :sm="{ span: 24 }" :lg="{ span: 24 }"
                >
                                    <span class="r-product-price">
                                        {{ 'R' + price(item) }}
                                    </span>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 24 }"
                       :sm="{ span: 24 }" :lg="{ span: 24 }"
                >
                  <r-product-actions :product="item" size="small"></r-product-actions>
                </a-col>
              </a-row>
            </a-col>
            <a-col class="gutter-row" :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }"
            >
              <div class="r-line"></div>
            </a-col>
          </a-row>
          <a-row v-if="!hasItems" type="flex" justify="middle">
            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :lg="{ span: 18 }"
            >
              <a-empty image="/images/Shopple/icon_black_light.svg"
                       :image-style="{
                                      height: '60px',
                                    }"
              >
                <h4 slot="description" class="r-heading r-text-black">
                  Your shopping cart is
                  empty.
                </h4>
                <nuxt-link :to="'/store/' + store.slug">
                  <a-button size="large" class="ant-btn-primary r-btn-black">
                    <a-icon type="shopping"/>
                    Shop now
                  </a-button>
                </nuxt-link>
              </a-empty>
            </a-col>
          </a-row>
          <a-row :gutter="24" class="r-cart-bottom-actions" v-if="hasItems" type="flex" justify="center">
            <a-col class="r-text-center" :xs="{ span: 12 }" :sm="{ span: 12 }"
                   :lg="{ span: 12 }"
            >
              <a-button block v-on:click="save()" size="small" class="r-btn-bordered-grey">
                <a-icon type="file-done"/>
                Save cart
              </a-button>
            </a-col>
            <a-col class="r-text-center" :xs="{ span: 12 }" :sm="{ span: 12 }"
                   :lg="{ span: 12 }"
            >
              <a-popconfirm
                @confirm="reset"
                title="Are you sure you would like to clear your cart?"
              >
                <a-icon slot="icon" type="question-circle-o" class="r-text-secondary"/>
                <a-button block size="small" class="r-btn-bordered-grey">
                  <a-icon type="delete"/>
                  Clear cart
                </a-button>
              </a-popconfirm>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <div class="r-cart-footer">
        <a-row :gutter="24" type="flex" justify="start" align="middle">
          <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :lg="{ span: 12 }"
          >
            <nuxt-link to="/checkout">
              <h3 class="r-heading r-text-white">
                {{ 'R' + cart.total }}
              </h3>
            </nuxt-link>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 12 }" :sm="{ span: 12 }"
                 :lg="{ span: 12 }"
          >
            <nuxt-link to="/checkout">
              <a-button block size="small" type="secondary" class="r-btn-bordered-white">
                <a-icon type="shopping-cart"/>
                Checkout
              </a-button>
            </nuxt-link>
          </a-col>
        </a-row>
      </div>
    </r-drawer>
  </div>
</template>
<script>
export default {
  data () {
    return {
      store: { slug: null },
      cart: {
        items: [],
        frequency: {},
        frequencies: [],
        count: 0
      },
      isVisible: false,
      hasItems: false,
      hasCart: false,
    }
  },
  computed: {},
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
      this.cart = this.$store.state.cart
      this.store = this.$store.state.store
      this.setHasItems()

      let $this = this
      this.$store.subscribe((mutation, state) => {
        if (mutation.type == 'onCart') {
          $this.cart = mutation.payload
          $this.setHasItems()
          console.log('Updating the cart: ', this.cart)
        }
      })
    },
    setHasItems () {
      this.hasItems = this.cart.items.length > 0
    },
    reset () {
      this.cart = this.$store.state.cart
      this.cart.items = []
      this.$store.commit('onCart', this.cart)

      this.setHasItems()
    },
    price (item) {
      let price = item.variant.price
      return parseInt(price * item.quantity).toFixed(2)
    }
  },
}
</script>
