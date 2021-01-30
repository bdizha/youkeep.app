<template>
  <r-page>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Shopple for shoppers
              </h4>
              <h1 class="r-heading">
                <span class="r-text-primary">More flexible,</span><br>
                <span class="r-text-primary">Less intrusive</span>
              </h1>
              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                       style="text-align: left;">
                  <p class="r-text-normal">
                    Earn up to R55/hr or more shopping for Shopple members.
                    Deliver things people love, from the stores they trust.
                  </p>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                  <a-button block @click="onModal" type="primary"
                            class="r-btn-bordered-primary"
                            size="default"
                            html-type="button">
                    Apply now
                  </a-button>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <r-slider :images="images"></r-slider>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[48,48]" type="flex" justify="end" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <h2 class="r-heading r-text-primary">
                  Why partner with Shopple?
                </h2>
                <p class="r-text-normal">
                  Shopple is a membership-based shopping marketplace, enabling delivery of trendy fashion items,
                  hot food and
                  household essentials.
                </p>
                <p class="r-text-normal">
                  Shopple is about more than online shopping. Whether you're looking to pay bills or fund
                  dreams, Shopple will get you there.
                </p>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 48 48">
                              <g fill="none" transform="translate(11 1)">
                                <path fill="#F50A2B"
                                      d="M25.1772152,1.04347826 C24.5189873,0.347826087 23.6962025,0 22.7088608,0 L3.29113924,0 C2.30379747,0 1.48101266,0.347826087 0.82278481,1.04347826 C0.164556962,1.73913043 0,2.60869565 0,3.65217391 L1.48101266,35.2608696 C1.48101266,36.1304348 2.30379747,37 3.12658228,37 L22.8734177,37 C23.6962025,37 24.5189873,36.3043478 24.5189873,35.2608696 L26,3.47826087 C26,2.60869565 25.6708861,1.73913043 25.1772152,1.04347826 Z M6.2721519,32.3043478 C5.3721519,32.3043478 4.7721519,31.7043478 4.7721519,30.8043478 C4.7721519,29.9043478 5.3721519,29.3043478 6.2721519,29.3043478 C7.1721519,29.3043478 7.7721519,29.9043478 7.7721519,30.8043478 C7.7721519,31.7043478 7.1721519,32.3043478 6.2721519,32.3043478 Z M6.2721519,25.3478261 C5.3721519,25.3478261 4.7721519,24.7478261 4.7721519,23.8478261 C4.7721519,22.9478261 5.3721519,22.3478261 6.2721519,22.3478261 C7.1721519,22.3478261 7.7721519,22.9478261 7.7721519,23.8478261 C7.7721519,24.7478261 7.1721519,25.3478261 6.2721519,25.3478261 Z M6.2721519,18.3913043 C5.3721519,18.3913043 4.7721519,17.7913043 4.7721519,16.8913043 C4.7721519,15.9913043 5.3721519,15.3913043 6.2721519,15.3913043 C7.1721519,15.3913043 7.7721519,15.9913043 7.7721519,16.8913043 C7.7721519,17.7913043 7.1721519,18.3913043 6.2721519,18.3913043 Z M12.8544304,32.3043478 C11.9544304,32.3043478 11.3544304,31.7043478 11.3544304,30.8043478 C11.3544304,29.9043478 11.9544304,29.3043478 12.8544304,29.3043478 C13.7544304,29.3043478 14.3544304,29.9043478 14.3544304,30.8043478 C14.3544304,31.7043478 13.7544304,32.3043478 12.8544304,32.3043478 Z M12.8544304,25.3478261 C11.9544304,25.3478261 11.3544304,24.7478261 11.3544304,23.8478261 C11.3544304,22.9478261 11.9544304,22.3478261 12.8544304,22.3478261 C13.7544304,22.3478261 14.3544304,22.9478261 14.3544304,23.8478261 C14.3544304,24.7478261 13.7544304,25.3478261 12.8544304,25.3478261 Z M12.8544304,18.3913043 C11.9544304,18.3913043 11.3544304,17.7913043 11.3544304,16.8913043 C11.3544304,15.9913043 11.9544304,15.3913043 12.8544304,15.3913043 C13.7544304,15.3913043 14.3544304,15.9913043 14.3544304,16.8913043 C14.3544304,17.7913043 13.7544304,18.3913043 12.8544304,18.3913043 Z M20.9367089,31.1666667 C20.9367089,32.2666667 20.3367089,33 19.4367089,33 C18.5367089,33 17.9367089,32.2666667 17.9367089,31.1666667 L17.9367089,23.8333333 C17.9367089,22.7333333 18.5367089,22 19.4367089,22 C20.3367089,22 20.9367089,22.7333333 20.9367089,23.8333333 L20.9367089,31.1666667 Z M19.4367089,18.3913043 C18.5367089,18.3913043 17.9367089,17.7913043 17.9367089,16.8913043 C17.9367089,15.9913043 18.5367089,15.3913043 19.4367089,15.3913043 C20.3367089,15.3913043 20.9367089,15.9913043 20.9367089,16.8913043 C20.9367089,17.7913043 20.3367089,18.3913043 19.4367089,18.3913043 Z M20.8734177,12.173913 L5.12658228,12.173913 C4.02201278,12.173913 3.12658228,11.2784825 3.12658228,10.173913 L3.12658228,5.2173913 C3.12658228,4.17391304 3.78481013,3.47826087 4.7721519,3.47826087 L21.2278481,3.47826087 C22.2151899,3.47826087 22.8734177,4.17391304 22.8734177,5.2173913 L22.8734177,10.173913 C22.8734177,11.2784825 21.9779872,12.173913 20.8734177,12.173913 Z"></path>
                                <path fill="#1B9BD9" class="Helm__fill--blue4"
                                      d="M0 0L0 5.25C0 6.3.68 7 1.7 7L3.4 7 3.4 0 0 0zM6.8 0L6.8 7 15.3 7C16.32 7 17 6.3 17 5.25L17 0 6.8 0z"
                                      transform="translate(5 39)"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading">
                            Work on your schedule
                          </h4>
                          <p class="r-text-normal">
                            Work part time or full time – any time.<br>Set your own hours for a completely
                            flexible schedule.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 48 48">
                              <g fill="none" fill-rule="evenodd">
                                <g transform="translate(8 6)">
                                  <path fill="#F50A2B" class="Helm__fill--blue6"
                                        d="M27.2941176,37 L4.70588235,37 C2.04669829,37 0,34.929317 0,32.375 L0,4.625 C0,2.07068303 2.04669829,0 4.70588235,0 L27.2941176,0 C29.9533017,0 32,2.07068303 32,4.625 L32,32.375 C32,34.929317 29.9533017,37 27.2941176,37 L27.2941176,37 Z"></path>
                                  <path fill="#FFF" fill-rule="nonzero"
                                        d="M21.6575433,15.2533896 C23.6142771,17.7972317 24.4118343,20.7898411 23.1151829,23.7674718 C21.9323789,26.4836635 19.4411579,28.3801844 16.8113182,28.7317182 C16.8088457,28.7320487 16.7856841,26.5056147 16.8113182,26.5008228 C18.735303,26.1411617 20.4293643,24.8842977 21.293611,22.9651843 C22.2839495,20.7660762 21.7293708,18.5878271 20.3358455,16.6476995 L18.8287719,18.1371629 C18.6750596,18.2985686 18.4445988,18.3466944 18.2442876,18.2592172 C18.0439764,18.17174 17.9130055,17.9657748 17.9121252,17.7368575 L17.9121252,12.8259216 C17.9121252,12.3924264 18.2448793,12.0410091 18.6553523,12.0410091 L23.3054762,12.0410091 C23.522236,12.0419388 23.7172628,12.1802555 23.8000942,12.3918015 C23.8829255,12.6033476 23.8373557,12.8467343 23.684522,13.0090679 L21.6575433,15.2533896 Z M8.17585087,27.8046685 C8.02301713,27.9670021 7.97744727,28.2103888 8.06027866,28.4219348 C8.14311005,28.6334809 8.3381368,28.7717976 8.55489666,28.7727273 L13.2050206,28.7727273 C13.6154935,28.7727273 13.9482476,28.42131 13.9482476,27.9878148 L13.9482476,23.0768789 C13.9473673,22.8479616 13.8163964,22.6419964 13.6160852,22.5545192 C13.415774,22.467042 13.1853132,22.5151678 13.0316009,22.6765735 L11.2230818,24.5865273 C9.82955645,22.6463996 9.57642337,20.0476602 10.5667619,17.848552 C11.4259223,15.9407329 13.1404394,14.5994674 15.0490546,14.2308954 C15.0593275,14.2289116 15.0500096,12 15.0490546,12 C13.0316009,12 9.91131664,14.3683706 8.74518987,17.0462646 C7.44853848,20.0238953 7.8666037,23.5209371 9.82333749,26.0647791 L8.17585087,27.8046685 Z"
                                        transform="rotate(-90 15.92 20.386)"></path>
                                </g>
                                <path fill="#1B9BD9"
                                      d="M19,6 L19,5 C19,3.8954305 19.8954305,3 21,3 L27,3 C28.1045695,3 29,3.8954305 29,5 L29,6 C30.1045695,6 31,6.8954305 31,8 L31,9 C31,10.1045695 30.1045695,11 29,11 L19,11 C17.8954305,11 17,10.1045695 17,9 L17,8 C17,6.8954305 17.8954305,6 19,6 Z"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading">
                            Choose your wheels
                          </h4>
                          <p class="r-text-normal">
                            Get tips from other shoppers, attend launch parties, and get a free Shopple
                            membership.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 10 }" :lg="{ span: 8 }">
                          <div class="r-icon r-icon__primary r-icon-stroke">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 48 48">
                              <g fill="none" transform="translate(5 2)">
                                <path fill="#1B9BD9" class="Helm__fill--blue4"
                                      d="M14.0690476,10.078125 L16.8738095,7.30104167 L16.8738095,16.4833333 C16.8738095,17.6479167 17.8238095,18.5885417 19,18.5885417 C20.1761905,18.5885417 21.1261905,17.6479167 21.1261905,16.4833333 L21.1261905,7.34583333 L23.9309524,10.1229167 C24.3380952,10.5260417 24.8809524,10.75 25.4238095,10.75 C25.9666667,10.75 26.5095238,10.5260417 26.9166667,10.1229167 C27.7309524,9.31666667 27.7309524,7.97291667 26.9166667,7.16666667 L20.4928571,0.80625 C19.7238095,0.0447916667 18.3214286,0.0447916667 17.5071429,0.80625 L11.0833333,7.16666667 C10.2690476,7.97291667 10.2690476,9.31666667 11.0833333,10.1229167 C11.9428571,10.9291667 13.2547619,10.9291667 14.0690476,10.078125 Z"></path>
                                <path fill="#F50A2B"
                                      d="M36.7333333,22.84375 C36.1452381,22.2166667 29.5404762,15.2291667 29.5404762,15.2291667 C28.7261905,14.378125 27.4142857,14.3333333 26.5547619,15.1395833 C25.6952381,15.9458333 25.65,17.2447917 26.4642857,18.0958333 L30.3095238,22.1270833 L7.69047619,22.1270833 L11.5357143,18.0958333 C12.35,17.2447917 12.3047619,15.9458333 11.4452381,15.1395833 C10.5857143,14.378125 9.27380952,14.378125 8.45952381,15.2291667 C8.45952381,15.2291667 1.76428571,22.30625 1.26666667,22.84375 C0.769047619,23.3364583 0.226190476,24.3666667 0.497619048,25.3072917 L4.75,40.8947917 C5.06666667,41.9697917 6.06190476,42.73125 7.19285714,42.73125 L30.8071429,42.73125 C31.9380952,42.73125 32.9333333,41.9697917 33.25,40.8947917 L37.502381,25.3072917 C37.7738095,24.3666667 37.3214286,23.4708333 36.7333333,22.84375 Z M13.0285714,36.1020833 C13.0285714,36.8635417 12.3952381,37.490625 11.6261905,37.490625 C10.8571429,37.490625 10.2238095,36.8635417 10.2238095,36.1020833 L10.2238095,28.8010417 C10.2238095,28.0395833 10.8571429,27.4125 11.6261905,27.4125 C12.3952381,27.4125 13.0285714,28.0395833 13.0285714,28.8010417 L13.0285714,36.1020833 Z M20.402381,36.1020833 C20.402381,36.8635417 19.7690476,37.490625 19,37.490625 C18.2309524,37.490625 17.597619,36.8635417 17.597619,36.1020833 L17.597619,28.8010417 C17.597619,28.0395833 18.2309524,27.4125 19,27.4125 C19.7690476,27.4125 20.402381,28.0395833 20.402381,28.8010417 L20.402381,36.1020833 Z M27.7761905,36.1020833 C27.7761905,36.8635417 27.1428571,37.490625 26.3738095,37.490625 C25.6047619,37.490625 24.9714286,36.8635417 24.9714286,36.1020833 L24.9714286,28.8010417 C24.9714286,28.0395833 25.6047619,27.4125 26.3738095,27.4125 C27.1428571,27.4125 27.7761905,28.0395833 27.7761905,28.8010417 L27.7761905,36.1020833 Z"></path>
                              </g>
                            </svg>
                          </div>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 14 }" :lg="{ span: 14 }"
                               style="text-align: left;">
                          <h4 class="r-heading">
                            Earn money as you shop
                          </h4>
                          <p class="r-text-normal">
                            Experienced shoppers make an average of R50/hr.<br>
                            * Paychecks are delivered every week.
                          </p>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-card>
                  <a-card-meta>
                    <template slot="description">
                      <a-row :gutter="[24,24]" type="flex" justify="start">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                          <h2 class="r-heading r-text-primary">
                            Requirements:
                          </h2>
                          <a-list :data-source="requirements">
                            <a-list-item slot="renderItem" slot-scope="item, index">
                              <a-icon type="check-circle" class="r-text-primary"/>
                              <div class="r-list-item-text">
                                {{ item }}
                              </div>
                            </a-list-item>
                          </a-list>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <a-button block @click="onModal"
                                    size="default"
                                    class="r-btn-primary"
                                    type="primary">
                            Apply Now
                          </a-button>
                        </a-col>
                      </a-row>
                    </template>
                  </a-card-meta>
                </a-card>
              </div>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card>
              <div slot="cover" class="r-card-cover-primary r-p-24">
                <a-row :gutter="[24,24]" class="r-text-center" type="flex" justify="center">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <h2 class="r-heading r-text-primary">
                      Want to get paid to shop with Shopple?
                    </h2>
                    <p class="r-text-normal">
                      Apply to be a Shopple Shopper today and start achieving your goals.
                    </p>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                         :lg="{ span: 12 }">
                    <a-button block @click="onModal"
                              size="default"
                              class="r-btn-bordered-primary"
                              type="primary">
                      Become a shopper
                    </a-button>
                  </a-col>
                </a-row>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
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
