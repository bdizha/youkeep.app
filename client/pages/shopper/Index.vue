<template>
  <a-row :gutter="[48,96]" type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
     <div class="r-mv-48">
       <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
         <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                :md="{ span: 12 }"
                :lg="{ span: 12 }"
         >
           <a-card class="r-pv-48 r-bg-secondary-light">
             <a-card-meta>
               <template slot="description">
                 <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                   <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                          :md="{ span: 24 }"
                          :lg="{ span: 24 }"
                   >
                     <h4 class="r-heading-light r-text-secondary r-text-uppercase r-text-secondary">
                       For shoppers
                     </h4>
                   </a-col>
                   <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                          :md="{ span: 24 }"
                          :lg="{ span: 24 }"
                   >
                     <h1 class="r-heading">
                       More flexible,<br>
                       Less intrusive
                     </h1>
                   </a-col>
                   <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                          :md="{ span: 24 }"
                          :lg="{ span: 24 }"
                   >
                     <p class="r-text-normal">
                       Earn up to R55/hr or more shopping for Shopple members.
                       Deliver things people love, from the stores they trust.
                     </p>
                   </a-col>
                   <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                          :md="{ span: 12 }"
                          :lg="{ span: 12 }"
                   >
                     <a-button class="r-btn-secondary"
                               block
                               type="secondary"
                               to="/register"
                               size="large"
                               @click="onModal"
                     >
                       Get started today!
                     </a-button>
                   </a-col>
                 </a-row>
               </template>
             </a-card-meta>
           </a-card>
         </a-col>
         <a-col
           :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 12 }"
           :lg="{ span: 12 }"
         >
           <r-avatar class="r-avatar-block" data-src="/images/content/hero-02.png" :size="450"
           ></r-avatar>
         </a-col>
       </a-row>
     </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <r-steps></r-steps>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 9 }"
               :lg="{ span: 9 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col v-for="(image, index) in [66, 67, 68, 69, 70, 71]"
                   :key="index"
                   :xs="{ span: 8 }" :sm="{ span: 8 }"
                   :md="{ span: 8 }"
                   :lg="{ span: 8 }"
            >
              <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/' + image + '.png'" :size="75"
              ></r-avatar>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 15 }"
               :lg="{ span: 15 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Shop it
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Work on your schedule
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 18 }"
                         :lg="{ span: 16 }"
                  >
                    <p class="r-text-normal">
                      Work part time or full time - any time.
                      Set your own hours for a completely flexible schedule.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 15 }"
               :lg="{ span: 15 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Deliver it
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Choose your wheels
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 18 }"
                         :lg="{ span: 16 }"
                  >
                    <p class="r-text-normal">
                      Get tips from other shoppers, attend launch parties, and get a free Shopple membership.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 9 }"
               :lg="{ span: 9 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col v-for="(image, index) in [61, 62, 63, 64, 65, 66]"
                   :key="index"
                   :xs="{ span: 8 }" :sm="{ span: 8 }"
                   :md="{ span: 8 }"
                   :lg="{ span: 8 }"
            >
              <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/' + image + '.png'" :size="75"
              ></r-avatar>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 9 }"
               :lg="{ span: 9 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col v-for="(image, index) in [65, 66, 67, 68, 69, 70]"
                   :key="index"
                   :xs="{ span: 8 }" :sm="{ span: 8 }"
                   :md="{ span: 8 }"
                   :lg="{ span: 8 }"
            >
              <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/' + image + '.png'" :size="75"
              ></r-avatar>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 15 }"
               :lg="{ span: 15 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"

                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Earn it
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Earn money as you shop
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 18 }"
                         :lg="{ span: 16 }"

                  >
                    <p class="r-text-normal">
                      Experienced shoppers make an average of R50/hr.
                    </p>
                    <p class="r-text-normal">
                      * Paychecks are delivered every week.
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"

                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Join us
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Requirements:
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <p class="r-text-normal">
                      Shopple is a membership-based shopping marketplace, enabling delivery of trendy fashion items,
                      hot food and
                      household essentials.
                    </p>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 18 }"
                         :lg="{ span: 16 }"

                  >
                    <a-list :data-source="requirements">
                      <a-list-item slot="renderItem" slot-scope="item, index">
                        <a-icon type="check-circle" class="r-text-secondary"/>
                        <div class="r-list-item-text">
                          {{ item }}
                        </div>
                      </a-list-item>
                    </a-list>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <h2 class="r-heading">
            Think you know shopping <span class="r-text-secondary">experience</span>?
          </h2>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="center">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      Why partner with Shopple?
                    </h4>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <p class="r-text-normal">
                      Shopple is a membership-based shopping marketplace, enabling delivery of trendy fashion items,
                      hot food and
                      household essentials.
                    </p>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                         :lg="{ span: 12 }"
                  >
                    <a-button block @click="onRegister"
                              size="large"
                              class="r-btn-secondary"
                              type="secondary"
                    >
                      Get started
                    </a-button>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-shopper',
  data() {
    return {
      images: [
        'art-05.png'
      ],
      postCode: null,
      formPostCode: this.$form.createForm(this, {name: 'form_post_code'}),
      requirements: [
        "18 years of age minimum",
        "Reliable vehicle, 15 years old or newer",
        "iPhone (iOS 8 or newer) or Android (5.4.2 or newer)",
        "Valid RSA driver's license and auto insurance",
        "Thorough background check required",
        "Insulated cooler bag",
        "Knowledge of product selection",
        "Ability to lift 24+ pounds"
      ]
    }
  },
  created() {
  },
  methods: {
    onModal() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'shopper';

      this.$store.dispatch('base/onModal', modal);
    }
  }
};
</script>
