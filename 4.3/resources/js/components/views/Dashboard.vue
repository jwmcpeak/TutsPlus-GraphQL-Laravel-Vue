<template>
    <div class="container">
        <div class="card-columns">
            <project-card 
                v-for="project in projects" 
                :project="project" 
                :key="project.id"></project-card>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import ProjectCard from './../ProjectCard.vue';
export default {
    components: {ProjectCard},
    data() {
        return {
            projects: []
        };
    },
    created() {
        axios.post('/graphql', {
            query: '{projects{id,title,description}}'
        }).then(res => {
            this.projects = res.data.data.projects;
        });
    }
}
</script>
