<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,0]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary r-pull-h-24 r-border-none r-card-r-128">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24}"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-uppercase">
                            <span class="r-text-yellow">Seller</span>
                            <span class="r-text-white">Central</span>
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-white r-text-uppercase">
                            Get <span class="r-text-yellow">discovered</span> by
                            Africa's leading <span class="r-text-yellow">retailers</span>
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Your categories</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Your schedule</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-text-white r-checked-item-icon" type="check"></a-icon>
                            <span class="r-text-medium">Your success</span>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                               :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                        >
                          <a-button class="r-btn-yellow"
                                    @click="onModal"
                                    block
                                    size="large"
                                    type="blue"
                          >
                            See Addtract in actions
                          </a-button>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                          <span class="r-text-white">
                          Join the Addtract Seller Platform and start promoting Your categories online today and watch
                          your
                          sales run wild.
                          </span>
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col style="z-index: 455" :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-avatar data-src="/images/content/screen-02-secondary.png" :size="300" class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
            <div class="r-cover-image-half" style="background-image:none;background-color: #daecff"></div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-metrics></r-seller-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-steps></r-seller-steps>
      <a-card class="r-bg-primary-light r-pull-mh-24 r-border-none">
        <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <div class="r-mv-96">
              <a-row :gutter="[48,48]" align="top" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-white">
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-icon class="r-text-primary" style="font-size: 75px" type="bulb"></a-icon>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[24,24]" justify="center" type="flex">
                              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                     class="r-text-left"
                              >
                                <h4 class="r-heading-light r-text-primary">
                                  Launch Addtract Online
                                </h4>
                              </a-col>
                              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                     class="r-text-left"
                              >
                                <p class="r-text-medium">
                                  <span class="r-text-primary">36%</span> increase in online and in-store business with
                                  Addtract+ and more payment options.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-icon class="r-text-primary" style="font-size: 75px" type="build"></a-icon>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[24,24]" justify="center" type="flex">
                              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                     class="r-text-left"
                              >
                                <h4 class="r-heading-light r-text-primary">
                                  Get more buying retailers
                                </h4>
                              </a-col>
                              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                     class="r-text-left"
                              >
                                <p class="r-text-medium">
                                  <span class="r-text-primary">24%</span> of Addtract retailers use their existing
                                  credit
                                  card
                                  to pay over time at no cost.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-icon class="r-text-primary" style="font-size: 75px" type="rocket"></a-icon>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[24,24]" justify="center" type="flex">
                              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                     class="r-text-left"
                              >
                                <h4 class="r-heading-light r-text-primary">
                                  <span class="r-text-primary">Increase</span> business traction
                                </h4>
                              </a-col>
                              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                     class="r-text-left"
                              >
                                <p class="r-text-medium">
                                  <span class="r-text-primary">42%</span> of retailers are more likely to make a
                                  purchase
                                  if
                                  offered the freedom of choice.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-white">
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-icon class="r-text-primary" style="font-size: 75px" type="rocket"></a-icon>
                          </a-col>
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <h4 class="r-heading-light r-text-primary r-text-uppercase">
                              <span class="r-text-primary">Partner</span> with us and <span class="r-text-primary"
                            >grow</span> your business.
                            </h4>
                          </a-col>
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <p class="r-text-normal">
                              Join the Addtract Seller Program and start promoting Addtract online and in-store
                              today and
                              watch your
                              business run wild!
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-icon class="r-text-primary" style="font-size: 75px" type="bulb"></a-icon>
                          </a-col>
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <h4 class="r-heading-light r-text-primary r-text-uppercase">
                              <span class="r-text-primary">Let</span> more customers <span class="r-text-primary"
                            >discover</span> Your categories.
                            </h4>
                          </a-col>
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <p class="r-text-normal">
                              If you want to boost your marketing channels for your online business, we're here to help.
                              Absolutely zero
                              integration
                              required.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-icon class="r-text-primary" style="font-size: 75px" type="build"></a-icon>
                          </a-col>
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <h4 class="r-heading-light r-text-primary r-text-uppercase">
                              <span class="r-text-primary">Earn</span> more <span class="r-text-primary"
                            >value</span>
                              from
                              returning customers.
                            </h4>
                          </a-col>
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <p class="r-text-normal">
                              Our widest customer base is waiting to buy Your categories on Addtract. We partner up with
                              growing businesses like yours.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
              </a-row>
            </div>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
          <r-seller-benefits></r-seller-benefits>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-seller',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    onRegister (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onRegister', modal)
    }
  }
}
</script>
