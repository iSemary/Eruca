<template>
    <div class="skills-container">
        <h1>Skills</h1>
        <div class="skills-btns-container">
            <button
            @click="showSkillsType(type.name)"
            class="btn btn-skill"
            :class="activeType == type.name ? 'btn-primary' : ''"
            v-for="(type, i) in types"
            :key="i"
            v-if="types.length">
                {{ type.name }}
            </button>
        </div>
        
        <div class="skills-result-container mx-auto">
            <ul v-if="skills.length" class="list-container d-flex flex-wrap items-center justify-center">
                <li class="m-2 p-4 flex items-end justify-center"
                    v-for="(skill, i) in skills" 
                    :key="i"
                    v-bind:style="{ color: skill.color}"
                    v-if="
                    skill.type == activeType || 
                    // IF ALL SELECTED THEN Show full stack skills only (DON'T SHOW SOFTWARE APPS)
                    (activeType == types[0].name && skill.type != types[4].name)"
                >
                    <img :src="skillImagePath(skill.name)" class="mx-auto d-block mb-2">
                    <span>{{ skill.name }}</span>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            skills: [],
            activeType: [],
            types: [],
        };
    },
    mounted() {
        let types = [
            { name: "all" },
            { name: "frontend" },
            { name: "backend" },
            { name: "tools" },
            { name: "software" },
        ];
        this.types = types;
        this.activeType = "all";
        this.loadSkills();
        this.skillImagePath();
    },
    methods: {
        skillImagePath(SkillName){
            return '/assets/skills/' + SkillName.replace(' ', '_').toLowerCase().trim()  +'.png';
        },
        showSkillsType(type) {
            this.activeType = type;
        },
        loadSkills: function () {
            axios
                // Load API
                .get("/api/skills")

                .then((response) => {
                    // Assign this.skills
                    this.skills = response.data.data;
                })
                .catch((err) => {
                    //Catch Errors
                    console.log(err);
                });
        },
    },
};
</script>
