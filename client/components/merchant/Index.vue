<template>
    <r-page>
        <a-row type="flex" justify="center">
            <a-col class="gutter-row" :span="24">
                <div class="r-bg-primary-light">
                    <a-row type="flex" justify="center">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
                            <a-row type="flex" justify="start">
                                <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ offset: 3, span: 9 }"
                                       :lg="{ offset: 3, span: 9 }">
                                    <a-row type="flex" justify="start">
                                        <a-col class="r-pv-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                                               :md="{ span: 24 }"
                                               :lg="{ span: 24 }"
                                               style="text-align: left;">
                                            <h4 class="r-heading-light r-text-uppercase">
                                                For merchants
                                            </h4>
                                            <h1 class="r-heading r-text-uppercase">
                                                <span class="r-text-black">Enable more buying customers and increase recurring orders with Owami.</span>
                                            </h1>
                                            <p class="r-text-normal">
                                                Maximize in-store impact with Owami signage and online training for
                                                retail associates.
                                            </p>
                                            <p class="r-text-normal">
                                                We’ll ship you an activation kit to promote Owami in-store.
                                            </p>
                                        </a-col>
                                    </a-row>
                                    <a-row type="flex" justify="start">
                                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
                                               :lg="{ span: 18 }">
                                            <a-row :gutter="[24,24]" type="flex" justify="start">
                                                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                                                       :md="{ span: 12 }"
                                                       :lg="{ span: 12 }">
                                                    <a-button @click="onApply" class="r-btn-primary"
                                                              block
                                                              type="secondary"
                                                              size='large'>
                                                        Apply now
                                                    </a-button>
                                                </a-col>
                                                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                                                       :md="{ span: 12 }"
                                                       :lg="{ span: 12 }">
                                                    <a-button @click="onStoreTray" class="r-btn-bordered-black"
                                                              block
                                                              type="secondary"
                                                              size='large'>
                                                        Shop directory
                                                    </a-button>
                                                </a-col>
                                            </a-row>
                                        </a-col>
                                    </a-row>
                                    <r-space size="24"></r-space>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                                    <div class="r-page-header-photo">
                                        <div class="r-page-primary"
                                             style="background-image: url('/images/merchant-02.jpg')">
                                        </div>
                                    </div>
                                </a-col>
                            </a-row>
                        </a-col>
                    </a-row>
                </div>
            </a-col>
        </a-row>
        <a-row class="r-mv-48" type="flex">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
                <a-row type="flex" justify="start"
                       class="r-radius-right-white r-text-center">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18, offset:6 }"
                           :lg="{span: 18, offset:6}" class="r-p-48">
                        <a-row class="r-mv-24" type="flex" justify="start">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                                   style="text-align: left;">
                                <h4 class="r-heading-light">
                                    Customers want to buy more of your products. And now they've a more
                                    flexible
                                    shopping option.
                                </h4>
                            </a-col>
                        </a-row>
                        <a-row :gutter="[48,48]" type="flex" justify="start"
                               class="r-radius-right-white">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                                   :lg="{span: 8}">
                                <div class="r-icon r-icon-primary">
                                    <a-icon type="line-chart"/>
                                </div>
                                <h4 class="r-heading-light r-text-uppercase">
                                    Increase your conversion rate by 24%
                                </h4>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                                   :lg="{span: 8}">
                                <div class="r-icon r-icon-primary">
                                    <a-icon type="pie-chart"/>
                                </div>
                                <h4 class="r-heading-light r-text-uppercase">
                                    Increase returning orders by 75%
                                </h4>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                                   :lg="{span: 8}">
                                <div class="r-icon r-icon-primary">
                                    <a-icon type="dot-chart"/>
                                </div>
                                <h4 class="r-heading-light r-text-uppercase">
                                    Increase sales volume by at least 36%
                                </h4>
                            </a-col>
                        </a-row>
                    </a-col>
                </a-row>
            </a-col>
        </a-row>
        <r-steps :has-wave="false" :has-title="true" heading="Kpay shopping experience"></r-steps>
        <a-row class="r-text-center" type="flex" justify="center" :gutter="24">
            <a-col class="gutter-row r-p-48" :xs="{ span: 24 }" :md="{ span: 24 }"
                   :lg="{ span: 24 }">
                <a-row type="flex" justify="center">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }" class="r-pv-48">
                        <h2 class="r-heading r-text-uppercase">
                            Become a verified merchant today
                        </h2>
                        <p class="r-text-normal">
                            Join the Owami Merchant Program and start promoting Owami in-store today and watch your
                            sales run wild!
                        </p>
                    </a-col>
                </a-row>
                <a-row type="flex" justify="center" align="middle">
                    <a-col class="r-pb-48" :xs="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-button @click="onApply" size="large" type="primary">
                            Become a merchant
                        </a-button>
                    </a-col>
                </a-row>
            </a-col>
        </a-row>
    </r-page>
</template>
<script>
    export default {
      name: 'r-merchant',
        props: {},
        data() {
            return {
                modal: {
                    current: null,
                    message: null,
                },
            }
        },
        mounted() {
            this.modal = this.$store.state.modal;
        },
        methods: {
            onApply() {
                this.modal.isVisible = true;
                this.modal.current = 'merchant';
                this.$store.dispatch('app/onModal', modal);
            },
            onStoreTray() {
                this.$store.dispatch('app/onStoreTray', true);
            },
        },
    };
</script>
