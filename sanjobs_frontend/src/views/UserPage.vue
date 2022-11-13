<template>
  <div>
    <MainCard title="Description">
      <p>
        {{ user.description }}}
      </p>
    </MainCard>
  </div>
</template>

<script>
import MainCard from "@/components/layout/MainCard";

export default {
  name: "UserPage",
  components: {
    MainCard
  },
  methods: {
    fetchUser: function() {

    }
  },
  mount: function (){
    this.fetchUser();
  }

}
</script>

<style scoped>

</style>