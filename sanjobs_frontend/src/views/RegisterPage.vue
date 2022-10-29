<template>
  <div class="center">
    <div class="cadastrar">
      <MainHeading text="Cadastre-se"/>
      <InputMain label="Nome" type="text"
                 placeholder="Digite seu nome" error="Nome inválido"
                 model="name" @update="(data) => this.setName(data)"/>

      <InputMain label="Sobrenome" type="text"
                 placeholder="Digite seu sobrenome" error="Sobrenome inválido"
                 model="surname" @update="(data) => this.setSurnmame(data)"/>

      <InputMain label="Email" type="email"
                 placeholder="Digite seu email" error="Email inválido"
                 model="email" @update="(data) => this.setEmail(data)"/>

      <InputMain label="Senha" type="password"
                 placeholder="Digite sua senha" error="Senha inválida"
                 model="password" @update="(data) => this.setPassword(data)"/>

      <InputMain label="Confirme sua senha" type="password"
                 placeholder="Confirme sua senha" error="Senha inválida"
                 model="password_confirmation"/>

      <textarea placeholder="Descrição" v-model="overview">
      </textarea>
      <button @click="registerUser">Cadastrar</button>
    </div>
  </div>
</template>

<script>
import MainHeading from "@/components/typography/MainHeading";
import InputMain from '@/components/form/InputMain.vue';

export default {
  name: "RegisterPage",
  components: {
    MainHeading,
    InputMain
  },
  methods: {
    setName: function (name) {
      this.name = name;
    },

    setSurnmame: function (surnmame) {
      this.surnmame = surnmame;
    },

    setEmail: function (email) {
      this.email = email;
    },

    setPassword: function (password) {
      this.password = password;
    },

    registerUser() {
      fetch('http://localhost:8000/api/user', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          name: this.name,
          surname: this.surnmame,
          email: this.email,
          password: this.password,
          overview: this.overview
        })
      });
    }
  }
}
</script>

<style scoped>
.cadastrar {
  width: 320px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>