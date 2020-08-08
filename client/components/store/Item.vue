<template>
    <div class="r-store-item-line">
        <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
            <a-col :xs="{span: 16}" :sm="{span: 18}" :md="{span: 18}" :lg="{span: 18}">
                <div class="r-store-item">
                    <a-avatar class="r-lazy" shape="circle" :size="75"
                              :data-src="'/storage/store/' + store.photo"
                              src="/assets/icon_default.png"
                              src-placeholder="~/assets/icon_default.png"/>
                    <div class="r-text-slider">
                        {{ store.name }}
                    </div>
                </div>
            </a-col>
            <a-col :xs="{span: 8}" :sm="{span: 6}" :md="{span: 6}" :lg="{span: 6}">
                <div class="r-store-slogan">
                    <a-avatar class="r-avatar-primary" shape="square" icon="star"/>
                    <a-avatar class="r-avatar-secondary" shape="square" icon="shop"/>
                </div>
            </a-col>
        </a-row>
    </div>
</template>
<script>
    export default {
        components: {},
        props: {
            store: {type: Object, required: false},
            hasActions: {type: Boolean, required: false, default: true},
            isShow: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                hasSpin: true,
            }
        },
        created() {
            this.payload();
        },
        methods: {
            payload() {
                let $this = this;
            },
            onSearch() {
                this.isSearching = true;
            },
        }
    };
</script>
