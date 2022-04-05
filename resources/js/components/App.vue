<template>
  <div class="container">
    <Header />

    <Postlist />
  </div>
</template>

<script>
import Header from "./Header.vue";
import Postlist from "./posts/Postlist.vue";
name: "App";
Components: {
  Header,
  Postlist,
}
</script>
