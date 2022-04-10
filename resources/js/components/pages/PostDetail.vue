<template>
    <section id="post-detail">
        <Loader v-if="isLoading && !post" />
        <PostCard :post="post" />
    </section>
</template>

<script>
import Loader from "../microcomponents/Loader.vue";
import PostCard from "../posts/PostCard.vue";
export default {
    name: "PostDetail",
    components: {
        Loader,
        PostCard,
    },
    data() {
        return {
            post: null,
            isLoading: false,
        };
    },
    methods: {
        getPost() {
            this.isLoading = true;
            axios
                .get("http://localhost:8000/api/posts/" + this.$route.params.id)
                .then((res) => {
                    this.post = res.data;
                })
                .catch((err) => {
                    console.log(err);
                })
                .then(() => {
                    this.isLoading = false;
                });
        },
    },
    created() {
        this.getPost();
    },
};
</script>

<style></style>
