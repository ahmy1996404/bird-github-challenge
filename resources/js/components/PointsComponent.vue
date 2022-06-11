<template>
    <div class="container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-12 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <div class="container mt-3">
                                <div class="logo text-center mt-4">
                                    <img
                                        src="https://i.imgur.com/gr4XvFZ.png"
                                        alt="Bird"
                                    />
                                </div>
                                <h5
                                    class="card-title text-center mt-3 fw-light fs-5"
                                >
                                    <strong>{{ userName }}</strong>
                                </h5>
                                <div class="text-center">
                                    <a href="/" class=""> (try again) </a>
                                </div>

                                <p
                                    class="card-title text-center mt-3 fw-light fs-5"
                                >
                                    <strong>Total Points : </strong
                                    >{{ userScore }} point
                                </p>
                                <div class="container">
                                    <div class="row table-responsive-sm">
                                        <table class="table text-center">
                                            <thead class="bg-color-head">
                                                <tr>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">
                                                        Repository
                                                    </th>
                                                    <th scope="col">date</th>
                                                    <th scope="col">points</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    v-for="event in userData"
                                                    :key="event.date"
                                                >
                                                    <td>{{ event.type }}</td>
                                                    <td>
                                                        <strong>{{
                                                            event.repository
                                                        }}</strong>
                                                    </td>
                                                    <td class="date">
                                                        Created on
                                                        {{
                                                            event.date
                                                                | formatDate
                                                        }}
                                                    </td>
                                                    <td colspan="2">{{ event.points }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="last-td"></td>

                                                    <td colspan="2" class="total-score">{{ userScore }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            userName: this.$store.getters.get_userName,
            userScore: this.$store.getters.get_userScore,
        };
    },
    computed: {
        userData() {
            return this.$store.getters.get_userData;
        },
    },
    methods: {},
};
</script>

<style scoped></style>
