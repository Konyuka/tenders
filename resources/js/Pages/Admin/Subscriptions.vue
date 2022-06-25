<template>
    <div class="px-5">
        <Subscriptions />
    </div>
</template>

<script>
import Layout from "../../Layouts/DashboardLayout";
import Subscriptions from "../Components/Subscriptions.vue";

export default {
    name: "AdminSubscriptions",
    layout: Layout,
    components: {
        Subscriptions
    },
    data() {
        return {};
    },
    watch: {},
    computed: {},
    methods: {}
};
</script>

<style scoped></style>
