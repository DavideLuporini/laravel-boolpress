<template>
  <div class="container">
    <Header />
    <PostList />
  </div>
</template>

<script>
import Header from "./Header.vue";
import PostList from "./posts/PostList";

export default {
  name: "App",
  components: {
    Header,
    PostList,
  },
};
</script>
