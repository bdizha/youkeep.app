<template>
  <a-row class="r-text-left" :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-white r-pull-h-24">
        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-shade-secondary">
                  <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                    Build smart credit line
                  </h4>
                </div>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  Automatically build credit history. Spazastop helps investors save money in line with the property
                  market and it only takes minutes to
                  invest.
                </p>
              </a-col>
            </a-row>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[48,24]" align="top" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-pull-h-24">
                  <a-collapse accordion
                              @change="onSelect"
                              :defaultActiveKey="activeKey"
                              expandIconPosition="right"
                  >
                    <a-collapse-panel v-for="(section, index) in sections"
                                      :key="(index+1).toString()"
                                      :class="'r-collapse-panel-light'"
                                      class="r-collapse-panel"
                    >
                      <template slot="header">
                        <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                          >
                            <p class="r-text-medium">
                              {{ section.title }}
                            </p>
                          </a-col>
                        </a-row>
                      </template>
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col v-for="(item, index) in section.items"
                               :key="index"
                               :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            {{ item.content }}
                          </div>
                        </a-col>
                        <a-col class="r-hide-lg r-text-center" :lg="{ span: 12 }" :md="{ span: 12 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <r-avatar :data-src="'/images/content/' + section.image"
                                    :size="300"
                                    class="r-avatar-block"
                          ></r-avatar>
                        </a-col>
                      </a-row>
                    </a-collapse-panel>
                  </a-collapse>
                </div>
              </a-col>
              <a-col class="r-hide-sm r-text-center" :lg="{ span: 8 }" :md="{ span: 8 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-avatar v-for="(section, index) in sections"
                          :key="index"
                          v-if="(index + 1 == activeKey)"
                          :data-src="'/images/content/' + section.image"
                          :size="300"
                          class="r-avatar-block"
                ></r-avatar>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-plan-prime',
  props: {
    size: { type: Number, required: false, default: 16 },
    hasMore: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      activeKey: 1,
      sections: [
        {
          title: 'Invest - Buy It',
          items: [
            {
              content: 'Choose how much you\'d like to invest each month via direct debit, from R2,400'
            },
            {
              content: 'Build a diversified property portfolio of Bricks by investing regularly'
            },
            {
              content: 'Ability to skip a month or cancel'
            }
          ],
          image: 'illustration-21.svg'
        },
        {
          title: 'Grow - Earn Bricks',
          items: [
            {
              content: 'We\'ll invest your money in Bricks in properties, selected by our specialist team based on their growth potential'
            },
            {
              content: 'Receive regular updates on how your portfolio is performing'
            },
            {
              content: 'Earn your share of any rent, after expenses, paid monthly, automatically reinvested'
            },
            {
              content: 'As the value of the property changes, so does the value of your Bricks'
            },
            {
              content: 'As property prices change so does the value of your Bricks'
            },
            {
              content: 'When the time comes, you can put your Bricks up for sale'
            }
          ],
          image: 'illustration-22.svg'
        },
        {
          title: 'Withdraw - Sell Bricks',
          items: [
            {
              content: 'To withdraw your money, disable Smart Invest and sell your Bricks'
            },
            {
              content: 'Simply set the sale price and the amount you’d like to sell. Other investors can then buy them.'
            },
            {
              content: 'As soon as your Bricks are sold, you can withdraw your money (including any capital returns)'
            }
          ],
          image: 'illustration-23.svg'
        }
      ]
    }
  },
  computed: {},
  methods: {
    onSelect (value) {
      this.activeKey = value
    }
  }
}
</script>
