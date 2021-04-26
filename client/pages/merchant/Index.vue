<template>
  <r-page>
    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading r-text-secondary">
                Become a verified merchant today
              </h2>
              <p class="r-text-normal">
                Join the Shopple Merchant Program and start promoting Shopple in-store today and watch your
                sales run wild!
              </p><br/>
              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button block @click="onModal('merchant')"
                            class="r-btn-secondary r-margin-top-24"
                            size="default" type="secondary">
                    Become a merchant
                  </a-button>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <nuxt-link to="/merchant/help">
                    <a-button class="r-btn-bordered-grey"
                              block
                              type="secondary"
                              size='default'>
                      Merchant Help
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card>
          <div slot="cover">
            <r-avatar shape="square" :src="'/assets/' + banner"/>
          </div>
        </a-card>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
        <a-row :gutter="[24,24]" type="flex" justify="end" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-row type="flex" justify="center" align="middle">
                  <a-col :xs="{ span: 24 }" :md="{ span: 24 }"
                         :lg="{ span: 24 }">
                    <h2 class="r-heading">
                      Want to start making more sells with Shopple?
                    </h2>
                    <p class="r-text-normal">
                      Apply to be a Shopple Merchant today and start achieving your goals.
                    </p>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                         :lg="{ span: 12 }">
                    <a-button @click="onModal" class="r-btn-secondary"
                              size="default"
                              type="secondary">
                      Become a merchant
                    </a-button>
                  </a-col>
                </a-row>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-steps :has-title="true" heading="Shopple shopping experience"></r-steps>
    <a-row class="r-mt-48" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[24,24]" type="flex" justify="center"
                         align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{span: 8}">
                      <div class="r-icon r-icon__secondary r-icon-stroke">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="80px" height="80px">
                          <path fill="#F50A2B"
                                d="M8.4 44.24a3.96 3.96 0 0 0 4.41.52A23.89 23.89 0 0 1 24 42c4.04 0 7.85 1 11.19 2.76 1.43.76 3.19.52 4.42-.53a23.95 23.95 0 0 0 8.33-19.96 24.1 24.1 0 0 0-22.4-22.22 24 24 0 0 0-17.13 42.2zm2.48-4.6l-.41-.41A19.24 19.24 0 0 1 5.08 23.9c.12-.82.18-1.7.4-2.5l.3-1.23.43-1.2c.12-.42.3-.82.48-1.2.19-.4.36-.8.56-1.18.44-.75.84-1.53 1.38-2.22a19.52 19.52 0 0 1 7.85-6.53c.76-.35 1.53-.63 2.28-.89.77-.19 1.51-.47 2.27-.57.75-.12 1.48-.27 2.2-.3.7-.04 1.43-.1 2.06-.07a20.12 20.12 0 0 1 8.62 2.15 1.71 1.71 0 1 1-1.5 3.08l-.04-.03-.06-.03-.47-.25a17.93 17.93 0 0 0-3.62-1.35 17 17 0 0 0-3.02-.45c-.6-.05-1.16-.02-1.78 0-.6 0-1.23.1-1.87.18-.65.06-1.29.28-1.96.41a17.7 17.7 0 0 0-5.77 2.88c-1.17.94-2.3 1.99-3.2 3.23-.51.58-.87 1.26-1.3 1.9-.19.33-.35.68-.52 1.02-.18.33-.35.68-.47 1.03l-.41 1.06-.3 1.08c-.24.72-.3 1.42-.44 2.12a17.25 17.25 0 0 0 .74 7.92 17.58 17.58 0 0 0 3.65 6.22l.4.44a.75.75 0 0 1-1.09 1.03z"></path>
                          <path fill="#1B9BD9"
                                d="M38.85 40.85a1 1 0 0 1-1.41 0l-2.13-2.12a1 1 0 0 1 1.42-1.42l2.12 2.13a1 1 0 0 1 0 1.4zm3.34-4.35a1 1 0 0 1-1.37.37l-2.6-1.5a1 1 0 0 1 1-1.74l2.6 1.5a1 1 0 0 1 .37 1.37zm2.1-5.06a1 1 0 0 1-1.23.7l-2.9-.77a1 1 0 0 1 .52-1.94l2.9.78a1 1 0 0 1 .7 1.23zM45 26a1 1 0 0 1-1 1h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 1 1zm-.72-5.44a1 1 0 0 1-.7 1.23l-2.9.78a1 1 0 1 1-.52-1.94l2.9-.77a1 1 0 0 1 1.22.7zm-2.1-5.06a1 1 0 0 1-.36 1.37l-2.6 1.5a1 1 0 0 1-1-1.74l2.6-1.5a1 1 0 0 1 1.37.37zm-19.84 8.84L38.1 10.4a1.06 1.06 0 0 1 1.5 1.5L25.66 27.66a2.35 2.35 0 0 1-3.32-3.32z"></path>
                        </svg>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 14 }" :lg="{span: 16}">
                      <h4 class="r-heading">
                        Increase your conversion rate by 24%
                      </h4>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[24,24]" type="flex" justify="center"
                         align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{span: 8}">
                      <div class="r-icon r-icon__secondary r-icon-stroke">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 48 48">
                          <g id="Artboard-2" fill="none" fill-rule="evenodd">
                            <path id="2" fill="#F50A2B"
                                  d="M44.1483949,30.0823815 C42.7471567,29.3894292 41.1690564,29 39.5,29 C33.7010101,29 29,33.7010101 29,39.5 C29,41.4032008 29.5063557,43.188136 30.3916979,44.7274361 C28.0815121,45.5513492 25.5931501,46 23,46 C10.8497355,46 1,36.1502645 1,24 C1,11.8497355 10.8497355,2 23,2 C35.1502645,2 45,11.8497355 45,24 C45,26.1100186 44.7029527,28.1506581 44.1483949,30.0823815 Z"></path>
                            <path id="1" fill="#1B9BD9"
                                  d="M30.3916979,44.7274361 C28.0815121,45.5513492 25.5931501,46 23,46 C16.8962571,46 11.3730764,43.514318 7.38750374,39.5 C11.3730764,35.485682 16.8962571,33 23,33 C25.5931501,33 28.0815121,33.4486508 30.3916979,34.2725639 C29.5063557,35.811864 29,37.5967992 29,39.5 C29,41.4032008 29.5063557,43.188136 30.3916979,44.7274361 Z M23,29 C18.581722,29 15,25.418278 15,21 C15,16.581722 18.581722,13 23,13 C27.418278,13 31,16.581722 31,21 C31,25.418278 27.418278,29 23,29 Z M39.5,48 C34.8055796,48 31,44.1944204 31,39.5 C31,34.8055796 34.8055796,31 39.5,31 C44.1944204,31 48,34.8055796 48,39.5 C48,44.1944204 44.1944204,48 39.5,48 Z M43.7805627,35.140455 L37.7025086,41.3215271 L36.0542227,39.4672054 C35.3330976,38.8490982 34.1999011,39.5702233 34.7149904,40.4973841 L36.6723299,43.7939559 C36.9813835,44.2060273 37.7025086,44.6180988 38.4236336,43.7939559 C38.7326872,43.3818844 44.6047056,36.0676158 44.6047056,36.0676158 C45.3258307,35.2434729 44.3986699,34.5223478 43.7805627,35.140455 Z"></path>
                          </g>
                        </svg>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 14 }" :lg="{span: 16}">
                      <h4 class="r-heading">
                        Increase returning orders by 75%
                      </h4>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[24,24]" type="flex" justify="center"
                         align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{span: 8}">
                      <div class="r-icon r-icon__secondary r-icon-stroke">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 48 48">
                          <g id="Artboard-2" fill="none" fill-rule="evenodd">
                            <path id="2" fill="#F50A2B" fill-rule="nonzero"
                                  d="M2.00709457,23.8332582 L2.00709457,18.210022 C2.00709457,17.9338796 2.2309522,17.710022 2.50709457,17.710022 C2.63970282,17.710022 2.76687978,17.7627004 2.86064796,17.8564686 L10.1535412,25.1493618 C10.3488033,25.3446239 10.3488033,25.6612064 10.1535412,25.8564686 C10.059773,25.9502368 9.93259604,26.0029152 9.79998779,26.0029152 L6.10985756,26.0029152 C7.10474613,35.0028161 14.7348927,42.0029152 24,42.0029152 C29.0943178,42.0029152 33.8429799,39.8782324 37.2310542,36.2071293 C37.9801857,35.3954177 39.2454991,35.3446865 40.0572107,36.0938181 C40.8689222,36.8429496 40.9196534,38.108263 40.1705218,38.9199746 C36.0329091,43.4032302 30.222618,46.0029152 24,46.0029152 C12.4349603,46.0029152 2.95417391,37.0791659 2.06770839,25.7417348 C2.02905661,25.6707727 2.00709457,25.5894087 2.00709457,25.5029152 L2.00709457,24.5671501 C2.00237424,24.3796421 2,24.1915559 2,24.0029152 C2,23.9457714 2.00239653,23.8891874 2.00709457,23.8332582 Z"></path>
                            <path id="1" fill="#1B9BD9" fill-rule="nonzero"
                                  d="M45.9929054,24.169657 L45.9929054,29.7928932 C45.9929054,30.0690356 45.7690478,30.2928932 45.4929054,30.2928932 C45.3602972,30.2928932 45.2331202,30.2402148 45.139352,30.1464466 L37.8464588,22.8535534 C37.6511967,22.6582912 37.6511967,22.3417088 37.8464588,22.1464466 C37.940227,22.0526784 38.067404,22 38.2000122,22 L41.8901424,22 C40.8952539,13.0000991 33.2651073,6 24,6 C18.9056822,6 14.1570201,8.1246828 10.7689458,11.7957859 C10.0198143,12.6074975 8.75450093,12.6582286 7.94278934,11.9090971 C7.13107776,11.1599655 7.08034661,9.89465218 7.82947816,9.08294059 C11.9670909,4.599685 17.777382,2 24,2 C35.5650397,2 45.0458261,10.9237493 45.9322916,22.2611803 C45.9709434,22.3321425 45.9929054,22.4135065 45.9929054,22.5 L45.9929054,23.4357651 C45.9976258,23.6232731 46,23.8113593 46,24 C46,24.0571438 45.9976035,24.1137278 45.9929054,24.169657 Z M23.8346693,12.2011803 C23.9289893,12.0230202 24.121072,11.9189267 24.3218311,11.9371776 C24.5968394,11.9621783 24.7995106,12.2053837 24.7745098,12.480392 L24,21 L30.2515834,21 C30.4298761,21 30.6049268,21.0476678 30.7586035,21.1380658 C31.2346366,21.4180853 31.3935371,22.030987 31.1135176,22.5070201 L23.1308418,36.0775689 C23.0327536,36.244319 22.8472726,36.3395205 22.6546068,36.3220055 C22.3795985,36.2970047 22.1769273,36.0537993 22.2019281,35.778791 L23,27 L17.6609049,27 C17.4977988,27 17.3371684,26.9601033 17.1930172,26.8837879 C16.7049146,26.6253807 16.5187098,26.0202149 16.777117,25.5321123 L23.8346693,12.2011803 Z"></path>
                          </g>
                        </svg>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 14 }" :lg="{span: 16}">
                      <h4 class="r-heading">
                        Increase sales volume by at least 36%
                      </h4>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
            <a-card>
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <h2 class="r-heading r-text-secondary">
                        Benefits for merchant
                      </h2>
                      <a-list :data-source="benefits">
                        <a-list-item slot="renderItem" slot-scope="item, index">
                          <a-icon type="check-circle" class="r-text-secondary"/>
                          <div class="r-list-item-text">
                            {{ item }}
                          </div>
                        </a-list-item>
                      </a-list>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-merchant',
  props: {},
  data() {
    return {
      banner: 'art-04.png',
      benefits: [
        'Enable more buying customers and increase recurring orders with Shopple.',
        'Maximize in-store impact with Shopple signage and online training for retail associates.',
        'We’ll ship you an activation kit to promote Shopple in-store.'
      ]
    }
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    onModal(current) {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = current;

      this.$store.dispatch('base/onModal', modal);
    }
  },
};
</script>
