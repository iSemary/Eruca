<template>
    <div>
        <h1>Contact</h1>
        <h5>Get in touch with me</h5>
        <div class="row">
            <form
                method="POST"
                @submit.prevent="onSubmit"
                class="contact-form col-6"
            >
                <div class="row">
                    <div class="form-group col-xl-6 col-sm-12">
                        <label for="first_name"
                            ><fa icon="user"></fa> First Name</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="first_name"
                            id="first_name"
                            v-model="first_name"
                            placeholder="Write your first name"
                            required
                        />
                    </div>
                    <div class="form-group col-xl-6 col-sm-12">
                        <label for="last_name"
                            ><fa :icon="['far', 'user']"></fa> Last Name</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="last_name"
                            id="last_name"
                            v-model="last_name"
                            placeholder="Write your last name"
                            required
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email"><fa icon="at"></fa> Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        v-model="email"
                        placeholder="Write your email"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="subject"
                        ><fa icon="file-signature"></fa> Subject</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        name="subject"
                        id="subject"
                        v-model="subject"
                        placeholder="Write your subject"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="message"
                        ><fa icon="inbox"></fa> Your Message</label
                    >
                    <textarea
                        class="form-control"
                        name="message"
                        id="message"
                        v-model="message"
                        placeholder="Write your message"
                        required
                    ></textarea>
                </div>
                <div class="form-group mt-2 d-block">
                    <button
                        type="submit"
                        class="btn btn-primary w-100 text-light"
                    >
                        <fa icon="paper-plane" /> Send
                    </button>
                </div>
            </form>
            <div class="col-6 mt-2">
                <div class="letter-container" ref="LetterMag">
                    <img src="/assets/contact/letter.png" class="letter-img" />
                    <div class="letter-details">
                        <h6>{{ first_name }}</h6>
                        <h6>{{ last_name }}</h6>
                        <h6>{{ email }}</h6>
                        <h6>{{ subject }}</h6>
                        <p>{{ message }}</p>
                    </div>
                </div>
                <button
                    type="button"
                    @click="saveLetter()"
                    class="btn btn-success d-block w-100 text-light"
                >
                <fa icon="envelope-open-text" />
                    Save Letter
                </button>
            </div>
        </div>
    </div>
</template>
<script>
import html2canvas from "html2canvas";

export default {
    data() {
        return {
            first_name: "",
            last_name: "",
            email: "",
            subject: "",
            message: "",
        };
    },
    methods: {
        async saveLetter() {
            const el = this.$refs.LetterMag;

            const options = {
                type: "dataURL",
            };
            const printCanvas = await html2canvas(el, options);

            const link = document.createElement("a");
            link.setAttribute("download", "Saved-Letter.png");
            link.setAttribute(
                "href",
                printCanvas
                    .toDataURL("image/png")
                    .replace("image/png", "image/octet-stream")
            );
            link.click();
        },
        onSubmit: function () {
            var token = document.head.querySelector('meta[name="csrf-token"]');
            window.axios.defaults.headers.common["X-CSRF-TOKEN"] =
                token.content;
            axios
                .post("/api/contact", {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    subject: this.subject,
                    message: this.message,
                })
                .then((response) => {
                    this.first_name = "";
                    this.last_name = "";
                    this.email = "";
                    this.subject = "";
                    this.message = "";
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        },
    },
};
</script>
<style scoped>
form {
    line-height: 2.65;
}
.form-group label {
    color: #3f51b5;
    font-weight: bold;
    font-size: 18px;
}
.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #3f51b5c9;
    font-weight: 0 !important;
}
.form-group input,
.form-group textarea {
    color: #3f51b5c9;
    font-weight: bold;
}
.letter-img {
    width: 100%;
}
.letter-container {
    position: relative;
}
.letter-details {
    position: absolute;
    top: 66px;
    right: 25px;
    text-align: right;
}
.letter-details h6:nth-of-type(3) {
    border-bottom: 1px solid #2d2d2d;
    padding-bottom: 2px;
}
.letter-details p {
    width: 126px;
    line-break: anywhere;
    overflow: hidden;
    font-size: inherit;
    text-align: right;
    float: right;
}
</style>
