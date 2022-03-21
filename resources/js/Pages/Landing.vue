<template>
  <div>
    <body class="overflow-x-hidden antialiased">
      <TopBanner />
      <MainMenu />
      <HeroSection class=""/>
      <FeaturedTenders />
      <ServiceIntro />
    </body>
  </div>
</template>

<script>
import TopBanner from './Components/TopBanner.vue'
import MainMenu from './Components/MainMenu.vue'
import HeroSection from './Components/HeroSection.vue'
import FeaturedTenders from './Components/FeaturedTenders.vue'
import ServiceIntro from './Components/ServiceIntro.vue'

export default {
    name:'Landing',
    props: {
    },
    components: {
        TopBanner,
        MainMenu,
        HeroSection,
        FeaturedTenders,
        ServiceIntro
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
