<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap -mb-1">
            <template v-for="(link, p) in links">
                <div :key="p + '_text'" v-if="link.url === null" class="...">
                    ...
                </div>
                <inertia-link :key="p + '_link'" v-else class="...">
                    ...
                </inertia-link>
            </template>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        links: Array
    },
}
</script>