<template>
    <section>
        <h1>Contact us</h1>
        <div class="form-group">
            <label for="email">Email address</label>
            <input
                type="email"
                class="form-control"
                id="email"
                v-model="form.email"
            />
            <small id="emailHelp" class="form-text text-muted"
                >We'll never share your email with anyone else.</small
            >
        </div>
        <div class="form-group">
            <label for="message">message</label>
            <textarea
                class="form-control"
                id="message"
                rows="20"
                v-model="form.message"
            ></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-primary" @click="sendForm()">
                Send
            </button>
        </div>
    </section>
</template>

<script>
export default {
    name: "ContactPage",
    data() {
        return {
            form: {
                email: "",
                message: "",
            },
        };
    },
    methods: {
        sendForm() {
            axios.post("http://localhost::8000/api/messages", this.form).then(res) => {this.form.email = ''; this.form.message = '';}).catch((err) => {

            }).then(() => {

            });
        },

    };
};
</script>

<style></style>
