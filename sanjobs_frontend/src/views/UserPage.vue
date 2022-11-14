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
      const data = await res.json();
      console.log(data);
    }
  },
  mounted() {
    this.fetchUser();
  }

}
</script>

<style scoped>

</style>