<template>
  <body class="lg:flex items-center justify-center bg-gray-50 lg:px-0 px-4">
        <div aria-label="group of cards" tabindex="0" class="m-4 focus:outline-none w-full">

            <div class="lg:flex items-center justify-center w-full">
                <div tabindex="0" aria-label="card 1" class="shadow-2xl focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 rounded">
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">Help in Registartion</p>
                                <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36 Min Ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    </div>
                </div>

            </div>

        </div>
    </body>
</template>

<script>
export default {
  name: "component",
  data() {
    return {
        show: null
    };
  },
  methods: {
  },
  mounted() {},
};
</script>

<style>
.checkbox:checked + .check-icon {
    display: flex;
}
</style>
