<template>
    <div :class="'r-testimonials'">
        <a-row type="flex" justify="center" :gutter="16">
            <a-col class="gutter-row" :xs="{ span: 24 }" :md="{ span: 18 }" :lg="{ span: 12 }">
                <h2 class="r-heading r-text-primary  text-center">
                    What our customers say
                </h2>
                <vue-glide v-if="testimonials.length > 0" :options="options">
                    <vue-glide-slide v-for="(testimonial, index) in testimonials" :key="index">
                        <div class="r-testimonial">
                            <img class="r-testimonial-photo"
                                 :src="'/images/kshop/testimonials/0' + index + '.jpg'"
                                 style="opacity: 1;">
                            <h4 class="r-heading">
                                {{ testimonial.content }}
                            </h4>
                            <p class="r-text-light">
                                {{ testimonial.author }}
                            </p>
                        </div>
                    </vue-glide-slide>
                    <template slot="control">
                        <button data-glide-dir="<">
                            <a-icon type="caret-left"/>
                        </button>
                        <button data-glide-dir=">">
                            <a-icon type="caret-right"/>
                        </button>
                    </template>
                </vue-glide>
            </a-col>
        </a-row>
    </div>
</template>
<script>
    import {Glide, GlideSlide} from 'vue-glide-js'

    export default {
        components: {
            [Glide.name]: Glide,
            [GlideSlide.name]: GlideSlide
        },
        props: {
            testimonials: {type: Array, required: true}
        },
        data() {
            return {
                options: {
                    type: 'carousel',
                    perView: 1,
                    breakpoints: {
                        1260: {
                            perView: 1
                        },
                        750: {
                            perView: 1
                        },
                        600: {
                            perView: 1
                        }
                    },
                    gap: 24
                },
            }
        },
        mounted() {
            this.payload();
        },
        methods: {
            payload() {
            }
        }
    };
</script>
