<template>
    <div v-show="message">
        <p class="text-sm text-white">
            {{ message }}
        </p>
    </div>
</template>

<script>
export default {
    props: ["message"]
};
</script>
