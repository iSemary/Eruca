<template>
    <div>
        <form
            action=""
            method="POST"
            class="login-form"
            @submit.prevent="login"
        >
            <div class="form-group">
                <label for="email"
                    ><fa :icon="['fas', 'user']"></fa> Email Address</label
                >
                <input
                    type="email"
                    v-model="email"
                    id="email"
                    class="form-control"
                    placeholder="Enter your email address"
                />
            </div>
            <div class="form-group">
                <label for="password"
                    ><fa :icon="['fas', 'lock']"></fa> Password</label
                >
                <input
                    type="password"
                    v-model="password"
                    id="password"
                    class="form-control"
                    placeholder="Enter your password"
                />
            </div>
            <div class="form-group mt-1">
                <button
                    class="btn btn-primary login-btn w-100 d-block"
                    type="submit"
                >
                    Login
                </button>
            </div>
        </form>
    </div>
</template>
<script>
import gql from "graphql-tag";
import { onLogin } from "../../vue-apollo.js";

export default {
    data() {
        return {
            email: "",
            password: "",
        };
    },
    methods: {
        login() {
            this.$apollo
                .mutate({
                    // Query
                    mutation: gql`
                        mutation ($input: LoginInput!) {
                            login(input: $input) {
                                access_token
                            }
                        }
                    `,
                    // Parameters
                    variables: {
                        input: {
                            username: this.email,
                            password: this.password,
                        },
                    },
                })
                .then((data) => {
                    // Result
                    onLogin(
                        this.$apollo.provider.defaultClient,
                        data.data.login.access_token
                    );
                    this.$router.push("/home");
                })
                .catch((error) => {
                    // Error
                    console.error(error);
                });
        },
    },
};
</script>
<style lang="scss" scope>
.login-form {
    $mainColor: #0b609b;
    width: 50%;
    margin: 0 auto;
    .form-group {
        label {
            font-weight: bold;
            color: $mainColor;
        }
        button {
            color: #fff;
            background-color: $mainColor;
        }
        input {
            border: 2px solid $mainColor;
            border-radius: 0;
        }
    }
}
</style>
