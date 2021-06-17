<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class=" r-ph-24 r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 16 }"
           :lg="{ span: 15 }"
    >
      <a-row :gutter="[96,96]" type="flex" justify="start" align="top">
        <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <div class="r-mv-48">
            <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
              <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 16 }"
                     :lg="{ span: 15 }"
              >
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Frequently Asked Questions
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      We strive to price our plans in a simple, clear way, but if you have any concerns or need a little
                      extra help choosing a plan, feel free to reach out to us.
                    </p>
                    <p class="r-text-normal">
                      We strive to price our plans in a simple, clear way, but if you have any concerns or need a little
                      extra help choosing a plan, feel free to reach out to us.
                    </p>
                  </a-col>
                </a-row>
              </a-col>
              <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 8 }"
                     :lg="{ span: 9 }"
              >
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <p class="r-text-normal r-text-primary">
                        <a-icon type="check"></a-icon>
                        <span>
                          No hidden fees.
                        </span>
                      </p>
                      <p class="r-text-normal r-text-primary">
                        <a-icon type="check"></a-icon>
                        <span>
                        No confusing tiered pricing.
                        </span>
                      </p>
                      <p class="r-text-normal r-text-primary">
                        <a-icon type="check"></a-icon>
                        <span>
                          What you see is what you get
                        </span>
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
            </a-row>
          </div>
        </a-col>
        <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 9 }"
               :lg="{ span: 9 }"
        >
          <a-card>
            <a-card-meta>
              <template slot="description">
                <a-collapse v-model="activeKey"
                            accordion
                            expandIconPosition="left"
                >
                  <template #expandIcon="props">
                    <a-icon :type="props.isActive ? 'minus' : 'plus'"/>
                  </template>
                  <a-collapse-panel
                    v-for="(faqCategory, index) in faqCategories"
                    :key="(index + 1).toString()"
                    class="r-collapse-panel"
                    :header="faqCategory.title"
                  >
                    <a-list :data-source="faqCategory.faqs">
                      <a-list-item @click="setFaq(faq)" slot="renderItem"
                                   slot-scope="faq, index"
                      >
                        {{ faq.title }}
                      </a-list-item>
                    </a-list>
                  </a-collapse-panel>
                </a-collapse>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col v-if="currentFaq" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 15 }" :lg="{span: 15}">
          <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
            <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <h2 class="r-heading r-text-primary">
                {{ currentFaq.title }}
              </h2>
            </a-col>
            <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <p class="r-text-normal" v-html="currentFaq.content">
              </p>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-help',
  props: {},
  data () {
    return {
      activeKey: ['1'],
      currentFaq: null,
      faqCategories: [
        {
          title: 'How it Works?',
          slug: 'how-it-works',
          faqs: [
            {
              title: 'How does pricing work?',
              content: `Our bookkeeping and tax plans are based on an annual subscription model with
              transparent pricing that scales with your expense rate and your business needs such as
              connected institutions, bills, and invoices. See our pricing page for more details. `
            },
            {
              title: 'Is support included? Can I ask questions?',
              content: `Yes! Support is included in your plan. Your dedicated finance expert is happy to answer any questions you might have. We strive to respond to inquiries in a business day or less. See our pricing page for more details. `
            },
            {
              title: 'Will you send invoices to my customers and help pay my bills?',
              content: `Yes, we’re happy to provide this support as an additional service. Please contact your sales rep for details. `
            },
            {
              title: 'What’s the difference between accrual and cash bookkeeping?',
              content: `Cash bookkeeping only tracks when money enters or leaves a bank account. Accrual bookkeeping is a more sophisticated approach that records when the money was earned or owed. Most larger companies use accrual and Shopple does accrual from day one so there’s no painful transition later. `
            },
            {
              title: 'What types of companies can Shopple serve?',
              content: `We have over a thousand customers ranging in all sizes and spanning many industries. We specialize in working with high-growth technology startups, ecommerce providers, professional services, non–profits and more. Get in touch with us to see whether if Shopple is the right fit for you. `
            },
            {
              title: 'What are the requirements to start with Shopple?',
              content: ` We have three requirements that allow us to deliver the most accurate books for your business.

    Electronic transaction access <br/>
    Expense reporting software<br/>
    No commingling of personal expenses<br/>
`
            },
          ]
        },
        {
          title: 'Pricing',
          slug: 'pricing',
          faqs: [
            {
              key: '1',
              title: 'Do you offer discounts for pre-revenue companies?',
              content: 'Yes - Shopple offers special discount pricing for pre-revenue companies. Qualified companies can receive R360 off per month for the first year. Contact us to learn more. '
            },
            {
              key: '2',
              title: 'How do prices change as I grow?',
              content: 'We understand the importance of predictability and transparency. Every month, we’ll average your prior 3 months of books to understand your current expenses, as well as how your marketplace institution connections, special transactions, and hours of support have changed. '
            },
            {
              key: '3',
              title: 'Why do you price based on expenses?',
              content: 'Our goal is simple and transparent pricing. In examining different models, we found that expenses closely reflected business complexity while also having the advantage of being simple to calculate. To determine the best Shopple plan for your business’ needs, we also factor in the number of marketplace institutions, transactions, and hours of support. '
            },
            {
              key: '4',
              title: 'What is your cancellation policy? What if I prepaid for the year?',
              content: 'Your subscription will continue until the end of your billing cycle. If you decide not to renew after the year is over, you can let us know in advance and we’ll stop billing you for the next cycle. '
            },
            {
              key: '5',
              title: 'When I prepay for a year, does that lock in my price?',
              content: 'No, if your business is growing rapidly, your books are growing in complexity as well. If your expenses and other support needs change and exceeds the amount you’ve prepaid for, you’ll get billed the difference that month. '
            },
            {
              key: '6',
              title: 'Are there any one–time fees when I sign up for Shopple?',
              content: 'Yes, there’s an onboarding fee equal to one month of bookkeeping to help us make sure your setup process is a smooth one. '
            }
          ]
        },
        {
          title: 'Integration',
          slug: 'integration',
          faqs: [
            {
              title: 'Why use QuickBooks?',
              content: `
Shopple does all of its bookkeeping in QuickBooks Online because it offers a number of advantages:

    Seamless tax prep. Virtually every tax preparer in the US knows how to work with QuickBooks. You’ll have the freedom to choose any tax preparer you want. <br />
    Industry standard. In addition to tax preparers, most other marketplace professionals (e.g., attorneys, bankers, and venture capitalists) all know how to work with QuickBooks. Again, this gives you the most freedom when making marketplace decisions.<br />
    Data portability. QuickBooks means you’re not locked in. If you ever decide to move on from Shopple, your data goes with you, in a format that is immediately useful.<br />

`
            },
            {
              title: 'Why use QuickBooks?',
              content: `
Shopple does all of its bookkeeping in QuickBooks Online because it offers a number of advantages:

    Seamless tax prep. Virtually every tax preparer in the US knows how to work with QuickBooks. You’ll have the freedom to choose any tax preparer you want. <br />
    Industry standard. In addition to tax preparers, most other marketplace professionals (e.g., attorneys, bankers, and venture capitalists) all know how to work with QuickBooks. Again, this gives you the most freedom when making marketplace decisions.<br />
    Data portability. QuickBooks means you’re not locked in. If you ever decide to move on from Shopple, your data goes with you, in a format that is immediately useful.<br />

`
            },
            {
              title: 'If I’m on Xero, can you migrate me from Xero? ',
              content: `
Yes, we can help you transition your books over to QBO. As part of our onboarding process, we’ll make monthly journal entries in Quickbooks from your monthly account totals in Xero (for both the balance sheet and the P&L/income statement) going back to the beginning of the year.
`
            }
          ]
        },
        {
          title: 'Taxes',
          slug: 'taxes',
          faqs: [
            {
              title: 'How do taxes work with Shopple?',
              content: `You have a couple of options for doing your taxes when you use Shopple.

The first option is to use Shopple Tax. Please note that tax preparation is not included in your Shopple Bookkeeping subscription – you must purchase Shopple Tax for those services.

The second option is to use a firm of your choice and have Shopple hand off your prepared books to them. This handoff is included in your Shopple Bookkeeping subscription at no additional cost. `
            },
            {
              title: 'What does Shopple Tax include?',
              content: `Shopple Tax includes federal, state, and city level income tax preparation as well as various informational reporting compliance (Form 1099-MISC, W8-BEN) and unlimited email support. Please see the full scope of services here. `
            },
            {
              title: 'If Shopple didn’t do my books for the entire year, can I still use Shopple Tax?',
              content: `Yes, we’ll generally want to take a look at the year’s books to make sure they meet our standards, but many of Shopple Tax customers started Shopple halfway through the year. `
            },
            {
              title: 'Do you do personal income taxes?',
              content: `At this time, Shopple does not file personal income taxes. `
            }
          ]
        }
      ]
    }
  },
  created () {
    this.currentFaq = this.faqCategories[0].faqs[0]
  },
  methods: {
    setFaq (faq) {
      this.currentFaq = faq
    }
  }
}
</script>
