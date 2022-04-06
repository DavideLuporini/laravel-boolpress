<template>
    <div class="container">
        PostList Test
        <li v-for="post in posts" :key="post.id">{{ post.title }}</li>
    </div>
</template>

<script>
export default {
    name: "PostList",
    data() {
        return {
            posts: [],
        };
    },
    methods: {
        getPosts() {
            axios
                .get("http://localhost:8000/api/posts")
                .then((res) => {
                    this.posts = res.data;
                })
                .catch((err) => {
                    console.error(err);
                })
                .then(console.log("terminated call"));
        },
    },
    mounted() {
        this.getPosts();
    },
};
</script>
