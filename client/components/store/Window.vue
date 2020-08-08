<template>
    <a-card hoverable :style="'background-image: url(/storage/store/' + store.photo_cover + ');'"
            v-if="store" class="r-store r-store-cover">
        <r-store-photo :store="store"></r-store-photo>
        <a-card-meta>
            <template slot="description">
                <div class="r-store-info">
                    <div class="r-store-info-title">{{ store.name }}</div>
                    <div v-if="false" class="r-store-slogan">{{ store.description }}</div>
                </div>
                <div class="r-store-slogan">
                    <a-avatar shape="square" icon="star"/>
                    <a-avatar shape="square" icon="shop"/>
                </div>
                <div class="r-store-tag" v-if="false">
                    <a-button class="r-btn-orange" size="small">NEW</a-button>
                </div>
            </template>
        </a-card-meta>
        <r-spinner :is-absolute="true" v-if="hasSpin"></r-spinner>
    </a-card>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-store-window',
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
        computed: mapGetters({}),
        created() {
            this.payload();
        },
        methods: {
            payload() {
                let $this = this;
                $this.hasSpin = false;
            },
            onSearch() {
                this.isSearching = true;
            },
        }
    };
</script>