<template>

  <div class="heading">
    <MainHeading text="Sua oportunidade perto de você"/>
    <p class="heading__secondary">
      Com o Sanjobs encontrar emprego se torna uma tarefa muito mais fácil!
    </p>
    <button class="heading__action" @click="this.$router.push('/jobs')">
      Ver oportunidades
    </button>
  </div>

</template>

<script>
import MainHeading from "@/components/typography/MainHeading";


export default {
  name: "IndexPage",

  components: {
    MainHeading,
  },
}
</script>

<style scoped>

</style>