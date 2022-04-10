<template>
    <div>
        <Header />
        <div class="container">
            <router-view> </router-view>
        </div>
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
