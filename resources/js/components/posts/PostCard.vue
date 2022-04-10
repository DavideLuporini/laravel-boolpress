<template>
    <section>
        <div class="card mb-3 mt-2">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <div
                            class="d-flex justify-content-end align-items-center"
                        >
                            <router-link
                                v-if="!hideLink"
                                class="btn btn-sm btn-primary text-white p-2"
                                role="button"
                                :to="{
                                    name: 'post-detail',
                                    params: { id: post.id },
                                }"
                            >
                                more
                            </router-link>
                        </div>
                        <h5 class="card-title">{{ post.title }}</h5>
                        <p class="card-text">
                            {{ post.content }}
                        </p>
                        <p class="card-text">
                            <small class="text-muted"
                                >{{ post.author }} - {{ dateTime(post) }}</small
                            >
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="card-footer d-flex justify-content-between align-items-center"
                    >
                        <span
                            :class="`badge badge-pill badge-${post.category.color}`"
                        >
                            {{ post.category.label }}
                        </span>
                        <div>
                            <span
                                v-for="tag in post.tags"
                                :key="tag.id"
                                class="badge mr-2"
                                :style="`background-color:${tag.color}`"
                            >
                                {{ tag.label }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "PostCard",
    props: ["post"],
    data() {
        return {};
    },
    methods: {
        dateTime(post) {
            const postDate = new Date(post.updated_at);
            let days = postDate.getDate();
            let months = postDate.getMonth() + 1;
            const year = postDate.getFullYear();
            if (days < 10) days = "0" + days;
            if (months < 10) months = "0" + months;
            return `${days}/${months}/${year}`;
        },
    },
};
</script>

<style></style>
