<template>
    <r-page>
        <a-row type="flex" justify="center" align="middle">
            <a-col :span="24">
                <a-row type="flex" justify="space-around" align="middle">
                    <a-col :lg="{span: 9 , offset: 3}"  class="r-page-padding">
                        <h1 class="r-heading">
                            <span class="r-text-primary">Shop</span>
                            <span class="">Rules</span>
                        </h1>
                    </a-col>
                     <a-col :xs="{span: 24}" :lg="{span: 12}" class="r-padding-lg-48" style="position: relative;">
                        <div class="r-page-header-photo r-page-art-primary">
                            <img alt="Couple orders online" src="/images/kshop/shop-rules-02.png">
                        </div>
                    </a-col>
                </a-row>
            </a-col>
        </a-row>
        <a-row class="r-margin-vertical-48">
            <a-col :lg="{span: 12}">
                <a-row class="r-radius-right-white" type="flex"
                       justify="space-around" align="middle">
                    <a-col :lg="{span: 18 , offset: 6}"  class="r-page-padding">
                        <h2 class="r-heading r-text-primary">
                            Who we are
                        </h2>
                        <p class="r-text-normal">
                            Nice to know, we are Kshop, an online supermakert service. We are the
                            only store in South Africa that is only online, which means that our customers are at the
                            center of our business, in fact, we focus on our customers and how best we can serve them.

                        </p>
                        <p class="r-text-normal">
                            We offer an advanced online shopping site that collects and supplies through private
                            shops and chains across the country, leveraging the short-term advantage. Instead of
                            distant logistics centers, every customer receives a super fast delivery from a shop
                            close to home that requires a short drive, while maintaining the highest level of service
                            and quality.
                        </p>
                        <p class="r-text-normal">
                            Our mission is to provide our customers with the best service on the market.
                            Our professional shoppers are waiting to choose you super fresh and high quality
                            products, our couriers are waiting to get you the shipment super fast and our customer
                            service team is waiting to give you super personal and courteous service across many
                            platforms. You just have to make a reservation at a super convenient and advanced interface,
                            enjoy our super-worthy offers and your shopping experience with us.
                        </p>
                    </a-col>
                </a-row>
            </a-col>
        </a-row>
        <a-row type="flex" justify="space-around" align="middle" class="r-margin-vertical-48">
            <a-col :lg="{span: 12}"class="r-radius-right-white">
                <a-row type="flex" justify="space-around" align="middle">
                    <a-col :lg="{span: 18 , offset: 6}"  class="r-page-padding">
                        <h2 class="r-heading r-text-primary">
                            We believe in our customers
                        </h2>
                        <p class="r-text-normal">
                            online shopping is part of it, but there are more fun things to do. Yet we are often in
                            the
                            shop and we do more and more ourselves. We fill the cart, select the most
                            beautiful
                            vegetables with the best date. We scan ourselves, weigh fruit, carry bags and wait in
                            line for
                            the
                            cash register.
                        </p>
                        <p class="r-text-normal">
                            Kshop thinks it can be done differently: faster, easier and cheaper. The idea is
                            simple. We
                            arrange
                            the shopping, so that you have more time for fun things. At Kshop you can order all
                            shopping
                            within a few minutes. So toilet paper, fresh, chips and ice cream, but also organic
                            eggs, tender
                            steak and fresh vegetables.</p>
                        <h2 class="r-heading r-text-primary">
                            It's always shopping time!
                        </h2>
                        <p class="r-text-normal">
                            In today's reality we have so many things to do, so many options on how to take the time and
                            so little time to do it ... That's why we're happy to embrace any new service or tool that
                            can help us be more efficient, more free, less troubled And less planned. Our goal is to
                            help you make better use of your time, no matter if you want to be planned or stay
                            spontaneous, to do what you don't have to do for yourself so you can make time for the
                            really important thing
                        </p>
                    </a-col>
                </a-row>
            </a-col>
            <a-col :lg="{span: 12}">
                <div class="r-page-photo-bg" style="padding-bottom: calc(100% / (16 / 9));">
                    <div class="r-page-header-abs"
                         style="background: url(/images/steps/red/step-02.svg) no-repeat;">
                    </div>
                </div>
            </a-col>
        </a-row>
    </r-page>
</template>
<script>
    export default {
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
        methods: {},
    };
</script>
