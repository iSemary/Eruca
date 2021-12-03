<template>
    <div>
        <h1 class="title-name">Portfolio</h1>
        <div class="portfolio-btns-container">
            <button
                @click="showPortfoliosType(type.name)"
                class="btn btn-skill"
                :class="activeType == type.name ? 'btn-primary' : ''"
                v-for="(type, i) in types"
                :key="i"
                v-if="types.length"
            >
                {{ type.name }}
            </button>
        </div>
        <div class="portfolio-result-container mx-auto">
            <ApolloQuery
                :query="require('../../graphql/queries/Portfolios.gql')"
            >
                <template
                    slot-scope="{ result: { data, error, loading }, isLoading }"
                >
                    <div v-if="isLoading" class="text-center mt-5">
                        <fa
                            class="apollo-spinner"
                            :icon="['fas', 'spinner']"
                            pulse
                        ></fa>
                    </div>
                    <div v-else-if="error" class="alert alert-danger">
                        Something went wrong!
                    </div>
                    <ul
                        v-else
                        class="
                            list-container
                            d-flex
                            flex-wrap
                            row
                            items-center
                            justify-center
                        "
                    >
                        <li
                            v-for="portfolio of data.portfolios"
                            :key="portfolio.id"
                            v-if="portfolio.type == activeType"
                            class="
                                col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12
                                m-2
                                p-2
                                items-end
                                justify-center
                            "
                        >
                            <router-link :to="{ path: '/portfolio/' + portfolio.id }" class="router-link">
                                <img
                                    :src="
                                        PortfolioImagePath(portfolio.thumbnail)
                                    "
                                    alt=""
                                />
                                <div class="project-details">

                                    <h5 class="text-dark m-0">{{ portfolio.name }}</h5>
                                    <p class="text-dark m-0">{{ portfolio.title }}</p>
                                </div>
                                <div
                                    class="
                                        technology-used-container
                                        d-flex
                                        flex-wrap
                                    "
                                >
                                    <span
                                        class="badge text-dark m-1"
                                        v-bind:style="{
                                            backgroundColor:
                                                skills[skills_used - 1].color,
                                        }"
                                        v-for="skills_used of portfolio.skills_id"
                                        :key="skills[skills_used].id"
                                    >
                                        <b>{{
                                            skills[skills_used - 1].name
                                        }}</b>
                                    </span>
                                </div>
                                <small class="project-date text-muted">
                                    <fa :icon="['fas', 'calendar-alt']"></fa>
                                    {{ portfolio.finished_at }}
                                </small>
                            </router-link>
                        </li>
                    </ul>
                </template>
            </ApolloQuery>
        </div>
    </div>
</template>
<script>
import gql from "graphql-tag";
export default {
    name: "portfolio",
    data() {
        return {
            skills: [],
            activeType: [],
            types: [],
            skills: [],
        };
    },
    mounted() {
        let types = [
            { name: "Web Development" },
            { name: "UI/UX" },
            { name: "Design" },
        ];
        this.types = types;
        this.activeType = "Web Development";
    },
    methods: {
        PortfolioImagePath(thumbnail) {
            return "/assets/portfolio/" + thumbnail;
        },
        showSkillsType(type) {
            this.activeType = type;
        },
        showPortfoliosType(type) {
            this.activeType = type;
        },
    },
    apollo: {
        skills: gql`
            {
                skills {
                    id
                    name
                    type
                    color
                }
            }
        `,
    },
};
</script>
