<template>
  <a-row :gutter="[48,48]" type="flex" justify="center" align="middle">
    <a-col style="background: #1B9BD915;" class="r-relative" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row :gutter="[96,96]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }"
        >
          <a-row :gutter="[24,24]" type="flex" justify="end" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }"
                   :lg="{ span: 15 }"
            >
              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-primary r-text-uppercase r-text-primary">
                    Meet our
                  </h4>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h1 class="r-heading">
                    Powerful marketplace to experience shopping better.
                  </h1>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Get the benefits of Shopple products at a price you can afford and enjoy from the widest product catalog on the market.
                  </p>
                  <p class="r-text-normal">
                    With online shopping platform, tens of thousands of product categories, and millions of products in
                    front of you, it’s the all-in-one
                    marketplace you deserve.
                  </p>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-button class="r-btn-primary"
                            block
                            type="primary"
                            to="/register"
                            size="large"
                            @click="onModal"
                  >
                    Get started today!
                  </a-button>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col style="background: url(/images/content/2.svg) no-repeat; background-size: cover; padding-bottom: 600px;"
               :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }"
        >
        </a-col>
      </a-row>
    </a-col>
    <a-col style="background: #FFFFFF;" class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-tabs></r-tabs>
    </a-col>
    <a-col style="background: #FFFFFF;" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-ph-24" style="padding-bottom: 240px">
        <a-row :gutter="[24,24]" type="flex" justify="center" align="top">
          <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
                 :lg="{ span: 16 }"
          >
            <a-row :gutter="[48,48]" type="flex" justify="center" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     class="r-text-center"
              >
                <r-avatar :dataSrc="`/assets/icon_grey.svg`" :size="45"></r-avatar>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     class="r-text-center"
              >
                <h2 class="r-heading">
                  How our shopping service works
                </h2>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                     :md="{ span: 18 }"
                     :lg="{ span: 16 }"
                     class="r-text-center"
              >
                <p class="r-text-normal">
                  Real humans. Perfect books. Your Bookkeeping services imports bank statements and prepares marketplace
                  statements every month. Questions? Your Shopple bookkeeper works in-house, and they’re backed by our
                  Client Research Team to provide you with informed answers to complex questions.
                </p>
              </a-col>
            </a-row>
          </a-col>
          <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
                 :lg="{ span: 16 }"
          >
            <r-steps></r-steps>
          </a-col>
        </a-row>
      </div>
    </a-col>
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row type="flex" justify="start" align="middle">
        <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-uppercase r-text-primary">
                        Shopple for business
                      </h3>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        Helping retailers move ahead
                      </h2>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 12 }"
                           :lg="{ span: 9 }"
                    >
                      <p class="r-text-normal">
                        Whether it’s small online shops or retail brands, Shopple for Business gives you an easy way to
                        manage your selling channel needs. Built for retail shops, it offers a clear view into product
                        purchase activity with automated billing, expensing, and reporting.
                      </p>
                      <nuxt-link class="r-link-primary" to="/tax">
                        See what a stress free ecommerce looks like
                      </nuxt-link>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-card>
                    <a-card-meta>
                      <template slot="description">
                        <div class="r-mv-48">
                          <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <r-avatar class="r-avatar-block" :dataSrc="'/images/content/42.png'" :size="300"
                              ></r-avatar>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <a-row :gutter="[24,24]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h4 class="r-heading">
                                        Get flexible tax time support
                                      </h4>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        When you work with Shopple, you get a team of finance experts who take the work off your
                                        plate–so you can focus on your business.
                                      </p>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        Filing on your own? Working with a CPA? Either way, we’ve got your back. We send
                                        tidy tax time marketplaces, so you can get filed fast. We’ll even work directly
                                        with
                                        your CPA.
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <a-row :gutter="[12,12]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h4 class="r-heading">
                                        Forget about tax time stress with Shopple Tax
                                      </h4>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        With Shopple, there are no
                                        year-end surprises, our Tax Pros are on hand to provide year-round tax advisory
                                        services upon your request to add them onto your account.
                                      </p>
                                      <nuxt-link class="r-link-primary" to="/tax">
                                        Learn more about Shopple Tax
                                      </nuxt-link>
                                    </a-col>
                                  </a-row>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <a-row :gutter="[12,12]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h4 class="r-heading">
                                        Catch up (without the stress)
                                      </h4>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        If you’re feeling disorganized and way behind on your marketplaces, don’t sweat
                                        it.
                                        We can get your overdue books caught up and organized for you.
                                      </p>
                                      <p class="r-text-normal">
                                        <nuxt-link to="/bookkeeping">
                                          Learn more about Catch Up Bookkeeping
                                        </nuxt-link>
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </div>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <div class="r-mt-48 r-ph-24">
                <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 16 }"
                         :lg="{ span: 16 }"
                  >
                    <h3 class="r-heading-light r-text-uppercase r-text-primary">
                      marketplace reporting
                    </h3>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 18 }"
                         :lg="{ span: 16 }"
                  >
                    <h2 class="r-heading">
                      Discover essential business insights
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 9 }"
                  >
                    <p class="r-text-normal">
                      Access, analyse and manage your business marketplace reports from your computer, or smartphone
                      anytime you choose.
                    </p>
                    <nuxt-link class="r-text-primary" to="/bookkeeping">
                      Learn more about marketplace reporting
                    </nuxt-link>
                  </a-col>
                </a-row>
              </div>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-card>
                    <a-card-meta>
                      <template slot="description">
                        <div class="r-mv-48">
                          <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <a-row :gutter="[12,12]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h4 class="r-heading">
                                        Real-time cash flow tracking
                                      </h4>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        The Shopple Pulse dashboard lets you track every transaction, account, and trend
                                        in real-time, in one place - no app-hopping required.
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <a-row :gutter="[12,12]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h4 class="r-heading">
                                        Crystal clear marketplace statements and reports
                                      </h4>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        See what your money is up to. Your income statement, balance sheet, and visual
                                        reports provide the data you need to grow your business.
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <a-row :gutter="[12,12]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h4 class="r-heading">
                                        Detailed expense tracking
                                      </h4>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        Manage your spending like a pro. Tag transactions with labels like products,
                                        clients, location, or sales channel to see exactly how your business is
                                        performing.
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                              </a-row>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <r-avatar class="r-avatar-block" :dataSrc="'/images/content/40.png'" :size="300"
                              ></r-avatar>
                            </a-col>
                          </a-row>
                        </div>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-card>
                    <a-card-meta>
                      <template slot="description">
                        <div class="r-mv-48">
                          <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <r-avatar class="r-avatar-block" :dataSrc="'/images/content/20.png'" :size="300"
                              ></r-avatar>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <a-row type="flex" justify="start" align="middle">
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <a-row :gutter="[24,24]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h3 class="r-heading-light r-text-uppercase r-text-primary">
                                        The Shopple Platform
                                      </h3>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h2 class="r-heading">
                                        Get easy access to powerful marketplace tools
                                      </h2>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        Forget about spending hours learning new software. The Shopple platform makes it
                                        super simple to view your marketplaces, update information, or to check in with
                                        your team.
                                      </p>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p v-for="(feature, index) in features" class="r-text-normal">
                                        <a-icon class="r-text-primary" slot="prefix" type="check"/>
                                        {{ feature.content }}
                                      </p>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <nuxt-link class="r-link-primary" to="/hiw">
                                        Take a closer look at the Shopple platform
                                      </nuxt-link>
                                    </a-col>
                                  </a-row>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </div>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-row type="flex" justify="start" align="middle">
                    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <a-card>
                        <a-card-meta>
                          <template slot="description">
                            <div class="r-mv-48">
                              <a-row :gutter="[96,48]" type="flex" justify="start" align="middle">
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 12 }"
                                       :lg="{ span: 12 }"
                                >
                                  <a-row :gutter="[24,24]" type="flex" justify="start" align="top">
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h2 class="r-heading">
                                        Customized bookkeeping plans and unlimited support
                                      </h2>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <p class="r-text-normal">
                                        Every business is unique. No matter your business situation (or how many years
                                        of
                                        back
                                        taxes), we can handle any amount of retroactive bookkeeping.
                                      </p>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h3>
                                        <a-icon class="r-text-primary" slot="prefix" type="check"/>
                                        No job is too big
                                      </h3>
                                      <p class="r-text-normal">
                                        Your Bookipa specialist will work with you to figure out exactly what’s
                                        outstanding,
                                        help with document collection, and implement a custom plan to get your books
                                        done
                                        quick.
                                      </p>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h3>
                                        <a-icon class="r-text-primary" slot="prefix" type="check"/>
                                        Leave the heavy lifting to us
                                      </h3>
                                      <p class="r-text-normal">
                                        Your Bookipa team will work with you on a bookkeeping deadline to ensure that
                                        your
                                        books get done fast. And they’ll be on hand to keep you in the loop every step
                                        of
                                        the
                                        way.
                                      </p>
                                    </a-col>
                                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                           :md="{ span: 24 }"
                                           :lg="{ span: 24 }"
                                    >
                                      <h3>
                                        <a-icon class="r-text-primary" slot="prefix" type="check"/>
                                        Year End marketplaces for stress-free filing
                                      </h3>
                                      <p class="r-text-normal">
                                        Behind big time on tax filing? Bookipa provides a Year End marketplace Package for
                                        each year of retroactive bookkeeping completed - so you can get caught up,
                                        filed,
                                        and in
                                        the clear.
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 12 }"
                                       :lg="{ span: 12 }"
                                >
                                  <r-avatar class="r-avatar-block" :dataSrc="'/images/content/15.png'" :size="600"
                                  ></r-avatar>
                                </a-col>
                              </a-row>
                            </div>
                          </template>
                        </a-card-meta>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <r-learn-more></r-learn-more>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-card>
                    <a-card-meta>
                      <template slot="description">
                        <div class="r-mv-48">
                          <a-row :gutter="[96,96]" type="flex" justify="start" align="middle">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <r-avatar class="r-avatar-block" :dataSrc="'/images/content/25.png'" :size="300"
                              ></r-avatar>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <h3 class="r-heading-light r-text-uppercase r-text-primary">
                                    Expert bookkeeping
                                  </h3>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <h2 class="r-heading">
                                    Get one-on-one support when you need it
                                  </h2>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <p class="r-text-normal">
                                    Shopple gives you a dedicated finance expert supported by a team of knowledgeable
                                    small
                                    business
                                    experts. We’re here to take the guesswork out of running your own business - for
                                    good.
                                  </p>
                                  <nuxt-link class="r-text-primary" to="/bookkeeping">
                                    Learn how our experts handle your bookkeeping
                                  </nuxt-link>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </div>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-shop-now></r-shop-now>
    </a-col>
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
           :lg="{ span: 16 }"
    >
      <a-row :gutter="[96,96]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-testimonials></r-testimonials>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row type="flex" justify="start" align="middle">
            <a-col class="r-ph-24 r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
            >
              <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Why small stores <span class="r-text-primary">choose</span> Shopple
                  </h2>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 8 }">
                  <a-card>
                    <a-card-meta>
                      <template slot="description">
                        <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                            <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/11.png'" :size="45"
                            ></r-avatar>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                            Perfectly categorized and reconciled transactions come standard
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 8 }">
                  <a-card>
                    <a-card-meta>
                      <template slot="description">
                        <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                            <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/15.png'" :size="45"
                            ></r-avatar>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                            Our Client Research Team tackles complex questions and is 100% free
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
                <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 8 }">
                  <a-card>
                    <a-card-meta>
                      <template slot="description">
                        <a-row class="r-text-center" :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                            <r-avatar class="r-avatar-auto" :dataSrc="'/images/content/12.png'" :size="45"
                            ></r-avatar>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                            We always respond to messages or calls in one business day or less
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-hiw',
  props: {},
  data () {
    return {
      features: [
        { content: 'Access Shopple via mobile or desktop - we go where you go' },
        { content: 'Quickly answer categorization requests from your team' },
        { content: 'Contact your team with our simple messaging feature' },
        { content: 'Get operating support at any time within our work ours' }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {
    onStoreTray () {
      this.$store.dispatch('app/onStoreTray', true)
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
