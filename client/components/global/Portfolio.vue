<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col v-for="(partner, index) in portfolio"
           :key="index"
           v-if="!isHidden(index)"
           :lg="{ span: isCurrent(index) ? 24 : 12 }" :md="{ span: isCurrent(index) ? 24 : 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24}"
    >
      <a-card class="r-card-partner"
              :class="{'r-bg-white': !isCurrent(index), 'r-bg-dark r-pull-h-24 r-border-none': isCurrent(index)}"
      >
        <a-row align="middle" justify="start" type="flex">
          <a-col v-if="!isCurrent(index)" :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
                 @click="setCurrentItem(index)"
          >
            <div class="r-partner-item">
              <div class="r-partner-item-logo">
                <img style="height: 30px; width: auto" :src="'/partners/' + partner.slug + '/logo.svg'" :alt="partner.title" />
              </div>
              <div class="r-partner-item-meta">
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <img style="height: 30px; width: auto" :src="'/partners/' + partner.slug + '/logo.svg'" :alt="partner.title" />
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          {{ partner.content }}
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                             :sm="{ span: 12 }"
                             :xs="{ span: 12 }"
                      >
                        <a-button block
                                  class="r-btn-bordered-secondary"
                                  size="large"
                        >
                          View more
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </div>
            </div>
          </a-col>
          <a-col v-if="isCurrent(index)" :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24}"
              >
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <div class="r-partner-item">
                      <div class="r-partner-item-logo">
                        <img style="height: 210px; width: auto" :src="'/partners/' + partner.slug + '/icon.svg'" :alt="partner.title" />
                      </div>
                    </div>
                  </a-col>
                  <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <a-button class="r-btn-white-bordered"
                              size="large">
                      {{ partner.title }}
                    </a-button>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24}"
              >
                <div class="r-partner-item-content">
                  <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading-light r-text-uppercase r-text-yellow">
                            Vision:
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            {{ partner.content }}
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                            Execution:
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            {{ partner.problem }}
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading-light r-text-uppercase r-text-primary">
                            Scale:
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            {{ partner.solution }}
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                  <div class="r-partner-item-close" @click="onCloseItem()">
                    <a-icon type="close"/>
                  </div>
                </div>
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
  name: 'r-portfolio',
  data () {
    return {
      currentItem: null,
      hiddenItem: null,
      portfolio: [
        {
          title: 'Addtract',
          slug: 'Addtract',
          content: 'B2B platform connecting retailers and suppliers for better product discovery.',
          problem: 'Retailers didn’t have a good mechanism to contact suppliers, and when they did get proposals, the suppliers often didn’t know what information the retailers needed to make a decision on their product.',
          solution: 'Empowering suppliers and retailers to be productive and successful. Suppliers can create free product profiles that detail all the key information buyers need to know when considering your product.'
        },
        {
          title: 'Addtract',
          slug: 'Addtract',
          content: 'A fractional investment platform to make property accessible to everyone.',
          problem: 'Traditionally inventing in real estate hasn’t been available to most ' +
            'low income investors without either meeting high net worth requirements or going through a complex and inefficient process, ' +
            'riddled with high fees and outdated middlemen.',
          solution: 'Addtract is designed to utilise technology to make high-quality selling tools affordable to everyone. We combine state-of-the-art technology with in-house expertise to reduce fees and maximize your long-term business connectons.\n'
        },
        {
          title: 'Finkipa',
          slug: 'finkipa',
          content: 'Affordable financial services tools for growing businesses.',
          problem: 'A day in the life of a business is a long time. Founders attend to their business daily, and their financial operations deserve the same attention inorder to proactively manage their finance.',
          solution: 'Finkipa leverages a seamless blend of artificial intelligence and human finance experts to perform daily bookkeeping and manage every financial need of a business for a flat monthly fee.'
        },
        {
          title: 'Renkipa',
          slug: 'renkipa',
          content: 'A Software as a Service rental platform that connects landlords to tenants.',
          problem: 'Renkipa offers the cloud-based solutions to help estate agents, landlords, and tenants manage the rental process digitally. Renkipa also provides a monitor for agents to easily offer services that provide more value to their tenants and landlords, such as insurance and utility services.',
          solution: 'Its cloud-based software digitizes tenancy creation and progression, allowing Renkipa to cut pointless, time-consuming administration for agents while transforming the tenant and landlord experience. The platforms helps to save time spent on looking for a tenant.'
        },
        {
          title: 'Waykipa',
          slug: 'waykipa',
          content: 'Waykipa provides a logistics delivery experience platform for e-commerce merchants and their customers.',
          problem: 'Most of the ecommerce tools have not been developed with customers in mind and not optimized nor targeted enough to meet all retail and enterprise demands.',
          solution: 'Powering up e-commerce businesses with all their logistics data in one platform. Retailers select the right modules and let their customer data perform for them.'
        },
        {
          title: 'Bookipa',
          slug: 'bookipa',
          content: 'Bookipa gives people access to pay and side hustle directly from their smartphones, whenever they need it.',
          problem: 'Bookipa was born out of a clear need to change a financial system that leaves millions of people behind and unsupported.',
          solution: 'Access your earnings while you earn-no need to wait for payday. Customers can get up to R6,000 of their paycheck per pay period.'
        },
        {
          title: 'Artbeam',
          slug: 'artbeam',
          content: 'A digital art marketplace that showcases African artwork to the world.',
          problem: 'Artbeam enhances the every day lives of people through the powerful medium of art by allowing impressive pieces to be accessible to everyone.',
          solution: 'Artbeam aims to keep things as simple as possible for the client by taking care of all aspects involved in placing the perfect piece of art on their walls.'
        },
        {
          title: 'Finvise',
          slug: 'finvise',
          content: 'A robo advisory platform that helps millennials micro invest in finance.',
          problem: 'Finvise aims to serve the under-served audience of financial services market in Africa. There are limited investment options for young people in Africa. Saving with banks: Interest rate is super low after inflation. Equity: Require a medium level of financial knowledge to actively trade and earn returns on investment.',
          solution: 'Finvise is a platform to help young Africans to accumulate financial intelligence (controlled savings, set a savings schedule and regular alerts). The wealth building platform, helps optimize the idle money by automatically transferring accumulated money to reputable financial funds in South Africa.'
        },
        {
          title: 'Opslect',
          slug: 'opslect',
          content: 'Accelerated cloud and DevOps solutions for scaling businesses in Africa.',
          problem: 'From thought leadership and consultancy; to improving processes, automating builds and deployments, security, to on-going proactive management, monitoring and support.',
          solution: 'At Opslect, we are disruptive thinkers who work with organisations as one team, so together we can develop the right solutions for your business problem or goal.'
        }
      ]
    }
  },
  methods: {
    setCurrentItem (currentItem) {
      this.currentItem = currentItem

      this.setHiddenItem(currentItem)
    },
    onCloseItem () {
      this.currentItem = null
      this.hiddenItem = null

      console.log('>>>>', this.currentItem)
      console.log('>>>>', this.hiddenItem)
    },
    setHiddenItem (index) {
      this.hiddenItem = ((index) % 2) !== 0 ? index - 1 : index + 1
    },
    isCurrent (index) {
      return index === this.currentItem
    },
    isHidden (index) {
      return index === this.hiddenItem
    }
  }
}
</script>
