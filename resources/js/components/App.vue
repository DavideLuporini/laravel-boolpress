<template>
  <div class="container">
    <Header />
    <PostList />
  </div>
</template>

<script>
import Header from "./Header.vue";
import PostList from "./posts/PostList.vue";

export default {
  name: "App",
  Components: {
    Header,
    PostList,
  },
};
</script>
