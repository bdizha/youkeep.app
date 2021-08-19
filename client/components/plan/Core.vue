<template>
  <a-row class="r-text-left" :gutter="[48,48]" align="top" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-white r-pull-h-24">
        <a-row :gutter="[48,48]" align="top" justify="start" type="flex">
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
                    Your portfolio, your way
                  </h4>
                </div>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  Ideal if you’d like to be in control of which properties to invest in based on your own investment
                  goals and are comfortable making those decisions.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-normal">
                  Simply start by choosing how much you’d like to invest.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-pull-h-24">
                  <a-collapse accordion
                              :defaultActiveKey="activeKey"
                              expandIconPosition="right"
                  >
                    <a-collapse-panel v-for="(section, index) in sections"
                                      :key="(index + 1).toString()"
                                      :class="'r-collapse-panel-light'"
                                      class="r-collapse-panel"
                    >
                      <template slot="header">
                        <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                          >
                            <p class="r-text-medium">
                              {{ section.title }}
                            </p>
                          </a-col>
                        </a-row>
                      </template>
                      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                        <a-col v-for="(item, index) in section.items"
                               :key="index"
                               :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <div class="r-checked-item">
                            <a-icon class="r-checked-item-icon" type="check"></a-icon>
                            {{ item.content }}
                          </div>
                        </a-col>
                      </a-row>
                    </a-collapse-panel>
                  </a-collapse>
                </div>
              </a-col>
            </a-row>
          </a-col>
          <a-col class="r-text-center" :lg="{ span: 8 }" :md="{ span: 8 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <r-avatar :data-src="'/images/content/illustration-17.svg'" :size="300"
                      class="r-avatar-block"
            ></r-avatar>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-plan-core',
  props: {
    size: { type: Number, required: false, default: 16 },
    hasMore: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      activeKey: 1,
      title: 'Brickcent connects customers to sellers.',
      content: 'Our shoppers handle all your order collection and delivery experience as well as returns for you at\n' +
        'a very low cost.',
      sections: [
        {
          title: 'Invest Core features',
          items: [
            {
              content: 'Choose which properties to buy Bricks in'
            },
            {
              content: 'Decide how much you invest and when'
            },
            {
              content: 'Deposit funds and invest today'
            },
            {
              content: 'Diversify your portfolio across different properties based on your investment goals'
            },
            {
              content: 'Receive regular updates on how your portfolio is performing'
            }
          ]
        },
        {
          title: 'How Invest Core works',
          items: [
            {
              content: 'Our specialist property team sources properties, then breaks them into \'Bricks\' for you to buy and hold'
            },
            {
              content: 'You choose which properties to buy Bricks in, based on your investment goals'
            },
            {
              content: 'We\'ll take care of the properties and you\'ll receive your cut of the rent, after expenses'
            },
            {
              content: 'As property prices change so does the value of your Bricks'
            },
            {
              content: 'When the time comes, you can put your Bricks up for sale'
            }
          ]
        }
      ]
    }
  },
  methods: {
    hasTitle () {
      return this.title.length > 0
    }
  }
}
</script>
