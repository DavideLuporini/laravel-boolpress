<template>
    <div class="container">
        <Loader v-if="isLoading" />
        <li v-for="post in posts" :key="post.id">{{ post.title }}</li>
    </div>
</template>

<script>
import Loader from "../microcomponents/Loader";
export default {
    name: "PostList",
    components: {
        Loader,
    },
    data() {
        return {
            posts: [],
            isLoading: false,
        };
    },
    methods: {
        getPosts() {
            axios
                .get("http://localhost:8000/api/posts")
                .then((res) => {
                    this.isLoading = true;
                    this.posts = res.data;
                })
                .catch((err) => {
                    console.error(err);
                })
                .then(() => {
                    this.isLoading = false;
                    console.log("terminated call");
                });
        },
    },
    mounted() {
        this.getPosts();
    },
};
</script>
