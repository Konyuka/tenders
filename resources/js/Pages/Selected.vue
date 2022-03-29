<template>
  <div class="h-screen">
    <body class="overflow-x-hidden antialiased">
      <TopBanner />
      <MainMenu />

      <MainFooter/>
    </body>
  </div>
</template>

<script>
import TopBanner from './Components/TopBanner.vue'
import MainMenu from './Components/MainMenu.vue'
import MainFooter from './Components/MainFooter.vue'

export default {
    name:'Landing',
    props: {
    },
    components: {
        TopBanner,
        MainMenu,
        MainFooter
    },
    watch: {
    },
    mounted () {
    },
    computed: {
    },
    data () {
        return {
            modal: false,
        }
    },
    methods:{
        clearFilters(){

        },
        loadFilters(){

        }
    }
}
</script>
