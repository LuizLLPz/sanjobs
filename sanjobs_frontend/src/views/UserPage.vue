<template>
  <div>
    <MainCard title="Description">
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
    fetchUser: async function() {
      const res = await fetch('http://localhost:8000/api/session', {
        method: 'GET',
        credentials: 'include'
      });
      const {data} = await res.json();
      if (res.status === 200) {
        this.user = data;
      }
      console.log(this.user)
    }
  },
  mounted() {
    this.fetchUser();
  }

}
</script>

<style scoped>

</style>