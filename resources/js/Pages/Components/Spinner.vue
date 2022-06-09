<template>
    <div
        id="popup-modal"
        tabindex="-1"
        class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full"
    >
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div
                class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity"
            ></div>
            <div
                class="relative bg-transparent rounded-lg shadow dark:bg-gray-700"
            >
                <div class="flex justify-center items-center">
                    <div class="">
                        <breeding-rhombus-spinner
                            :animation-duration="2000"
                            :size="65"
                            color="#ffffff"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { AtomSpinner } from "epic-spinners";
import { BreedingRhombusSpinner } from "epic-spinners";

export default {
    name: "Spinner",
    components: {
        BreedingRhombusSpinner,
        AtomSpinner
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
