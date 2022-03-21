<template>
  <div>
    <body class="overflow-x-hidden antialiased">
      <TopBanner />
      <MainMenu />
      <HeroSection />
    </body>
  </div>
</template>

<script>
import TopBanner from './Components/TopBanner.vue'
import MainMenu from './Components/MainMenu.vue'
import HeroSection from './Components/HeroSection.vue'

export default {
    name:'Landing',
    props: {
    },
    components: {
        TopBanner,
        MainMenu,
        HeroSection
    },
    watch: {
    },
    mounted () {
    },
    computed: {
    },
    data () {
        return {
            // showBanner: true,
        }
    },
    methods:{
    }
}
</script>
