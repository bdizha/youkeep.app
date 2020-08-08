<template>
    <div class="r-drawer-content">
        <slot/>
    </div>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-drawer-template',
        props: {
            hasFooter: {type: Boolean, required: false, default: false},
            maskClosable: {type: Boolean, required: false, default: true},
            closable: {type: Boolean, required: false, default: true},
            current: {type: String, required: false, default: null},
            cssClass: {type: String, required: false, default: null},
            placement: {type: String, required: false, default: 'left'},
        },
        data() {
            return {};
        },
        created() {
            this.payload();
        },
        computed: mapGetters({
            drawer: 'base/drawer',
        }),
        methods: {
            payload() {
                let $this = this;
            },
            onClose(event) {
                let drawer = {};
                drawer.isVisible = false;
                drawer.placement = 'left';
                drawer.current = null;
            }
        },
    };
</script>