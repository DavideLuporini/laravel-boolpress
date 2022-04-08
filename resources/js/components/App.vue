<template>
    <div class="container">
        <Header />
        <router-view> </router-view>
    </div>
</template>

<script>
import Header from "./Header.vue";
import PostList from "./posts/PostList";
import Loader from "./microcomponents/Loader";

export default {
    name: "App",
    components: {
        Header,
        PostList,
        Loader,
    },
};
</script>
