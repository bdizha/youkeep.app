<template>
    <r-drawer-template placement="left"
                       current="store-left">
        <r-store-menu></r-store-menu>
    </r-drawer-template>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: 'r-store-left',
        props: {},
        data() {
            return {
                style: {}
            };
        },
        computed: mapGetters({}),
        created() {
        },
        methods: {
            onCollapse() {

            },
            onBreakpoint() {

            }
        },
    };
</script>