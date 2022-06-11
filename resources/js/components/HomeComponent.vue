<template>
    <div class="container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <div class="logo text-center">
                                <img
                                    src="https://i.imgur.com/gr4XvFZ.png"
                                    alt="Bird"
                                />
                            </div>
                            <h5
                                class="card-title text-center mb-4 mt-3 fw-light fs-5"
                            >
                                Github points code challenge
                            </h5>
                            <p></p>
                            <div>
                                <div class="form-floating mb-3">
                                    <input
                                        v-model="username"
                                        type="text"
                                        class="form-control"
                                        :class="{ 'is-invalid': errors }"
                                        id="floatingInput"
                                        placeholder="Please insert Your Github User Name"
                                    />
                                    <label for="floatingInput">
                                        User name</label
                                    >
                                    <div
                                        id="validationServerUsernameFeedback"
                                        class="invalid-feedback"
                                    >
                                        invalid please check your inputs and try
                                        again
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button
                                        class="btn btn-primary btn-login text-uppercase fw-bold"
                                        type="submit"
                                        @click.prevent="getUserPoints"
                                    >
                                        Get Points
                                    </button>
                                </div>
                                <hr class="my-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            Made with
            <span style="color: #e25555">&#9829;</span>
            by Ahmed Hamouda
        </div>
    </div>
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            username: "",
            errors: false,
        };
    },
    methods: {
        getUserPoints() {
            this.$store
                .dispatch("performUserData", this.username)
                .then((res) => {
                    this.$router.push({ name: "points" });
                })
                .catch((error) => {
                    this.errors = true;
                });
        },
    },
};
</script>

<style scoped></style>
