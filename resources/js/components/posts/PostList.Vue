<template>
    <section id="post-list" class="my-3">
        <h2>Posts</h2>
               <router-link
                        :to="{ name: 'contacts', }"
                    >
                        contacts
                    </router-link>
        <Loader v-if="isLoading" />
 
        
        <div v-else>
            <div
                class="alert alert-danger d-flex justify-content-between"
                role="alert"
                v-if="hasError"
            >
                error
                <span role="button" @click="hasError = !hasError">&times;</span>
            </div>
            <ul v-if="posts.length">
                <li v-for="post in posts" :key="post.id">
                    {{ post.title }}
                    <router-link
                        :to="{ name: 'post-detail', params: { id: post.id } }"
                    >
                        explore
                    </router-link>
                </li>
            </ul>
        </div>
    </section>
</template>

<script>
import Loader from "../microcomponents/Loader.vue";
export default {
    name: "PostsList",
    props: ["post"],
    components: {
        Loader,
    },
    data() {
        return {
            posts: [],
            isLoading: false,
            hasError: false,
        };
    },
    methods: {
        getPosts() {
            this.isLoading = true;
            axios
                .get("http://localhost:8000/api/posts")
                .then((res) => {
                    this.posts = res.data;
                })
                .catch((err) => {
                    console.error(err);
                    this.hasError = true;
                })
                .then(() => {
                    this.isLoading = false;
                    console.log("chiamata terminata");
                });
        },
    },
    mounted() {
        this.getPosts();
    },
};
</script>

<style></style>
